<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from altair_html.tzdthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2017 07:12:52 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ asset('alt_air/assets/img/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('alt_air/assets/img/favicon-32x32.png') }}" sizes="32x32">

    <title>Roache BD</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="{{ asset('alt_air/bower_components/uikit/css/uikit.almost-flat.min.css') }}"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="{{ asset('alt_air/assets/css/login_page.min.css') }}" />

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="login_page">

<div class="login_page_wrapper">

    @yield('content')

</div>

<!-- common functions -->
<script src="{{ asset('alt_air/assets/js/common.min.js') }}"></script>
<!-- uikit functions -->
<script src="{{ asset('alt_air/assets/js/uikit_custom.min.js') }}"></script>
<!-- altair core functions -->
<script src="{{ asset('alt_air/assets/js/altair_admin_common.min.js') }}"></script>

<!-- altair login page functions -->
<script src="{{ asset('alt_air/assets/js/pages/login.min.js') }}"></script>

<script>
    // check for theme
    if (typeof(Storage) !== "undefined") {
        var root = document.getElementsByTagName( 'html' )[0],
                theme = localStorage.getItem("altair_theme");
        if(theme == 'app_theme_dark' || root.classList.contains('app_theme_dark')) {
            root.className += ' app_theme_dark';
        }
    }
</script>

<script>
/*    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-65191727-1', 'auto');
    ga('send', 'pageview');*/
</script>
</body>

<!-- Mirrored from altair_html.tzdthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2017 07:12:55 GMT -->
</html>