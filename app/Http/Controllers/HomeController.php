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
        return view('contents/portofolio');
    }

    public function about() {
        return view('contents/aboutUs');
    }

    public function article() {
        return view('article');
    }
}
