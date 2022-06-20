<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use PhpParser\Node\Expr\New_;

class RegisterSuperAdminController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
   protected function createsuperadmin()
    {
        return view('/auth.registersuperadmin');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     * 
     */

    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'telephone' => 'required|string|min:8|max:15',
                'password' => 'required|confirmed|min:12',
                'photo' => 'required|file|mimes:jpg,jpeg,png',
                'st' => 'required|integer',
                'datenaissance' => 'required|date',
                'Pays' => 'required|string',
            ]
        );

        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput();
        }

        $user = new User();

        $user->name = $request->name;
        $user->datenaissance = $request->datenaissance;
        $user->pays = $request->Pays;
        $user->email = $request->email;
        //on recupere le champ password
        $pass = $request->password;
        //on  le crypte et on l'affecte a la colonne password de la base de donnees
        $user->password = Hash::make($pass);


        if ($request->file('photo')) {
            //stocker le fichier dans le dossier du fichier/Avatar
            $file = $request->file('photo');
            // preceder le nom par photo avec slug()
            $nomfichier = Str::slug('photo') . '_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('fichiers/Avatar');

            //Creer le repertoire s'il n'existe pas
            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            // enregistre le fichier sur l'emplacement $path definit sous le nom $filename
            $file->move($path, $nomfichier);
            $data['file_guide_Avatar'] = $nomfichier;
        }
        $user->image = $nomfichier;

        $user->telephone = $request->telephone;

        $user->statut = $request->st;

        $user->save();

        if ($user) {
            return back()->with('success', 'Inscription Admin bien éffectuée!');
        }

        event(new Registered($user));

        Auth::login($user);
    }
   
}
