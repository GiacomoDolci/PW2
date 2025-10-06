<?php

namespace App\Http\Controllers;
use App\Models\Attrazione;

use Illuminate\Http\Request;

class AttrazioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attrazioni = Attrazione::with('destinazione')->get();
        return response()->json($attrazioni);
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
        $attrazione = Attrazione::with('destinazione')->find($id);

        if (!$attrazione) {
            return response()->json(['message' => 'Attrazione non trovata'], 404);
        }

        return response()->json($attrazione);
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
