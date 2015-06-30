<!doctype html>
<html class="no-js" lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="apple-mobile-web-app-title" content="My Diabetes Center"/>
    <meta property="og:image" content="images/methodist-building.jpg"/>
    <meta property="og:title" content="My Diabetes Center"/>
    <meta property="og:site_name" content="My Diabetes Center"/>
    <meta property="og:url" content="http://mydiabetescenter.com"/>
    <meta property="og:description" content="A service of the Diabetes Wellness & Prevention Center"/>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-60741735-1', 'auto');
        ga('send', 'pageview');

    </script>
    <title><?php echo $pagename; ?> | My Diabetes Center</title>
    <link rel="shortcut icon" href="favicon.ico?v=5" />
    <link rel="apple-touch-icon" href="images/methodist-building.jpg">
    <link rel="stylesheet" href="css/mdc.css"/>
    <link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Short+Stack' rel='stylesheet' type='text/css'>
    <script src="bower_components/modernizr/modernizr.js"></script>
</head>
<body>
<!-- Header --><!--Hero Image-->
<header class="hero medium-text-left small-text-center">
    <a href="/" title="Home">
        <div class="logo-background">
            <h1><strong>My Diabetes Center</strong></h1>
            <h2>Overcoming&nbsp;Diabetes One&nbsp;Step&nbsp;at&nbsp;a&nbsp;Time</h2>
        </div>
    </a>
</header>
<div class="contain-to-grid sticky">
    <nav class="top-bar" data-topbar="data-topbar" role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="/" title="Home"><i class="fa fa-home fa-2x home-icon"></i></a></h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li class="has-dropdown">
                    <a href="resources.php">Resources</a>
                    <ul class="dropdown">
                        <li><a href="http://www.patientslikeme.com/">Patientslikeme</a></li>
                        <li><a href="apps.php">My Diabetes Apps</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Left Nav Section -->
            <ul class="left">
                <li class="has-dropdown">
                    <a href="#">About</a>
                    <ul class="dropdown">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="mission.php">Misson, Vision &amp; Goals</a></li>
                    </ul>
                </li>
                <li><a href="services.php">Services</a></li>
                <li><a href="start.php">Get Started</a></li>
                <li><a href="stories.php">Stories</a></li>
                <li><a href="ambassadors.php">Ambassadors</a></li>
            </ul>
        </section>
    </nav>
</div>
<!-- End Header -->