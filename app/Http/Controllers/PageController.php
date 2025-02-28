<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;


class PageController extends Controller
{
    public function landing() {
        return view('pages/landing');
    }
    public function home() {
        $home = Home::all(); // This line is trying to access the Home class
        return view('pages/home', compact('home'));
    }
    public function skills() {
        return view('pages/skills');
    }
    public function gallery() {
        return view('pages/gallery');
    }
}
