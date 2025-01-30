<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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
}
