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
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Update the specified resource in storage.
     */
    public function connexion()
    {
        return view('pages.login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function register()
    {
        return view('pages.register');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function dashboard()
    {
        return view('admin.pages.home');
    }
}
