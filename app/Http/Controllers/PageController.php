<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function domaine()
    {
        return view('pages.domaine');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function expertise()
    {
        return view('pages.expertise');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function realisation()
    {
        return view('pages.realisation');
    }

    /**
     * Display the specified resource.
     */
    public function safreco()
    {
        return view('pages.safreco');
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
