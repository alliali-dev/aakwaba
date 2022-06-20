<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\AuteurModel;
use App\Models\CategorieModel;
use App\Models\EditeurModel;
use App\Models\LivreModel;
use App\Models\TypelivreModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use PhpParser\Node\Expr\New_;

class LivreController extends Controller
{
    //

    public function createForAdmin()
    {
        $Auteurs = AuteurModel::all();
        $Editeurs = EditeurModel::all();
        $Typelivres = TypelivreModel::all();
        $Categories = CategorieModel::all();
        return view('livres/numerique/numerique', compact('Auteurs', 'Editeurs', 'Typelivres', 'Categories'));
    }

    public function createForSuperAdmin()
    {
        $Auteurs = AuteurModel::all();
        $Editeurs = EditeurModel::all();
        $Typelivres = TypelivreModel::all();
        $Categories = CategorieModel::all();
        return view('livres/numerique/numeriques', compact('Auteurs', 'Editeurs', 'Typelivres', 'Categories'));
    }

    public function store(Request $request)
    {

        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'NomLivre' => 'bail|required|string|unique:livre,LibLivre|min:2|max:50',
                    'dateedi' => 'required|date',
                    'Typelivre' => 'required|string',
                    'Auteur' => 'required|string',
                    'Editeur' => 'required|string',
                    'Categorie' => 'required|string',
                    'Photolivre' => 'required|image|mimes:jpg,jpeg,png',
                    'Livre' => 'required|file|mimes:pdf,mp4,mp3',
                ]
            );

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            $livre = new LivreModel();

            $livre->LibLivre        = $request->NomLivre;
            $livre->DatEdi          = $request->dateedi;
            $livre->editeur_id      = $request->Editeur;
            $livre->auteur_id       = $request->Auteur;
            $livre->categorie_id    = $request->Categorie;
            $livre->typelivre_id    = $request->Typelivre;

            if ($request->file('Photolivre')) {
                //stocker le fichier dans le dossier du Livre
                $file = $request->file('Photolivre');
                $filename = Str::slug('Photolivre') . '_' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('fichiers/image');

                if (!File::isDirectory($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }

                // enregistre le fichier sur l'emplacement $pach definit sous le nom $filename
                $file->move($path, $filename);
                $data['file_guide_image'] = $filename;
            }

            $livre->image = $filename;

            if ($request->file('Livre')) {
                //stocker le fichier dans le dossier du Livre
                $file = $request->file('Livre');
                $filename = Str::slug('Livre') . '_' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path('fichiers/document');

                if (!File::isDirectory($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }

                // enregistre le fichier sur l'emplacement $pach definit sous le nom $filename
                $file->move($path, $filename);
                $data['file_guide_document'] = $filename;
            }

            $livre->document  = $filename;
            $livre->save();

            if ($livre) {
                return back()->with('success', 'Enregistrement éffectué!');
            }
        } catch (\Exception $exception) {

            return back()->withErrors($exception->getMessage())->withInput();
        }
    }

    public function liste()
    {

        $Livres = LivreModel::paginate('5');
        return view('/livres/numerique.liste', compact('Livres'));
    }

    public function listeForAdmin()
    {

        $Livres = LivreModel::paginate('5');
        return view('/livres/numerique.listess', compact('Livres'));
    }

    public function listeForSuperAdmin()
    {

        $Livres = LivreModel::paginate('5');
        return view('/livres/numerique.listes', compact('Livres'));
    }

    // afficher un seul livre
    public function show($id)
    {
        // 
        return view('/livres/lecture', [
            'livre' => LivreModel::findOrFail($id)
        ]);
    }

    // envoi le formulaire de modification d'un livre
    public function edit($id)
    {
        // 
    }

    // modification d'un livre
    public function update(Request $request, $id)
    {
        // 
        $livre = new LivreModel();
        $livre->update($request->$id);
        return back()->with('success', 'Modification éffectuée!');
    }

    // supprimer un livre
    public function delete($id)
    {
        // 
    }


    // public function lecture()
    // {
    //     $Livres = LivreModel::paginate('5');
    //     return view('/livres/lecture', compact('Livres'));
    // }

    public function auteur()
    {
        # code...

    }
}
