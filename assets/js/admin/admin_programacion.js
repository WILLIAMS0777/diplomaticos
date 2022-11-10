$(document).ready(function () {

// console.log("<?php echo base_url(); ?>"+"/cualquier");


    getProgramacion(0);
    $("#load_more").click(function (e) {
        e.preventDefault();
        let page = $(this).data('val');
        console.log(page);
        getcountry(page);
    });
    });


    let getProgramacion = function (page) {
    $("#loader").show();
    $.ajax({
        url: "<?php echo base_url(); ?>programacion",
        type: 'GET',
        data: { page: page }
    }).done(function (response) {
        $("#ajax_table").append(response),
            $("loader").hide(),
            $('#load_more').data('val', ($('#load_more').data('val') + 1));
        scroll();
    });
    };
    let scroll = function () {
    $('html', 'body').animate({
        scrollTop: $('#load_more').offset().top
    }, 1000);
};
