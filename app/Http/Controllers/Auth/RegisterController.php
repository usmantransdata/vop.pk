<?php

namespace App\Http\Controllers\Auth;


use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Jrean\UserVerification\Traits\VerifiesUsers;
use Jrean\UserVerification\Facades\UserVerification;
use Illuminate\Http\Request;
use App\AsignTemplate;
use App\EmailTemplate;
use Mail;
use App\Mail\Email;
use App\Mail\Welcome;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;
    use VerifiesUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
  public function __construct()
    {
        $this->middleware('guest',['except' => ['getVerification', 'getVerificationError']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

     protected function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $request->input('email'), 'password' => $request->input('password'))))
        {
            if(auth()->user()->verified == '0'){
                $this->logout();
                return back()->with('warning',"First please active your account.");
            }
            return redirect()->to('auth.login');
        }else{
            return back()->with('error','your username and password are wrong.');
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


     public function register(Request $request)
    {       
        
        
        $input = $request->all();
            $validator = $this->validator($input);      
		 //echo "dfg";
         //die();	
        if ($validator -> passes())
       {
            
            $data = $this->create($input)->toArray();
            $data['verification_token'] = str_random(25);
            $user = User::find($data['id']);
            $temp = AsignTemplate::find(1);
            $email = EmailTemplate::findOrFail($temp->template_id)->first();	



			$data['subject']=$email->subject;
			$data['template']=$email->template;
            $data['title']=$email->title;
            $user->verification_token = $data['verification_token'];
            $user->save();
			Mail::to($data['email'])->send(new Welcome($data));
           
      return back()->withAlert('Register successfully, please verify your email.');

       }
       else{
        
        return redirect()->back()->withErrors($validator)->withInput();

       }
      
    }

    public function confirmation($verification_token){
        $user = User::where('verification_token', $verification_token)->first();
        if(!is_null($user)){
            $user->verified = 1;
            $user->verification_token = '';
            $user->save();
            return redirect(route('login'))->with('status', 'Your activation is complete');


        }

    }
}
