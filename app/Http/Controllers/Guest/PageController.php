<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        $slider = $movies->shuffle()->take(3)->sortByDesc('vote');
        //dd($slider);
        return view('home', compact('movies','slider'));
    }
    // public function slider(){
    //     $slider = Movie::all()->shuffle()->take(3);
    //     return view('components.slider', compact('slider'));
    // }
}
