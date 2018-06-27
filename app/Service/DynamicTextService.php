<?php

namespace App\Service;

use App\DynamicText;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class DynamicTextService
 *
 * A simple service to fetch texts from database table.
 */
class DynamicTextService
{
    /**
     * The list of translations.
     *
     * @var Collection[]
     */
    protected $cache;

    /**
     * Markdown parser.
     *
     * @var \Parsedown
     */
    protected $parseDown;

    /**
     * DynamicTextService constructor.
     */
    public function __construct()
    {
        $this->parseDown = \Parsedown::instance();
    }

    /**
     * Translates the text or creates a new entry.
     *
     * @param string $group
     * @param string $key
     * @return bool|string
     */
    public function get(string $group, string $key, string $default, bool $showTags = true)
    {
        if(!isset($this->cache[$group])) {
            $this->cache[$group] = DynamicText::where('group', $group)->get();
        }

        $text = $this->cache[$group]->where('key', $key)->first();
        if($text === null) {
            $text = new DynamicText();
            $text->group = $group;
            $text->key = $key;
            $text->content = $default;
            $text->save();
        }

        $content = $this->parseDown->parse($text->content);
        if(substr($content, 0, 3) === '<p>') {
            $content = substr($content, 3, -4);
        }
        if(\Auth::check() && $showTags !== false) {
            $content = '<dyn data-href="/admin/dynamic-texts/' . $text->id . '/edit" data-group="' . $group . '"  data-key="' . $key. '">' . $content . '</dyn>';
        }

        return $content;
    }
}