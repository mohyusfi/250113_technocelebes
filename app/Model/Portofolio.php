<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio';
    protected $primaryKey = 'id_porto';
    protected $fillable = [
        'title',
        'picture',
        'content'
    ];
}
