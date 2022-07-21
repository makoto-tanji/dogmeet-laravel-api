<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 以下追加
use App\Mail\InformationMail; //Mailable
use Mail;

class InformationMailController extends Controller
{
    //

    public function send(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $text = $request->text;

        Mail::to($email)
            ->send(new InformationMail($name,$email, $text));

        return response()->json([
            'message' => 'Send mail successfully',
            'request' => $request->all()
        ], 200);
    }
}
