const $ = require('jquery');

/**
 * Page handler for the contact page.
 */
class Contact
{
    /**
     * Main element.
     *
     * @param {jQuery} $el
     */
    constructor($el)
    {
        this.$el = $el;
        this.$form = this.$el.find('#contact_form');
        this.$form.on('submit', (e) => this.handleSubmit(e));

        this.$error = this.$el.find('#contact_error');
        this.$success = this.$el.find('#contact_success');
    }

    /**
     * Submits the form.
     *
     * @param {Event} e
     * @returns {boolean}
     */
    handleSubmit(e)
    {
        const url = this.$form.attr('action');
        const data = this.$form.serialize();
        $.post(url, data).then((response) => this.handleResponse(response))
            .fail((r) => {
            console.log(r);
                this.$error.html('An unexpected error occured, please try again later.').show()
            });
        ;

        e.preventDefault();
        return false;
    }

    /**
     * Handles the response of the request.
     *
     * @param {Object} response
     */
    handleResponse(response)
    {
        if(response.success === false) {
            $.each(response.errors, (field, messages) => this.showFieldError(field, messages));
            this.$error.show();
            return;
        }

        this.$form.hide();
        this.$error.hide();
        this.$success.show();
    }

    /**
     * Displays the error messages of the given field.
     *
     * @param {String} field
     * @param {Array} messages
     */
    showFieldError(field, messages)
    {
        const $field = this.$el.find(`form [name=${field}]`);
        const $group = $field.closest('.form-group');
        $group.addClass('has-error');
        $group.find('.error').html(messages.join(', ')).show();
        $field.on('focus', (e) => {
            $group.removeClass('has-error');
            $group.find('.error').html('').hide();
        })

    }
}

module.exports = Contact;