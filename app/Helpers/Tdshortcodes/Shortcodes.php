<?php

namespace App\Helpers\Tdshortcodes;

 
class Shortcodes {
    /**
     * @param int $user_id User-id
     * 
     * @return string
     */
	 public static function replacement($string, array $placeholders)
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
