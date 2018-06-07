<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqGroup extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function faq_entries()
    {
        return $this->hasMany(FaqEntry::class);
    }
}
