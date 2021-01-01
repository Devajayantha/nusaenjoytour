<!-- WhatsHelp.io widget -->

(function() {
    var options = {
        whatsapp: "+62 813-3969-7563", // WhatsApp number
        call_to_action: "Message us", // Call to action
        position: "left", // Position may be 'right' or 'left'
    };
    var proto = document.location.protocol,
        host = "whatshelp.io",
        url = proto + "//static." + host;
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url + '/widget-send-button/js/init.js';
    s.onload = function() { WhWidgetSendButton.init(host, proto, options); };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
})();

<!-- /WhatsHelp.io widget -->