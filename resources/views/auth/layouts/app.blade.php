<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="colorlib" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}csjs/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('') }}csjs/css/waves.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}csjs/css/feather.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}csjs/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}csjs/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}csjs/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}csjs/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}csjs/css/pages.css">
</head>

<body themebg-pattern="theme1">

    @yield('content')
    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="../files/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="../files/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="../files/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('') }}csjs/js/jquery.min.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('') }}csjs/js/jquery-ui.min.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('') }}csjs/js/popper.min.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('') }}csjs/js/bootstrap.min.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('') }}csjs/js/waves.min.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('') }}csjs/js/jquery.slimscroll.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('') }}csjs/js/modernizr.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('') }}csjs/js/css-scrollbars.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="{{ asset('') }}csjs/js/common-pages.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="4878d7dfa7bc22a8dfa99416-text/javascript"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript">
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script src="{{ asset('') }}csjs/js/rocket-loader.min.js" data-cf-settings="4878d7dfa7bc22a8dfa99416-|49" defer=""></script>
</body>
</html>
