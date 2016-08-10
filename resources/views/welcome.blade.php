<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Southend Devs - Developers' Meetup in Southend-on-Sea</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .classhack-fa-twitter:before {
            content: "\f099";
        }

        .white {
            color:white;
        }
        
        .strike {
            text-decoration: none;    /*we're replacing the default line-through*/
            position: relative;
            display: inline-block; /* don't wrap to multiple lines */
        }
        .strike:after {
            content:"";    /* required property */
            position: absolute;
            bottom: 0;
            left: 0;
            border-top: 2px solid black;
            height: 45%;    /* adjust as necessary, depending on line thickness */
            /* or use calc() if you don't need to support IE8: */
            height: calc(50% - 1px); /* 1px = half the line thickness */
            width: 100%;
        }
    </style>
</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Southend Devs</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#about">About Us</a>
                </li>
                <li>
                    <a class="page-scroll" href="#weekly-meet">Our Weekly Southend Meet</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Our Stuff</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1>Southend Devs</h1>
            <hr>
            <p>Developers' Meetup in Southend-on-Sea, Essex</p>
            <a href="#about" class="btn btn-primary btn-xl page-scroll">More</a>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">About Us</h2>
                <hr class="light">
                <p class="text-faded">We're a friendly bunch of devs who meet weekly, to discuss everything and anything related to development, web and otherwise - frontend, backend, database/XML/JSON issues, OO design, TDD, Linux ops, you name it. PHP, Java, Python, Laravel, Ruby, JQuery, CSS, SASS, MongoDB, Redis, Java, C#, Golang and more.
                    <br>We also like games, memes and other silly geeky things.
                    <br>
                    <br>Anyone and everyone welcome!<br><span style="font-size:50%">as long as they can chip in for pizza</span></p>
                <a href="#weekly-meet" class="btn btn-default btn-xl page-scroll">How? When? Where?</a>
            </div>
        </div>
    </div>
</section>

<section id="weekly-meet">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Weekly Southend Meet</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-map-marker wow bounceIn text-primary" data-wow-delay=".5s"></i>
                    <h3>Place</h3>
                    <p style="text-decoration:none;" class="text-muted">
                        <span>Baxter Building,</span><br>
                        <span>80 Baxter Ave</span><br>
                    </p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-calendar wow bounceIn text-primary" data-wow-delay=".6s"></i>
                    <h3>Date</h3>
                    <p class="text-muted">Every Tuesday</p>
                    <p><span class="text-muted">Next:</span>
                        <strong>{!! $next_meeting_time_str !!}</strong>
                    </p>
                </div>
            </div>

            <!-- To keep rows the same height on xs and make them flow properly (only for the required viewport) -->
            <div class="clearfix visible-xs-block"></div>

            <div class="col-md-2 col-sm-4 col-xs-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-clock-o wow bounceIn text-primary" data-wow-delay=".7s"></i>
                    <h3>Time</h3>
                    <p class="text-muted">6pm - 9/10pm</p>
                </div>
            </div>

            <!-- To keep rows the same height on sm and make them flow properly (only for the required viewport) -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-2 col-sm-4 col-xs-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".8s"></i>
                    <h3>Pizza</h3>
                    <p class="text-muted">Gary! or Jeff?</p>
                </div>
            </div>

            <!-- To keep rows the same height on xs and make them flow properly (only for the required viewport) -->
            <div class="clearfix visible-xs-block"></div>

            <div class="col-md-2 col-sm-4 col-xs-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-comment-o wow bounceIn text-primary" data-wow-delay=".9s"></i>
                    <h3>Chat</h3>
                    <p class="text-muted">Talk the geek talk...</p>
                </div>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 text-center">
                <div class="service-box">
                    <span class="fa-stack fa-lg fa-2x wow bounceIn text-primary" data-wow-delay="1.0s">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-terminal fa-stack-1x fa-inverse"></i>
                    </span>
                    <h3>We code...</h3>
                    <p class="text-muted">...sometimes. More pizza than code.</p>
                </div>
            </div>

        </div>
    </div>

</section>

<section class="bg-primary" id="portfolio">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Stuff</h2>
                <hr class="light">
            </div>
        </div>
        <div class="row no-gutter">
            <div class="col-lg-4 col-sm-6">
                <a href="http://www.github.com/SouthendDevs/UselessAPI" class="portfolio-box">
                    <img src="img/uselessapi-counter.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                APIs
                            </div>
                            <div class="project-name">
                                UselessAPI
                            </div>
                            <p>A collection of Useless APIs
                                <br>deployed at www.uselessapi.com,
                                <br>built with Laravel 5</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-sm-6">
                <a href="http://www.github.com/SouthendDevs/gsy" class="portfolio-box">
                    <img src="img/gsy.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Abandoned Projects
                            </div>
                            <div class="project-name">
                                Go Simulate Yourself (GSY)
                            </div>
                            <p>Road traffic simulator spike using <br>Golang, Pusher and Neo4j</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-sm-6">
                <a href="http://www.trinitywars.com" class="portfolio-box">
                    <img src="img/trinity_wars_crop_scale.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Games
                            </div>
                            <div class="project-name">
                                Trinity Wars
                            </div>
                            <p>Mike and Dan's upcoming <br> mobile strategy game</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<!--
<aside class="bg-dark">
    <div class="container text-center">
        <div class="call-to-action">
            <h2>x!</h2>
            <a href="#" class="btn btn-default btn-xl wow tada">y!</a>
        </div>
    </div>
</aside>
-->

<section id="contact" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Contact</h2>
                <hr class="primary">
            </div>

            <div class="col-md-3 col-sm-6 col-sm-offset-0 text-center">
                <a href="http://www.github.com/southenddevs">
                    <i class="white fa fa-github fa-3x wow bounceIn" data-wow-delay=".2s"></i>
                    <p>github.com/SouthendDevs<br><br></p></a>
            </div>

            <div class="col-md-3 col-sm-6 text-center">
                <a href="http://www.twitter.com/southenddevs">
                    <i class="white fa classhack-fa-twitter fa-3x wow bounceIn" data-wow-delay=".4s"></i>
                    <p>@SouthendDevs<br><br></p></a>
            </div>

            <div class="col-md-3 col-sm-6 text-center">
                <a href="http://linkedin.com/groups/8524639">
                    <i class="white fa fa-linkedin fa-3x wow bounceIn" data-wow-delay=".6s"></i>
                    <p>LinkedIn<br><br></p></a>
            </div>

            <div class="col-md-3 col-sm-6 text-center">
                <a style="cursor:pointer;" onclick="alert('Attend the meet to join the Slack!')">
                    <i class="white fa fa-slack fa-3x wow bounceIn" data-wow-delay=".8s"></i>
                    <p>Slack<br><br></p>
                </a>
            </div>
        </div>

        <div class="row">
            <br>
            <p style="text-align:center;font-size:70%;">(Creative theme by Start Bootstrap)</p>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/wow.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/creative.js"></script>

</body>

</html>
