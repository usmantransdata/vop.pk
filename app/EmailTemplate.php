<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
	protected $table = 'email_template';

	public $timestamps = false;
		
     protected $fillable = [
        'title', 'subject', 'avatar', 'template'
    ];




    public function assignTemplate(){

    	 return $this->belongsTo('App\AssignTemplate');

    }

}
