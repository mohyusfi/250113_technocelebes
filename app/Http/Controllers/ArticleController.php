<?php

namespace App\Http\Controllers;

use App\Model\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('admin.view-article', [
            'title' => 'list article'
        ]);
    }

    public function create()
    {
        return view('admin.add-article', [
            'title' => 'add article'
        ]);
    }
}
