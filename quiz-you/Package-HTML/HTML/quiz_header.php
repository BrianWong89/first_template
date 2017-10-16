<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="css/swiper.css" type="text/css"/>
    <link rel="stylesheet" href="css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css"/>

    <link rel="stylesheet" href="css/responsive.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Document Title
    ============================================= -->
    <title><?php echo $title; ?>Quiz-You</title>

</head>

<body class="stretched">

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

        <div id="header-wrap">

            <div class="container clearfix">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="quiz_index.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><img
                                src="images/logo.png" alt="Canvas Logo"></a>
                    <a href="quiz_index.php" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img
                                src="images/logo@2x.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="dark">
                    <ul>
                        <li><a href="quiz_index.php">
                                <div>Home</div>
                            </a>
                        </li>
                        <li><a href="#">
                                <div>About</div>
                            </a>
                        </li>
                        <li><a href="#">
                                <div>Most Popular</div>
                            </a>
                        </li>
                        <li>
                            <div class="lang-selector" href="#">
                                <select id="langchooser">
                                    <option value="en" selected>English</option>
                                    <option value="zh">中国</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </nav><!-- #primary-menu end -->

                <div class="fb-like"
                     data-href="http://localhost/first_template/quiz-you/Package-HTML/HTML/quiz_index.php"
                     data-layout="standard" data-action="like" data-size="small" data-show-faces="true"
                     data-share="true"></div>

            </div>

        </div>

    </header><!-- #header end -->