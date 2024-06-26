<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function toWatch()
    {
        $movies = Movie::where('vote', '>=', 9)->get();
        return view('to-watch', compact('movies'));
    }

    public function latest()
    {
        $movies = Movie::orderBy('date')->get();
        return view('latest');
    }



    public function detailMovie($id)
    {
        $movie = Movie::find($id);
        if (!isset($movie)) {
            abort(404);
        }
        // $movie = Movie::where('id', $id)->first();
        return view('detail-movie', compact('movie'));
    }
}
