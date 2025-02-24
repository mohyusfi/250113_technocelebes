<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Portofolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::with('tags')->get();
        return view('home', [
            'title' => 'home',
            'data' => $articles
        ]);
    }

    public function service()
    {
        return view('contents.services');
    }

    public function portofolio()
    {
        $portofolio = Portofolio::all();
        return view('contents.portofolio', [
            'title' => "potofolio",
            "data" => $portofolio
        ]);
    }

    public function about()
    {
        return view('contents.aboutUs');
    }

    public function legalitas()
    {
        return view('contents.legalitas');
    }

    public function article($id)
    {
        $articles = Article::with('tags')->findOrFail($id);
        return view('contents.article', [
            "title" => "Article",
            "data" => $articles
        ]);
    }
}

