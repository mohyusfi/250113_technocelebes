<?php

namespace App\Model;

use App\Tag;
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
        'tags',
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, "article_tag");
    }
}
