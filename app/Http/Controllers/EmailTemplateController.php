<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmailTemplate;
use DB;

class EmailTemplateController extends Controller
{
   public function emailTemplate(Request $request){

   		
   		return view('emails-template.create-email-template');

   	}

   	 public function template()
    {
    	$templates = DB::table('email_template')->get();

    	return view('emails-template.templates', ['templates' => $templates]);
       // return view('emails-template.templates');

    }
   

   	  public function emailTemplateStore(Request $request)

    {
        
        $detail	=	$request->input('template');

        $dom = new \DomDocument();

        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    

        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){

            $data = $img->getAttribute('src');

            list($type, $data) = explode(';', $data);

            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);

            $image_name= "/upload/" . time().$k.'.png';

            $path = public_path() . $image_name;

            file_put_contents($path, $data);

            $img->removeAttribute('src');

            $img->setAttribute('src', $image_name);

        }

        $detail = $dom->saveHTML();

        //dd($detail);

        $user= new EmailTemplate();
        $user->title= $request['title'];
        $user->subject= $request['subject'];
        $user->avatar= $request['avatar'];
        $user->template= $detail;
    // add other fields
    $user->save();

          return view('emails-template.templates');
    }


    public function edit($id){
    	   $templates = EmailTemplate::findOrFail($id);

    	return view('emails-template.edit', ['templates' => $templates]);
     //   return view('emails-template.edit', compact('$templates'));
  

    }

    public function update(Request $request, $id){

         	$this->validate($request, [
                    'title'=>'required|max:100',
                    'subject'=>'required',
                    'template'=>'required',
                ]);

         	 $template = EmailTemplate::findOrFail($id);
                $template->title = $request->input('title');
                $template->subject = $request->input('subject');
                $template->template = $request->input('template');
                $template->save();

            return redirect()->route('email-template.get', 
                $template->id)->with('flash_message', 
                'Template, '. $template->title.' updated');
        }

    public function del(){

    	
    }


    public function view($id){

    	 $template = EmailTemplate::where('id', $id)
            ->orWhere('id', $id)
            ->firstOrFail();

            return view ('emails-template.view', compact('template'));
       
    }


}

