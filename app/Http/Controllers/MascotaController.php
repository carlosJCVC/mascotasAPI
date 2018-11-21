<?php

namespace App\Http\Controllers;

use App\models\Mascota;
use http\Env\Response;
use Illuminate\Http\Request;
use DB;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = DB::table('mascotas')->get();

        return response()->json($mascotas);
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
        $mascota = new Mascota($input);
        $mascota->save();
        return response()->json($mascota);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        return response()->json($mascota);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota $mascota)
    {
        $input = $request->all();
        $mascota->update($input );
        return response()->json($mascota);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return response()->json($mascota);
    }
}
