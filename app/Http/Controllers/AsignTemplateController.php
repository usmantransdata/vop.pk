<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\AsignTemplate;
use App\EmailTemplate;

class AsignTemplateController extends Controller
{
   



   public function templateAssign(){


   // DB::table('email_template')->select('id','title', 'subject')->get();

 $temps = DB::table('email_template')->select('email_template.*','assign_template.*' )->join('assign_template','assign_template.template_id','=','email_template.id')->get();

   return view('emails-template.assign-template', compact('temps', $temps));
   }



   public function asignTemplate(Request $request){

   		$input = $request->all();

   		$asign = new AsignTemplate();
        $asign->name = $request['name'];
        $asign->template_id = $request['template'];
    	$asign->save();	
   return back();
   }
}
