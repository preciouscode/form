<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index2');
    }
    public function about() {
        return view('about');
    }
}
