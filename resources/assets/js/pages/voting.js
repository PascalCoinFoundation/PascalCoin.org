const $ = require('jquery');
class Voting
{
    constructor($el) {
        this.$el = $el;

        if(window.addEventListener) {
            window.addEventListener('message', (event) => this.receiveMessage(event), false);
        } else if (window.attachEvent) {
            window.attachEvent('onmessage', (event) => this.receiveMessage(event));
        }
    }

    receiveMessage(event) {
        if (Object.prototype.toString.call(event.data) !== "[object String]") {
            return;
        }

        var message = event.data.split(':');
        if (message.length !== 2 || message[0] !== 'resize') {
            return;
        }

        var eventName = message[0];
        var iframes, len, i = 0;

        // only receive messages from this domain
        var senderDomains = ['https://www.pascalexplorer.com', 'https://www.pascalcoin.org'];

        if (senderDomains.indexOf(event.origin) !== -1 && eventName === 'resize') {
            iframes = document.getElementsByTagName('iframe');
            len = iframes.length;

            for (; i < len; i++) {
                if ((iframes[i].contentWindow || iframes[i].documentWindow) == event.source) {
                    iframes[i].style.height = message[1] + "px";
                    return;
                }
            }
        }
    }
}

module.exports = Voting;