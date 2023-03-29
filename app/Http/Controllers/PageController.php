<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function movielist() {
        $movies = movie::all();
        return view('movie-list', compact('movies'));
    }
}