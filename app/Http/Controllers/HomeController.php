<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function service() {
        return view('service');
    }

    public function portofolio() {
        return view('portofolio');
    }

    public function about() {
        return view('about-us');
    }

    public function article() {
        return view('article');
    }
}
