<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Mail;
use App\Mail\Message;

class EmailController extends Controller
{
    public function disparar(Request $request)
    {
        $var[0]=$request->conteudo;
        $var[1]=$request->nome;
        $var[2]=$request->email;
        Mail::to('irrita.cp1@gmail.com')->send(new message($var));

        return 'mandei caraio';
    }
}
