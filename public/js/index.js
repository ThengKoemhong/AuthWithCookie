$(document).ready(function() {
    var color=['#0', '#1', '#2', '#3', '#4', '#5', '#6', '#7', '#8', '#9', '#10'];
    var item = ['#home', '#product', '#Look', '#Roome', '#Decoration', '#Kitchen', '#Rugs', '#Outdoor',
        '#Ligting', '#Gifts', '#Offers'
    ];
    $("#flip").click(function() {
        $("#form-search").css('opacity', '100');
        $("#form-search").slideDown("slow");
        $("#form-search").addClass('d-flex');
    });
    $('#search').click(function() {
        $("#form-search").slideUp();
        $("#form-search").removeClass('d-flex');
        $("#form-search").css('opacity', '0');
    });
    $(item[0]).click(function() {
        $('#anime').animate({
            left: '255px',
            width: '80px'
        });
        for(var i = 0; i<11;i++){
            $(color[0]).addClass('text-white');
            $(color[i]).removeClass('text-white');
        }
    });
    $(item[1]).click(function() {
        $('#anime').animate({
            left: '335px',
            width: '80px'
        });
        $('header').load('homepage/product');
         for(var i = 0; i<11;i++){
            $(color[1]).addClass('text-white');
            $(color[i]).removeClass('text-white');
        };
        $('#header').load("{{ url('homepage/product')}}");
    });
    $(item[2]).click(function() {
        $('#anime').animate({
            left: '410px',
            width: '80px'
        });
        for(var i = 0; i<11;i++){
            $(color[2]).addClass('text-white');
            $(color[i]).removeClass('text-white');
        }
    });
    $(item[3]).click(function() {
        $('#anime').animate({
            left: '485px',
            width: '80px'
        });
        for(var i = 0; i<11;i++){
            $(color[3]).addClass('text-white');
            $(color[i]).removeClass('text-white');
        }
    });
    $(item[4]).click(function() {
        $('#anime').animate({
            left: '570px',
            width: '100px'
        });
        for(var i = 0; i<11;i++){
            $(color[4]).addClass('text-white');
            $(color[i]).removeClass('text-white');
        }
    });
    $(item[5]).click(function() {
        $('#anime').animate({
            left: '675px',
            width: '80px'
        });
        for(var i = 0; i<11;i++){
            $(color[5]).addClass('text-white');
            $(color[i]).removeClass('text-white');
        }
    });
    $(item[6]).click(function() {
        $('#anime').animate({
            left: '755px',
            width: '80px'
        });
        for(var i = 0; i<11;i++){
            $(color[6]).addClass('text-white');
            $(color[i]).removeClass('text-white');
        }
    });
    $(item[7]).click(function() {
        $('#anime').animate({
            left: '833px',
            width: '80px'
        });
        for(var i = 0; i<11;i++){
            $(color[7]).addClass('text-white');
            $(color[i]).removeClass('text-white');
        }
    });
    $(item[8]).click(function() {
        $('#anime').animate({
            left: '920px',
            width: '80px'
        });
        for(var i = 0; i<11;i++){
            $(color[8]).addClass('text-white');
            $(color[i]).removeClass('text-white');
        }
    });
    $(item[9]).click(function() {
        $('#anime').animate({
            left: '1002px',
            width: '60px'
        });
        for(var i = 0; i<11;i++){
            $(color[9]).addClass('text-white');
            $(color[i]).removeClass('text-white');
        }
    });
    $(item[10]).click(function() {
        $('#anime').animate({
            left: '1070px',
            width: '70px',
        });
        for(var i = 0; i<11;i++){
            $(color[i]).removeClass('text-white');
            $(color[10]).addClass('text-white');
        }
    });
});
