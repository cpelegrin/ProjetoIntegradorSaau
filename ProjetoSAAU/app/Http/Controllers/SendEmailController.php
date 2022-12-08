<?php

namespace App\Http\Controllers;

use Dflydev\DotAccessData\Data;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use SebastianBergmann\Type\VoidType;
use Illuminate\Suppor\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function send(Request $request)
    {
        $this-validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
    }
}

    class SendMail extends Mailable
    {
        use Queueable, SerializesModels;

        public $data;

            @return void
        
        public function __construct($data)
        {
            $this->data = $data;
        }

            @return $this
        
        public function build()
        {
            return $this->from('contato@saau.com')->subject('New Customer Equiry')->view('message')->with('data', $this->data);
        }
    }
