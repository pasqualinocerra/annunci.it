<?php

namespace App\Http\Controllers;

use App\Mail\DiventaRevisore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 

class MailController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     */

    public function invioRichiestaRevisore(){

        Mail::to('admin@annunci.it')->send(new DiventaRevisore(auth()->user()->name , auth()->user()->email));

        return redirect()->back()->with('status', 'Richiesta inviata correttamente!');

    }



    public function index()
    {
        //
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
        //
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
}
