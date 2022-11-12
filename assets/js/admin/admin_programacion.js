// $(document).ready(function () {


// (function($){


    const base_url="http://localhost:8080/";

    console.log("Cargando....");


    let getProgramacion = function (page) {

        // console.log("<?php echo base_url();?>progra");

        $("#loader").show();
        $.ajax({
            url: base_url+"programacion",
            type: 'GET',
            data: { page: page }
        }).done(function (response) {

            console.log(response);
            
            $("#ajax_ul_lunes").append(response),
                $("loader").hide(),
                $('#load_more').data('val1', ($('#load_more').data('val1') + 1));
            scroll();
        });
    };


    getProgramacion(0);

    $("#load_more").click(function (e) {
        e.preventDefault();
        let page = $(this).data('val1');
        // console.log(page);
        getProgramacion(page);
    });
   




    let scroll = function () {
    $('html', 'body').animate({
        scrollTop: $('#load_more').offset().top
    }, 1000);
    }
// });


// })(jQuery);
