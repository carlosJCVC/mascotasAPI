<?php

namespace App\Http\Controllers;

use App\models\AdoptionApplication;
use http\Env\Response;
use Illuminate\Http\Request;
use DB;

class AdoptionApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = DB::table('adoption_applications')->get();
        return response()->json($datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['estado_solicitud'] = "EN PROCESO";
        $adoptionApplication = new AdoptionApplication($input);
        $adoptionApplication->save();
        return response()->json($adoptionApplication);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(AdoptionApplication $adoptionApplication)
    {
        return response()->json($adoptionApplication);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdoptionApplication $adoptionApplication)
    {
        $input = $request->all();
        $adoptionApplication->update($input );
        return response()->json($adoptionApplication);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdoptionApplication $adoptionApplication)
    {
        $adoptionApplication->delete();
        return response()->json($adoptionApplication);
    }
}
