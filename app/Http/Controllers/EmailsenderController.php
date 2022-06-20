<?php

namespace App\Http\Controllers;

use App\Mail\EmailSender;
use App\Models\EmailsenderModel;
use App\Models\User;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class EmailsenderController extends Controller
{
	//
	// Le formulaire du message
	public function formEmailSend()
	{
		return view("/Emails.EmailSender");
	}

	// Envoi du mail aux utilisateurs
	public function EmailSend(Request $request)
	{

		#1. Validation de la requête
		$this->validate($request, ['message' => 'bail|required']);

		#2. Récupération des utilisateurs
		$users = User::all();

		#3. Envoi du mail
		Mail::to($users)->locale('fr')->bcc("")
			->queue(new Mailable($request->all()));

		return back()->withText("Message envoyé");
	}
}