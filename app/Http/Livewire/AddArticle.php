<?php

namespace App\Http\Livewire;

use App\Jobs\SendEmailSubsriber;
use App\Model\Article;
use App\Model\Subscription;
use App\Model\Tag;
use Doctrine\Inflector\Rules\Substitution;
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
                    Log::info('unavaiable: ' . json_encode($tag));
                    $tags = Tag::create(["name" => trim($item)]);
                    return $tags->id;
                }
                Log::info('avaiable: ' . json_encode($tag));
                return $tag->id;
            });

            $filePath = $this->picture->storePublicly('articles', 'public');

            $article = Article::create([
                'title' => $this->title,
                'content' => $this->content,
                'picture' => $filePath,
            ]);

            $subsribers = Subscription::select('email')->get();

            if ($article->exists()) {

                foreach ($subsribers->all() as $subsriber) {
                    dispatch(new SendEmailSubsriber(
                        $article,
                        $subsriber->email,
                        "Article terbaru tentang $article->title"
                    ));
                }

                $article->tags()->syncWithoutDetaching($tagIds);
                return redirect()->route('view-articles')->with('success', 'success add article');
            }
        });
    }
}
