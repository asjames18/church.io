if (window.JSON && window != top && top.postMessage){
    (function(path){
        var form_id = path.substr(path.lastIndexOf('/') + 1);
        var send_height = function(){
            top.postMessage(JSON.stringify({
                form_id : form_id,
                height : $('body').outerHeight(true) + $('#formoid-form-footer').height()
            }), '*');
        };
        jQuery(window).resize(send_height);
        jQuery(document).ready(function($){
            $('form').submit(send_height);
            send_height();
        }).keydown(function(event){
            if (event.which == 27){
                top.postMessage(JSON.stringify({
                    close : true
                }), '*');
            }
        });
    })(document.location.pathname);
}