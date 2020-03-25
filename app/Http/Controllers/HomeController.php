<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }



    public function indexBerita()
    {
        return view('berita.index');
    }
    public function indexKontak()
    {
        return view('kontak.index');
    }
    public function indexPortopolio()
    {
        return view('portopolio.index');
    }
    public function indexTeam()
    {
        return view('team.index');
    }
    public function indexCategori()
    {
        return view('categori.index');
    }
}
