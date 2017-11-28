<?php

namespace App\Http\Controllers;





class ShortcodeController extends Controller {

    public function __construct() {
        $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
     public function replacement($string, array $placeholders)
     {
    $resultString = $string;


    foreach($placeholders as $key => $value) {

        if(!is_array($value)){
      
        $resultString = str_replace('[' . $key . ']' , $value, $resultString, $i);
        
       }
    }
	  return $resultString;
    }
   

	
   
}