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

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.edit-article', [
            'article' => $article,
            'title' => 'edit article',
        ]);
    }
}
