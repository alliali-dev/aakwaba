<?php

namespace App\Http\Controllers;

use App\Models\HotelModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class HotelController extends Controller
{
  //retourne la vue hotel
  public function  Hotel()
  {
    return view('/hotels.hotel');
  }

  // nouvel hotel by commercial
  public function newhotel()
  {
    return view('/hotels.addhotel');
  }
  // nouvel hotel by admin
  public function hotelbyadmin()
  {
    return view('hotels.addhotelbyadmin');
  }

  // enregistrer dans la db
  public function store(Request $request)
  {

    try {
      $validator = Validator::make(
        $request->all(),
        [
          'NomHotel' => 'required|string',
          'Adressehotel' => 'required|string',
          'Telresevre' => 'required|string',
          'Telhotel' => 'required|string',
          'email' => 'required|email',
          'situation' => 'required|string',
          'nombrechambre' => 'required|string',
          'typechambre' => 'string',
          'equipement' => 'string',
          'menuplat' => 'string',
          'horaireserviced' => 'required|string',
          'horaireservicef' => 'required|string',
          'autreservice' => 'string',
          'Commentaire' => 'nullable|string',
          'Photohotel' => 'required|image|mimes:png,jpeg',
          'Photochambre' => 'required|image|mimes:png,jpeg',
        ]
      );

      if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
      }

      $hotel = new HotelModel();
      $hotel->nom = $request->NomHotel;
      $hotel->adresse = $request->Adressehotel;
      $hotel->telreserve = $request->Telresevre;
      $hotel->telhotel = $request->Telhotel;
      $hotel->email = $request->email;
      $hotel->localisation = $request->situation;
      $hotel->nombrechambre = $request->nombrechambre;
      $hotel->typechambre = $request->typechambre;
      $hotel->equipement = $request->equipement;
      $hotel->menuplat = $request->menuplat;
      $hotel->ouverture = $request->horaireserviced;
      $hotel->fermeture = $request->horaireservicef;
      $hotel->autre = $request->autreservice;
      $hotel->commentaire = $request->Commentaire;

      if ($request->file('Photohotel')) {
        //stocker le fichier dans le dossier du hotel
        $file = $request->file('Photohotel');
        $filename = Str::slug('Photohotel') . '_' . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path('fichiers/imagehotel');

        if (!File::isDirectory($path)) {
          File::makeDirectory($path, 0777, true, true);
        }

        // enregistre le fichier sur l'emplacement $pach definit sous le nom $filename
        $file->move($path, $filename);
        $data['file_guide_image'] = $filename;
      }

      $hotel->photo = $filename;

      if ($request->file('Photochambre')) {
        //stocker le fichier dans le dossier du hotel
        $file1 = $request->file('Photochambre');
        $filename1 = Str::slug('Photochambre') . '_' . time() . '.' . $file1->getClientOriginalExtension();
        $path1 = public_path('fichiers/imagechambre');
        // creer le dossier fichiers/imagechambre s'il n'existe pas
        if (!File::isDirectory($path1)) {
          File::makeDirectory($path1, 0777, true, true);
        }

        // enregistre le fichier sur l'emplacement $pach definit sous le nom $filename
        $file1->move($path1, $filename1);
        $data['file_guide_image'] = $filename1;
      }

      $hotel->photochambre  = $filename1;

      $hotel->save();

      if ($hotel) {
        // session()->flash('success', 'Enregistrement éffectué!');
        return back()->with('success', 'Enregistrement éffectué!');
      };
    } catch (\Exception $exception) {

      return back()->withErrors($exception->getMessage())->withInput();
    }
  }

  // liste des hotels

  public function listehotel()
  {

    $Hotels = HotelModel::all();
    return view('hotels.listehotels', compact('Hotels'));
  }

  // liste pour commercial
  public function listeforcom()
  {

    $Hotels = HotelModel::paginate('1');
    return view('hotels.listeforcom', compact('Hotels'));
  }
}