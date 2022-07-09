<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/a', function (){
   $data = array('name'=>"Mensagem Automatica");
        // Path or name to the blade template to be rendered
   $template_path = 'welcome';

   Mail::send(['text'=> $template_path ], $data, function($message) {
            // Set the receiver and subject of the mail.
    $message->to('kristyanhenrique@hotmail.com', 'Nome de quem vai receber')->subject('Laravel First Mail');
            // Set the sender
    $message->from('kristyanhenrique@hotmail.com','Mensagem Automatica');
});

   return "Basic email sent, check your inbox.";

});