<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        $slider = $movies->shuffle()->take(5)->sortByDesc('vote');
        // $slider = $slider->map(function($slider, $key) {
        //     return $slider;
        // });
        //dd($slider);
        return view('home', compact('movies','slider'));
    }
    // public function slider(){
    //     $slider = Movie::all()->shuffle()->take(3);
    //     return view('components.slider', compact('slider'));
    // }
    public function show($id){
        $movie = Movie::find($id);
        // dd($movie);
        return view('singlemovie', compact('movie'));
    }
}
