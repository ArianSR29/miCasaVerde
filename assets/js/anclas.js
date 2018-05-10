
$( document ).ready(function() {
    function go_to( ele, especial ){
        var este = $('#ancla-ahorro'+ele);
        if( !este.length ){ return; };
        var to = especial ? este.offset().top-100 : este.offset().top;
        $('body,html').stop().animate({
            scrollTop : to
        });
     };

    $('#btn-info-ancla').on('click', function(){
        go_to('#ancla-ahorro', true);
    })
});
