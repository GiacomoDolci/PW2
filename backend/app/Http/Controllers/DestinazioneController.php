<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinazione;

class DestinazioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinazioni = Destinazione::with('attrazioni')->get();
        return response()->json($destinazioni);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $destinazione = Destinazione::with('attrazioni')->find($id);

        if (!$destinazione) {
            return response()->json(['message' => 'Destinazione non trovata'], 404);
        }

        return response()->json($destinazione);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
