<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Chambre;
use App\Models\HotelModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categories = Categorie::all();
        $Hotels = HotelModel::all();
        //formulaire d'insertion
        return view('chambres.ajout', compact('Categories', 'Hotels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'NumeroChambre' => 'required|string',
                    'NumeroEtage' => 'required|string',
                    'telephonechambre' => 'required|string',
                    'prixchambre' => 'required|string',
                    'statutchambre' => 'required|string',
                    'equipement' => 'string',
                    'photochambre' => 'required|image|mimes:png,jpeg|max:5120',
                ]
            );

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            $chambre = new Chambre();
            $chambre->numerochambre = $request->NumeroChambre;
            $chambre->numeroetage = $request->NumeroEtage;
            $chambre->telephonechambre = $request->telephonechambre;
            $chambre->equipements = $request->Dmat . ' ' . $request->M2PE . ' ' . $request->Clim . ' ' . $request->Vent . ' ' . $request->Wifi . ' ' . $request->Tv;
            $chambre->prixchambre = $request->prixchambre;
            $chambre->statutchambre = $request->statutchambre;
            if ($request->file('photochambre')) {
                //stocker le fichier dans le dossier du chambre
                $file = $request->file('photochambre');
                $filename = Str::slug('photochambre') . '_' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('fichiers/imagechambre');

                if (!File::isDirectory($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }

                // enregistre le fichier sur l'emplacement $pach definit sous le nom $filename
                $file->move($path, $filename);
                $data['file_guide_image'] = $filename;
            }

            $chambre->photochambre = $filename;
            $chambre->categories_id  = $request->categorie;
            $chambre->hotels_id = $request->hotel;

            $chambre->save();

            if ($chambre) {
                // session()->flash('success', 'Enregistrement éffectué!');
                return back()->with('success', 'Enregistrement éffectué!');
            };
        } catch (\Exception $exception) {

            return back()->withErrors($exception->getMessage())->withInput();
        }
    }


    public function liste()
    {
        $Chambres = Chambre::paginate('10');
        return view('chambres/liste', compact('Chambres'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}