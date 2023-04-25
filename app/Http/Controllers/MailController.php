<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use Mail;
use App\Mail\MailNotify;
use Exception;

class MailController extends Controller
{
    //
    public function index(){
      $data=[
        'subject' => 'Totorial Mail',
        'body =>  hello this is my email  '
      ] ;
      try{
        Mail::to('hachememran@gmail.com')->send(new MailNotify($data));
        return response()->json(['great check your email ']);

      }catch(Exception  $th){
        return response()->json(['sorry somethig ']);
      }
    }
}
