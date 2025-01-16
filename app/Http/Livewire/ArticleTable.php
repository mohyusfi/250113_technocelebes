<?php

namespace App\Http\Livewire;

use App\Model\Article;
use Livewire\Component;

class ArticleTable extends Component
{
    public $articles;
    public function render()
    {
        $this->articles = Article::all();
        return view('livewire.article-table', [
            'articles' => $this->articles
        ]);
    }
}
