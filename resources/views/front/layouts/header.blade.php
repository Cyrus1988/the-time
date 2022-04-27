<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link href="{{ asset('/css/theme/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
{{--    <script src="/js/theme/jquery-1.11.0.min.js"></script>--}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="{{ asset('/css/theme/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Luxury Watches | Laravel Shop" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--start-menu-->
    <script src="{{ asset('/js/theme/simpleCart.min.js') }}"> </script>
    <link href="{{ asset('/css/theme/memenu.css') }}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src=" {{ asset('/js/theme/memenu.js') }}"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
    <!--dropdown-->
    <script src="{{ asset('/js/theme/jquery.easydropdown.js') }}"></script>
    <script type="text/javascript">
        $(function() {

            var menu_ul = $('.menu_drop > li > ul'),
                menu_a  = $('.menu_drop > li > a');

            menu_ul.hide();

            menu_a.click(function(e) {
                e.preventDefault();
                if(!$(this).hasClass('active')) {
                    menu_a.removeClass('active');
                    menu_ul.filter(':visible').slideUp('normal');
                    $(this).addClass('active').next().stop(true,true).slideDown('normal');
                } else {
                    $(this).removeClass('active');
                    $(this).next().stop(true,true).slideUp('normal');
                }
            });

        });
    </script>
    <!-- header-scripts-->
    @stack('header-scripts')
</head>
<body>
