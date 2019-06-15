/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 *  JS para pre-load das fotos durante o cadastro
 */
$(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
    
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
    });

    function readURL(input, numeroDaFoto) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload'+numeroDaFoto).attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInpFoto1").change(function(){
        readURL(this, '1');
    });
    $("#imgInpFoto2").change(function(){
        readURL(this, '2');
    });
    $("#imgInpFoto3").change(function(){
        readURL(this, '3');
    });
    $("#imgInpFoto4").change(function(){
        readURL(this, '4');
    });
    $("#imgInpFoto5").change(function(){
        readURL(this, '5');
    });
    $("#imgInpFoto6").change(function(){
        readURL(this, '6');
    });
});