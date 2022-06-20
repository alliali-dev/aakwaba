<?php

namespace App\Http\Controllers;

use App\Models\HotelModel;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //afficher
        $Services = Service::paginate('10');
        return view('services.index', compact('Services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //creer un service
        $hotel = HotelModel::all();
        return view('services.service', compact('hotel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #1. Validation de la requête
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'libelle' => 'string|required',
                    'description' => 'string|required',
                    'type' => 'string|required',
                    'hotel' => 'required',
                ]
            );

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            $service = new Service();
            $service->libelleservice = $request->libelle;
            $service->description = $request->description;
            $service->typeservice = $request->type;
            $service->hotels_id = $request->hotel;
            $service->save();
            if ($service) {
                // session()->flash('success', 'Enregistrement éffectué!');
                return back()->with('success', 'Enregistrement éffectué!');
            }
        } catch (\Exception $exception) {

            return back()->withErrors($exception->getMessage())->withInput();
        }
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