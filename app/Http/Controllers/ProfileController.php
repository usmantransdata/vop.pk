<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use Auth;
use App\User;
use DB;
class ProfileController extends Controller
{
    
    public function profile(){
    	$id = Auth::user()->id;
        $profile = Profile::find($id); 

       

        return view('users.profile')->with('profile', $profile);
    }

    public function updateProfile(Request $request)
    {
             $input = $request->all();
       	
       if (request()->ajax())
        {
        	$id = Auth::user()->id;
        	
        	//$id = Auth::user()->id;
        	$update = DB::table('profile')->update([
        		
        			'name' => $input['username'],
        			'address' => $input['country'],
        			'age'=>	$input['age'],
        			'join_date' =>	$input['signup'],
        			'about' => $input['about'],
        			'intrests' => $input['intrests'],
        			'user_id' => $id,
        		
        	]);
        	 $profile = Profile::find($id); 
 
 		return view('users.profile', compact('profile', $profile));
    }
    }

}
