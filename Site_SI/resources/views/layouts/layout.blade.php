<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homepage</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=NTR' rel='stylesheet' type='text/css'>

</head>

<body>

<div class="row">
    <div class="columns" style="margin-top: 60px;">
        @yield('conteudo')
    </div>
</div>

<script src="js/jquery.js"></script>


<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.isotope.js"></script>

<script src="js/jquery.scrollUp.min.js"></script>


<script type="text/javascript">

    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });

</script>



<script type="text/javascript">
    $(function(){
        var shrinkHeader = 100;
        $(window).scroll(function() {
            var scroll = getCurrentScroll();
            if ( scroll >= shrinkHeader ) {
                $('.navbar-default').addClass('shrink');
            }
            else {
                $('.navbar-default').removeClass('shrink');
            }
        });
        function getCurrentScroll() {
            return window.pageYOffset || document.documentElement.scrollTop;
        }
    });

</script>



<script type="text/javascript">

    $(window).load(function(){


        var $container = $('.portfolioContainer'),
                $body = $('body'),
                colW = 375,
                columns = null;


        $container.isotope({

            resizable: true,
            masonry: {
                columnWidth: colW
            }
        });

        $(window).smartresize(function(){

            var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
            if ( currentColumns !== columns ) {

                columns = currentColumns;

                $container.width( columns * colW )
                        .isotope('reLayout');
            }

        }).smartresize();
        $('.portfolioFilter a').click(function(){
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({

                filter: selector,
            });
            return false;
        });

    });

</script>



<script type="text/javascript">

    $(function () {
        $.scrollUp({
            scrollName: 'scrollUp',
            topDistance: '300',
            topSpeed: 600,
            animation: 'fade',
            animationInSpeed: 200,
            animationOutSpeed: 200,
            activeOverlay: false,
            scrollImg: true,
        });
    });

</script>


</body>

</html>
