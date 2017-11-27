<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profile";

    public $timestamps =false;


     protected $fillable = [
        'name', 'address', 'age', 'join_date', 'about', 'intrests'
    ];


    public function user(){

    	return $this->belongsTo('App\User');
    }
}
