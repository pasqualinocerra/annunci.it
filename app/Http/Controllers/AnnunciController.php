<?php

namespace App\Http\Controllers;

use App\Models\Annunci;
use Illuminate\Http\Request;

class AnnunciController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annunci = Annunci::where('pubblicato_SN', true)->get();

        return view('welcome')->with('annunci', $annunci);
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
        $request->validate([
            'titolo' => 'required|max:30',
            'descrizione' => 'required|max:50',
            'prezzo' => 'required'
        ]);

        $annuncio= new Annunci();
        $annuncio->titolo = $request-> titolo;
        $annuncio->descrizione = $request-> descrizione;
        $annuncio->prezzo = $request-> prezzo;
        $annuncio->pubblicato_SN = 0;
        $annuncio->id_utente = auth()->user()->id;
        $annuncio->id_categoria = $request->categoria;
        $annuncio->save();

        return redirect()->back()->with('success', 'Annuncio salvato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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

    public function annunciDaRevisionare(){

        $annunciDaRevisionare = Annunci::where('pubblicato_SN', 0)->get();

        return view('annunci.index')->with('annunciDaRevisionare', $annunciDaRevisionare);
    }

    public function pubblicaAnnuncio(String $id){

        $annucioDaPubblicare = Annunci::where('id',$id)->first();
        $annucioDaPubblicare -> pubblicato_SN = 1;
        $annucioDaPubblicare ->save();

        return redirect()->back()->with('pubblicato_SN', 'ok');
    }
}
