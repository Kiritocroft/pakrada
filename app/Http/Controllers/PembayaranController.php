<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pembayaran::with('siswa')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'jumlah' => 'required|numeric',
            'tanggal_pembayaran' => 'required|date',
        ]);

        $pembayaran = Pembayaran::create($validate);
        return response()->json($pembayaran, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Pembayaran::with('siswa')->findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update($request->all());

        return response()->json($pembayaran, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran::destroy($id);
        return response()->json(null, 204);
    }
}
