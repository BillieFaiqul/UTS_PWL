<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutAsController extends Controller
{
    function index() {
        return view('about-as')
                    ->with('name', 'Muhammad Aqilul Muttaqin')
                    ->with('nim', 2141720182);
    }
}
