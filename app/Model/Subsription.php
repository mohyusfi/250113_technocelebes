<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subsription extends Model
{
    protected $table = "subsriptions";

    protected $fillable = ['email'];
}
