<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->


<!-- Mirrored from altair_html.tzdthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2017 07:09:09 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>
    <meta id="token" name="token" value="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ asset('alt_air/assets/img/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('alt_air/assets/img/favicon-32x32.png') }}" sizes="32x32">

    <title>Rosch BD</title>

    <!-- additional styles for plugins -->
    <!-- weather icons -->
    <link rel="stylesheet" href="{{ asset('alt_air/bower_components/weather-icons/css/weather-icons.min.css') }}" media="all">
    <!-- metrics graphics (charts) -->
    <link rel="stylesheet" href="{{ asset('alt_air/bower_components/metrics-graphics/dist/metricsgraphics.css') }}">
    <!-- chartist --
    <link rel="stylesheet" href="{{ asset('alt_air/bower_components/chartist/dist/chartist.min.css') }}">
    -->
    <!-- uikit -->
    <link rel="stylesheet" href="{{ asset('alt_air/bower_components/uikit/css/uikit.almost-flat.min.css') }}" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="{{ asset('alt_air/assets/icons/flags/flags.min.css') }}" media="all">

    <!-- style switcher -->
    <link rel="stylesheet" href="{{ asset('alt_air/assets/css/style_switcher.min.css') }}" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="{{ asset('alt_air/assets/css/main.min.css') }}" media="all">

    <!-- themes -->
    <link rel="stylesheet" href="{{ asset('alt_air/assets/css/themes/themes_combined.min.css') }}" media="all">

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
    <script type="text/javascript" src="{{ asset('alt_air/bower_components/matchMedia/matchMedia.js') }}"></script>
    <script type="text/javascript" src="{{ asset('alt_air/bower_components/matchMedia/matchMedia.addListener.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('alt_air/assets/css/ie.cssg') }}" media="all">
    <![endif]-->
</head>
<body class="sidebar_main_open sidebar_main_swipe">
<!-- main header -->
@include('layouts.header')
        <!-- main header end -->
<!-- main sidebar -->
@include('layouts.sidebar_left')
        <!-- main sidebar end -->

<div id="page_content">

    <div id="top_bar">
        <ul id="breadcrumbs">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Components</a></li>
            <li><span>Breadcrumbs</span></li>
        </ul>
    </div>

    <div id="page_content_inner">
        @yield('content')
    </div>

    <!-- secondary sidebar -->
    @include('layouts.sidebar_right')
    <!-- secondary sidebar end -->

</div>

<!-- common functions -->
<script src="{{ asset('alt_air/assets/js/common.min.js') }}"></script>
<!-- uikit functions -->
<script src="{{ asset('alt_air/assets/js/uikit_custom.min.js') }}"></script>
<!-- altair common functions/helpers -->
<script src="{{ asset('alt_air/assets/js/altair_admin_common.min.js') }}"></script>

@yield('additional_scripts')

<!-- google web fonts -->
<script>
    WebFontConfig = {
        google: {
            families: [
                'Source+Code+Pro:400,700:latin',
                'Roboto:400,300,500,700,400italic:latin'
            ]
        }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

<!-- page specific plugins -->
<!-- d3 -->
<script src="{{ asset('alt_air/bower_components/d3/d3.min.js') }}"></script>
<!-- metrics graphics (charts) -->
<script src="{{ asset('alt_air/bower_components/metrics-graphics/dist/metricsgraphics.min.js') }}"></script>
<!-- chartist (charts) --
<script src="{{ asset('alt_air/bower_components/chartist/dist/chartist.min.js') }}"></script>
-->
{{--<!-- maplace (google maps) -->
<script src="http://maps.google.com/maps/api/js"></script>
<script src="{{ asset('alt_air/bower_components/maplace-js/dist/maplace.min.js') }}"></script>--}}

{{--
<!-- peity (small charts) -->
<script src="{{ asset('alt_air/bower_components/peity/jquery.peity.min.js') }}"></script>
<!-- easy-pie-chart (circular statistics) -->
<script src="{{ asset('alt_air/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
<!-- countUp -->
<script src="{{ asset('alt_air/bower_components/countUp.js/dist/countUp.min.js') }}"></script>
<!-- handlebars.js -->
<script src="{{ asset('alt_air/bower_components/handlebars/handlebars.min.js') }}"></script>
<script src="{{ asset('alt_air/assets/js/custom/handlebars_helpers.min.js') }}"></script>
<!-- CLNDR -->
<script src="{{ asset('alt_air/bower_components/clndr/clndr.min.js') }}"></script>

<!--  dashbord functions -->
<script src="{{ asset('alt_air/assets/js/pages/dashboard.min.js') }}"></script>
--}}

{{--<script>
    $(function() {
        if(isHighDensity()) {
            $.getScript( "bower_components/dense/src/dense.js", function() {
                // enable hires images
                altair_helpers.retina_images();
            })
        }
        if(Modernizr.touch) {
            // fastClick (touch devices)
            FastClick.attach(document.body);
        }
    });
    $window.load(function() {
        // ie fixes
        altair_helpers.ie_fix();
    });
</script>--}}

{{--<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-65191727-1', 'auto');
    ga('send', 'pageview');
</script>--}}
@include('layouts.style_switcher')
</body>

<!-- Mirrored from altair_html.tzdthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2017 07:10:18 GMT -->
</html>