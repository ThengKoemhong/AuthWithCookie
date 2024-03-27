$(document).ready(function () {
    $('#baner1',).hover(
        function () {
            $('#btn').removeClass('d-none');
            $('#btn').animate({
                height: '200px',
                opacity: '1',
            });

        },
        function () {
            $('#btn').animate({
                height: '0px',
                opacity: '0',
            });
        });
    $('#baner2',).hover(
        function () {
            $('#btn1').removeClass('d-none');
            $('#btn1').animate({
                height: '200px',
                opacity: '1',
            });

        },
        function () {
            $('#btn1').animate({
                height: '0px',
                opacity: '0',
            });
        });
    $('#view').hover(function(){
        $('#view').addClass('text-decoration-underline ');
    },
        function(){
            $('#view').removeClass('text-decoration-underline ');
        }
    );
    $('.image').hover(function(){
        $('#btndis').animate({
            width: '0px',
            opacity: '0',
        });
    },
    function(){
        $('#btndis').animate({
            width: '100px',
            opacity: '1',
        });
    }
    );
})