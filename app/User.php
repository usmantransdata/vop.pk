<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Hash;
use Auth;

class User extends Authenticatable
{


    use Notifiable;
    use HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   

        public function setPasswordAttribute($password)
        {
     $this->attributes['password'] = Hash::needsRehash($password) ? Hash::make($password) : $password;
        }


    public function is_admin(){

  if ($this->admin){

                    return true;
                }
                return false;

          
            }

 public function assignTemplate(){

         return $this->belongsTo('App\AssignTemplate');

    }


     public function profile(){

         return $this->belongsTo('App\Profile');

    }          
}