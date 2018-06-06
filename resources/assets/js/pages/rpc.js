const $ = require('jquery');

/**
 * Page handler for the pip detail page.
 */
class Rpc
{
    /**
     * Main element.
     *
     * @param {jQuery} $el
     */
    constructor($el)
    {
        this.$el = $el;
        this.$el.find('table').addClass('table table-striped');
    }
}

module.exports = Rpc;