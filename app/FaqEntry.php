<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqEntry extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function faqGroup()
    {
        return $this->belongsTo(FaqGroup::class);
    }
}
