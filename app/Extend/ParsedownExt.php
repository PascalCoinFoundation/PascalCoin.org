<?php

namespace App\Extend;

/**
 * Class ParsedownExt
 *
 * A small extension that adds anchor ids just like GFM does it.
 */
class ParsedownExt extends \Parsedown
{
    /**
     * Will check the given element and if it's a header it will add an id
     * attribute (html anchors).
     *
     * @param array $Element
     * @return string
     */
    protected function element(array $Element)
    {
        if (\in_array($Element['name'], ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'], true)) {
            $Element['attributes']['id'] = str_slug($Element['text'], '-');
        }
        return parent::element($Element);
    }

}