<?php

namespace Tests\Feature;

use App\Model\Article;
use App\Model\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class ArticleTagsTest extends TestCase
{
    use RefreshDatabase;

    // protected function setUp(): void
    // {
    //     parent::setUp();
    //     $dataArticle = [
    //         [
    //             "title" => "article sample1",
    //             "picture" => "sample.jpg",
    //             "content" => "content sample",
    //         ],
    //         [
    //             "title" => "article sample2",
    //             "picture" => "sample.jpg",
    //             "content" => "content sample",
    //         ],
    //         [
    //             "title" => "article sample3",
    //             "picture" => "sample.jpg",
    //             "content" => "content sample",
    //         ],
    //     ];

    //     $dataTag = [
    //         ["name" => "php"],
    //         ["name" => "programming"],
    //         ["name" => "other"]
    //     ];

    //     foreach ($dataArticle as $value) {
    //         Article::create($value);
    //     }

    //     foreach ($dataTag as $value) {
    //         Tag::create($value);
    //     }
    // }

    public function testInsertManyToMany()
    {
        $dataArticle = [
            [
                "title" => "article sample1",
                "picture" => "sample.jpg",
                "content" => "content sample",
            ],
            [
                "title" => "article sample2",
                "picture" => "sample.jpg",
                "content" => "content sample",
            ],
            [
                "title" => "article sample3",
                "picture" => "sample.jpg",
                "content" => "content sample",
            ],
        ];

        $dataTag = [
            ["name" => "php"],
            ["name" => "programming"],
            ["name" => "other"]
        ];

        foreach ($dataArticle as $value) {
            Article::create($value);
        }

        foreach ($dataTag as $value) {
            Tag::create($value);
        }
    }

    public function testAttachIntermidiate()
    {
        $article = Article::find(1);
        self::assertNotNull($article);

        $article->tags()->attach(1);
        self::assertNotNull($article->tags);

        Log::info(json_encode($article->tags, JSON_PRETTY_PRINT));
    }

    public function testRelationWorkOrNo()
    {
        $input = [
            "title" => "sample title",
            "content" => "sample content",
            "picture" => "sample.jpg",
            "tag" => "PHP, programming Other Politic"
        ];

        $filterTag = preg_split("/[\s,]+/", $input['tag']);
        var_dump($filterTag);
        self::assertEquals(["PHP", "programming", "Other", "Politic"], $filterTag);

        $tags = collect($filterTag);

        $result = $tags->map(function($item){
            return Tag::create(["name" => $item]);
        });
        Log::info($result->sortBy('id')->toJson(JSON_PRETTY_PRINT));

        $article = Article::create([
            "title" => $input["title"],
            "content" => $input["content"],
            "picture" => $input["picture"]
        ]);
        self::assertNotNull($article);

        $tagId = Tag::select("id")->whereIn("name", $filterTag)->get();
        log::info(json_encode($tagId->all(), JSON_PRETTY_PRINT));

        $article->tags()->attach($tagId);
        Log::info(json_encode($article->tags(), JSON_PRETTY_PRINT));
    }

    public function testCollection()
    {
        $collection = collect(["jamal", "bagus", "bags"]);
        var_dump($collection->all());
    }
}
