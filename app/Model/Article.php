<?php

namespace App\Model;

use App\Model\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    protected $table = "articles";
    protected $primaryKey = "id_article";
    protected $fillable = [
        'title',
        'picture',
        'content',
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class,
                                    "article_tag",
                                    "article_id",
                                    "tag_id")
                                ->withPivot(["created_at", "updated_at"])
                                ->withTimestamps();
    }
}
