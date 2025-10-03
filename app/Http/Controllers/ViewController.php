<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function landing(){
        return view('landing');
    }
    public function about(){
        return view('about');
    }
    public function courses(){
        return view('courses');
    }
    public function contact(){
        return view('contact');
    }
}
