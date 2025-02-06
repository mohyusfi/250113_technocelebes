<?php

namespace App\Http\Livewire;

use App\Model\Article;
use App\Model\Tag;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditArticle extends Component
{
    use WithFileUploads;
    public $id_article;
    public $title;
    public $picture;
    public $content;
    public $tags;
    public $previewImage;

    public function mount($article): void
    {
        $tags = [];
        foreach ($article->tags as $tag) {
            $tags[] = $tag->name;
        }

        $this->id_article = $article->id_article;
        $this->title = $article->title;
        $this->previewImage = $article->picture;
        $this->content = $article->content;
        $this->tags = implode(", ", $tags);
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required|string|max:20000',
            'tags' => 'required|string'
        ]);

        $filterTags = collect(preg_split("/[\s,.]+/", $this->tags));

        $tagIds = $filterTags->map(function($item){
            $tag = Tag::where("name", "=", $item)->first();
            if (empty($tag)) {
                $newTag = Tag::create(["name" => $item]);
                return $newTag->id;
            }
            return $tag->id;
        });

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
        $data_update->tags()->sync($tagIds);

        return redirect()->route('view-articles')->with('success', 'article telah diedit');
    }
    public function render()
    {
        return view('livewire.edit-article');
    }
}
