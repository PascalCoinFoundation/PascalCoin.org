<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class News extends Model implements Feedable
{
    public function getAllFeedItems()
    {
        return News::where('published', true)->orderBy('pub_date', 'DESC')->take(20)->get();
    }

    public function toFeedItem()
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->teaser)
            ->updated(Carbon::parse($this->pub_date))
            ->link($this->link)
            ->author('PascalCoin');
    }
}
