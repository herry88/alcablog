<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Working;

class FrontEndController extends Controller
{
    public function all()
    {
        $working = Working::orderBy('name','ASC')->get();
        return view('welcome', \compact('working'));
    }
}
