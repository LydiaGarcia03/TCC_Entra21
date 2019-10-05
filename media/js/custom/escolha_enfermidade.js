$(document).ready(function($){

    $('#dt_nascimento').mask('99/99/9999');

    $("input[name='doenca']").change(function() {
        if($(this).val() == '1') {
            $('#desc_doenca').show()
        } else {
            $('#desc_doenca').hide();
        }
    });

    $("input[name='deficFisica']").change(function() {
        if($(this).val() == '1') {
            $('#desc_deficFisica').show()
        } else {
            $('#desc_deficFisica').hide();
        }
    });

    $("input[name='deficMental']").change(function() {
        if($(this).val() == '1') {
            $('#desc_deficMental').show()
        } else {
            $('#desc_deficMental').hide();
        }
    });

});