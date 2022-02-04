<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendMail()
    {
        $data = ['k1'=>'du lieu dong'];
        //to: địa chỉ email người nhận
        Mail::to('sretksorjiu.nguyen@gmail.com')->send(new DemoMail($data));
    }
}
