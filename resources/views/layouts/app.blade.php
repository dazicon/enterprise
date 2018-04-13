<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>@yield('title', '珍岛集团')</title>
        <meta name="keywords" content="珍岛集团">
        <meta name="description" content="珍岛集团">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- include main css -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.min.css"/>

        <!-- [if lt IE 9] -->
        <script src="http://apps.bdimg.com/libs/html5shiv/r29/html5.min.js"></script>
        <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <!-- [endif] -->

    </head>
    <body>
        <!--header-->
        @include('layouts._header')

        <div class="container">

            @yield('content')

        </div>

        <!--footer-->
        @include('layouts._footer')

        <!--Include Js-->
        <script src="/js/app.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/banner.js" type="text/javascript" charset="utf-8"></script>
        <script src="http://apps.bdimg.com/libs/jquery/1.8.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="http://cdn.bootcss.com/jQuery.mmenu/5.6.1/js/jquery.mmenu.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/slick.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/public.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.placeholder.min.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
            $(function(){ $('input, textarea').placeholder(); });
        </script>
    </body>
</html>
