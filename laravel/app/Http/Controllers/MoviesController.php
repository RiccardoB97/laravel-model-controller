<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class MoviesController extends Controller
{
    public function movies(){
        $movies = Movie::all();

        foreach ($movies as $movie){
            echo $movie->title . '<br>';
        }

        return view('movies.index',  compact('movies'));
    }

}
