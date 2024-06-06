<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function gallery(){
        return view('gallery');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}
