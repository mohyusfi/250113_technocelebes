<?php

namespace App\Http\Livewire;

use App\Model\Article;
use App\Model\Tag;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddArticle extends Component
{
    use WithFileUploads;
    public $title;
    public $content;
    public $picture;
    public $tags;
    public function render()
    {
        return view('livewire.add-article');
    }

    public function create()
    {
        $this->validate([
            'title' => 'required|string|max:255|',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required|string|max:20000',
            'tags' => 'required|string'
        ]);

        DB::transaction(function () {
            $filterTag = collect(preg_split("/[,]+/", $this->tags));

            $tagIds = $filterTag->map(function ($item) {
                $tag = Tag::where("name", "=", trim($item))->first();
                if (empty($tag)) {
                    Log::info('unavaiable: '.json_encode($tag));
                    $tags = Tag::create(["name" => trim($item)]);
                    return $tags->id;
                }
                Log::info('avaiable: '.json_encode($tag));
                return $tag->id;
            });

            $filePath = $this->picture->storePublicly('articles', 'public');

            $article = Article::create([
                'title' => $this->title,
                'content' => $this->content,
                'picture' => $filePath,
            ]);

            if ($article->exists()) {
                $article->tags()->syncWithoutDetaching($tagIds);
                return redirect()->route('view-articles')->with('success', 'success add article');
            }
        });
    }
}
