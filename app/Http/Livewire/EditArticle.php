<?php

namespace App\Http\Livewire;

use App\Model\Article;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditArticle extends Component
{
    use WithFileUploads;
    public $title;
    public $picture;
    public $content;
    public $id_article;
    public $previewImage;

    public function mount($article): void
    {
        $this->title = $article->title;
        $this->previewImage = $article->picture;
        $this->content = $article->content;
        $this->id_article = $article->id_article;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required|string|max:20000'
        ]);

        $data_update = Article::findOrFail($this->id_article);


        if ($this->picture) {
            if ($data_update->picture || Storage::exists($data_update->picture)) {
                Storage::delete($data_update->picture);

                $filepath = $this->picture->store("articles", "public");
                $data_update->picture = $filepath;
            }
        }

        $data_update->title = $this->title;
        $data_update->content = $this->content;

        $data_update->update();

        return redirect()->route('view-articles')->with('success', 'article telah diedit');
    }
    public function render()
    {
        return view('livewire.edit-article');
    }
}
