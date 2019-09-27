 $(document).ready(function(){
        $("input[name='doenca']:radio", "formServico").checked(function(){

            $('.desc_hidden').toggleClass('d-block');

        });
    });