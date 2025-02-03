<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Portofolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index() {
        return view('home');
    }

    public function service() {
        return view('contents.services');
    }

    public function portofolio() {
        $portofolio = Portofolio::all();
        return view('contents.portofolio', [
            'title' => "potofolio",
            "data" => $portofolio
        ]);
    }

    public function about() {
        return view('contents.aboutUs');
    }

    public function article() {
        $articles = Article::all();
        return view('contents.article', [
            "title" => "Article",
            "data" => $articles
        ]);
    }

}
