<?php

namespace App\Http\Livewire;

use App\Model\Article;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddArticle extends Component
{
    use WithFileUploads;
    public $title;
    public $content;
    public $picture;
    public function render()
    {
        return view('livewire.add-article');
    }

    public function create()
    {
        $this->validate([
            'title' => 'required|string|max:255|',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required|string|max:20000'
        ]);

        $filePath = $this->picture->storePublicly('articles', 'public');

        Article::create([
            'title' => $this->title,
            'content' => $this->content,
            'picture' => $filePath,
            'tags' => uniqid()  
        ]);

        return redirect()->route('view-articles')->with('success', 'success add article');
    }
}
