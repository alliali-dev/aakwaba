<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //retourne la vue contact 
    public function contact()
    {
        return view('/contacts.contact');
    }

    // Envoi du mail aux utilisateurs
    public function EmailSend(Request $request)
    {
        try {
            #1. Validation de la requête
            $validator = Validator::make(
                $request->all(),
                [
                    'nom' => 'string|required|max:20',
                    'adresseemail' => 'mail|required|max:20',
                    'telephone' => 'string|required|max:15',
                    'message' => 'string|required',
                ]
            );
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
        } catch (\Exception $exception) {

            return back()->withErrors($exception->getMessage())->withInput();
        }

        #2. Récupération des utilisateurs
        // $users = User::all();
        $mail = 'aakwaba@gmail.com';
        #3. Envoi du mail
        Mail::to($mail)->locale('fr')->bcc("")
            ->queue(new Mailable($request->all()));

        return back()->withText("Message envoyé");
    }
}