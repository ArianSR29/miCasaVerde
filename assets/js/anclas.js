$(document).ready(function () {

        function go_to(ele, especial) {
            var este = $('#ancla-ahorroM' + ele);
            if (!este.length) {
                return;
            };
            var to = especial
                ? este
                    .offset()
                    .top - 100
                : este
                    .offset()
                    .top;
            $('body,html')
                .stop()
                .animate({scrollTop: to});
        };


        $('.btn-ancla2').on('click', function () {
            console.log("Click en ancla MOVIL");
            go_to('#ancla-ahorroM', true);
        })

        function go_to(ele, especial) {
            var este = $('#ancla-ahorroD' + ele);
            if (!este.length) {
                return;
            };
            var to = especial
                ? este
                    .offset()
                    .top - 100
                : este
                    .offset()
                    .top;
            $('body,html')
                .stop()
                .animate({scrollTop: to});
        };
        $('.btn-ancla').on('click', function () {
            console.log("Click en ancla en DESKTOP");
            go_to('#ancla-ahorroD', true);
        })



        $('input#rd-populares').trigger('click');
        $('.input-cat').on('click', function () {
            $('.cat-visible').removeClass('cat-visible');
            var data = $(this).data('categoria');
            $("." + data).addClass('cat-visible');
        })
    
});