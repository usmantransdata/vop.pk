<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignTemplate extends Model
{
    protected $table = 'assign_template';

    public $timestamps = false;


     protected $fillable = ['title', 'name', 'template_id'];



    public function emailTemplate(){

 		   return $this->hasMany('App\EmailTemplate');
    }

     public function user(){

 		   return $this->hasMany('App\User');
    }




}         
