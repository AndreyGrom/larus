(function( $ ){
    $.fn.upload = function( options ) {
        var settings = $.extend( {
            'action' : 'images-upload',
            'id'     : '0',
            'append' : '.image-list',
        }, options);

        this.click(function(e){
            $('<input type="file" multiple>').on('change', function () {
                e.stopPropagation();
                e.preventDefault();
                if( typeof this.files == 'undefined' ) return;
                var data = new FormData();
                $.each( this.files, function( key, value ){
                    data.append( key, value );
                });
                data.append( 'action', settings.action);
                data.append( 'id', settings.id);
                $.ajax({
                    type        : 'POST',
                    url         : '/register/',
                    data        : data,
                    processData : false,
                    contentType : false,
                    success     : function( respond, status, jqXHR ){
                        respond = JSON.parse(respond);
                        if( typeof respond.error !== '' ){
                            $(settings.append).append(respond.html);
                        }
                        else {
                            alert('ОШИБКА: ' + respond.error );
                        }
                    },
                    error: function( jqXHR, status, errorThrown ){
                        alert( 'ОШИБКА AJAX запроса: ' + status, jqXHR );
                    }
                });
            }).click();
        });

        return this;

    };
})( jQuery );


function RemoveImage(name, id, obj) {
    var data = 'action=remove-image&id=' + id + '&name=' + name;
    $.ajax({
        url         : "/register/",
        type        : 'POST',
        data        : data,
        success     : function( respond){
            if( respond == 1){
                obj.remove();
            } else {
                alert('ОШИБКА: ' + respond );
            }
        },
        error: function( jqXHR, status, errorThrown ){
            alert( 'ОШИБКА AJAX запроса: ' + status, jqXHR );
        }
    });
}
function SkinImage(name, id, els, then) {
    var data = 'action=set-skin&id=' + id + '&name=' + name;
    $.ajax({
        url         : '/register/',
        type        : 'POST',
        data        : data,
        success     : function( respond){
            if( respond == true){
                els.show();
                then.hide();
            } else {
                alert_info('ОШИБКА: ' + respond );
            }
        },
        error: function( jqXHR, status, errorThrown ){
            alert_info( 'ОШИБКА AJAX запроса: ' + status, jqXHR );
        }
    });
}
