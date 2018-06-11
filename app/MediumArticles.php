<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediumArticles extends Model
{
    protected $fillable = ['title', 'link', 'posted_at'];
}
