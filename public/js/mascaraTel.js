/*MASCARA DO TELEFONE*/
jQuery.fn.brTelMask = function () {
    $('#telefone').brTelMask();
    return this.each(function () {
        var el = this;
        $(el).focus(function () {
            $(el).mask("(99) 9999-9999?9");
        });

        $(el).focusout(function () {
            var phone, element;
            element = $(el);
            element.unmask();
            phone = element.val().replace(/\D/g, '');
            if (phone.length > 10) {
                element.mask("(99) 99999-999?9");
            } else {
                element.mask("(99) 9999-9999?9");
            }
        });
    });
};

$(document).ready(function() {

    $('#telefone').attr('maxlength', 15);
    console.log($('#telefone').attr('maxlength'));

    $('#telefone').on('keyup', function() {
        var tel = $(this).val();

        if(tel.length == 0) {
            tel += '(';
        }

        if(tel.length == 1 && tel != '(') {
            tel += '(' + tel;
        }

        if(tel.length == 3) {
            tel += ') ';
        }
        
        if(tel.length == 9) {
            tel += '-';
        }

        $(this).val(tel);
    });    

    $('#telefone').on('keydown', function(evt) {
        var key = evt.wich || evt.keyCode;
        
        if(key == 8 && $(this).val().length == 5) {
            $(this).val( $(this).val().substr(0, 3) );
        }

        if(key == 8 && $(this).val().length == 10) {
            $(this).val( $(this).val().substr(0, 9) );
        }
    })
});