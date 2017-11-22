<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::post('register', 'Auth\RegisterController@register');

Route::get('/backend', 'HomeController@index')->name('backend');

// role and permision routes 


Route::get('posts', 'PostController@index')->name('posts');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');


//activation 

Route::get('user/activation/{token}', 'Auth\RegisterController@userActivation');

Route::get('user/confirmation/{verification_token}', 'Auth\RegisterController@confirmation')->name('confirmation');


Route::get('create-email-template', 'EmailTemplateController@emailTemplate')->name('create-email-template');



Route::get('email-template',array('as'=>'email-template.get','uses'=>'EmailTemplateController@template'));

Route::post('email-template',array('as'=>'email-tmeplate.post','uses'=>'EmailTemplateController@emailTemplateStore'));

Route::get('email-edit/{id}','EmailTemplateController@edit')->name('email-edit');

Route::get('email-view/{id}','EmailTemplateController@view')->name('email-view');


Route::get('email-del','EmailTemplateController@edit')->name('email-del');


Route::post('email-template-update/{id}',array('as'=>'email-template-update','uses'=>'EmailTemplateController@update'));


Route::get('template-assign', 'AsignTemplateController@templateAssign')->name('template-assign');


Route::get('asign-template', 'AsignTemplateController@asignTemplate')->name('asign-template');


//Route::get('template', 'EmailTemplateController')->name()