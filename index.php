<?php
include './database/db.php';

?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>M. Nasrul Wahabi</title>
    <meta name="description" content="sibeux portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/sibe.png">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/all.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/slick.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style-experience.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Sangat berterima kasih dengan preloader. Jika preloader loop infinite, berarti ada yang error  -->
    <!-- Preloader -->
    <div id="preloader">
        <div class="outer">
            <!-- Google Chrome -->
            <div class="infinityChrome">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <!-- Safari and others -->
            <div class="infinity">
                <div>
                    <span></span>
                </div>
                <div>
                    <span></span>
                </div>
                <div>
                    <span></span>
                </div>
            </div>
            <!-- Stuff -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo-outer">
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
                        <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                        <feBlend in="SourceGraphic" in2="goo" />
                    </filter>
                </defs>
            </svg>
        </div>
    </div>

    <!-- mobile header -->
    <header class="mobile-header-1">
        <div class="container">
            <!-- menu icon -->
            <div class="menu-icon d-inline-flex me-4">
                <button>
                    <span></span>
                </button>
            </div>
            <!-- logo image -->
            <div class="site-logo">
                <a href="/">
                    <img src="images/logo-name.svg" alt="SibeUX" />
                </a>
            </div>
        </div>
    </header>

    <!-- desktop header -->
    <header class="desktop-header-1 d-flex align-items-start flex-column">

        <!-- logo image -->
        <div class="site-logo">
            <a href="/">
                <img src="images/logo-name.svg" alt="sibeUX" />
            </a>
        </div>

        <!-- main menu -->
        <nav style="overflow: hidden;">
            <ul class="vertical-menu scrollspy">
                <li class="active"><a href="#home"><i class="icon-home"></i>Home</a></li>
                <li><a href="#about"><i class="icon-user-following"></i>About</a></li>
                <li><a href="#services"><i class="icon-key"></i>Skills</a></li>
                <li><a href="#experience"><i class="icon-graduation"></i>Education</a></li>
                <li><a href="#experience"><i class="icon-briefcase"></i>Experience</a></li>
                <li><a href="#works"><i class="icon-vector"></i>Design</a></li>
                <li><a href="#testimonials"><i class="icon-screen-desktop"></i>Tools & Language</a></li>
                <li><a href="#blog"><i class="icon-note"></i>Project</a></li>
                <li><a href="#contact"><i class="icon-bubbles"></i>Contact</a></li>
            </ul>
        </nav>

        <!-- site footer -->
        <div class="footer">
            <!-- copyright text -->
            <span class="copyright">© 2024 SibeUX Website.</span>
        </div>

    </header>

    <!-- main layout -->
    <main class="content">

        <!-- section home -->
        <section id="home" class="home d-flex align-items-center">
            <div class="container">

                <!-- intro -->
                <div class="intro">
                    <!-- avatar image -->
                    <img src="images/sibe.png" alt="sibeux" class="mb-4" />

                    <!-- info -->
                    <h1 class="mb-2 mt-0">M. Nasrul Wahabi</h1>
                    <span>I'm <span class="text-rotating">a Programmer, a Graphic Designer, an Information Systems
                            Student
                        </span></span>

                    <!-- social icons -->
                    <ul class="social-icons light list-inline mb-0 mt-4">
                        <li class="list-inline-item"><a href="https://instagram.com/nasrulwahabi" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/m.n.wahabi/" target="_blank"><i
                                    class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/WahabiNasrul" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li <li class="list-inline-item"><a href="https://bit.ly/HabiqiYT" target="_blank"><i
                                    class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/sibeux" target="_blank"><i
                                    class="fab fa-github"></i></a></li>
                        <li class="list-inline-item"><a href="https://linkedin.com/in/nasrulwahabi" target="_blank"><i
                                    class="fab fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="mailto:wahabinasrul@gmail.com"><i
                                    class="fa fa-envelope"></i></a></li>
                        <!-- <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li> -->
                        <!-- <li class="list-inline-item"><a href="#"><i class="fab fa-behance"></i></a></li> -->
                        <!-- <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li> -->
                        <!-- <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li> -->
                    </ul>

                    <!-- buttons -->
                    <div class="mt-4">
                        <a href="#contact" class="btn btn-default">Contact me</a>
                    </div>
                </div>

                <!-- scroll down mouse wheel -->
                <div class="scroll-down">
                    <a href="#about" class="mouse-wrapper">
                        <span>Scroll Down</span>
                        <span class="mouse">
                            <span class="wheel"></span>
                        </span>
                    </a>
                </div>

                <!-- parallax layers -->
                <div class="parallax" data-relative-input="true">

                    <svg width="27" height="29" data-depth="0.3" class="layer p1" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21.15625.60099c4.37954 3.67487 6.46544 9.40612 5.47254 15.03526-.9929 5.62915-4.91339 10.30141-10.2846 12.25672-5.37122 1.9553-11.3776.89631-15.75715-2.77856l2.05692-2.45134c3.50315 2.93948 8.3087 3.78663 12.60572 2.22284 4.297-1.5638 7.43381-5.30209 8.22768-9.80537.79387-4.50328-.8749-9.08872-4.37803-12.02821L21.15625.60099z"
                            fill="#FFD15C" fill-rule="evenodd" />
                    </svg>

                    <svg width="26" height="26" data-depth="0.2" class="layer p2" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 3.3541L2.42705 24.5h21.1459L13 3.3541z" stroke="#FF4C60" stroke-width="3"
                            fill="none" fill-rule="evenodd" />
                    </svg>

                    <svg width="30" height="25" data-depth="0.3" class="layer p3" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M.1436 8.9282C3.00213 3.97706 8.2841.92763 14.00013.92796c5.71605.00032 10.9981 3.04992 13.85641 8 2.8583 4.95007 2.8584 11.0491-.00014 16.00024l-2.77128-1.6c2.28651-3.96036 2.28631-8.84002.00011-12.8002-2.2862-3.96017-6.5124-6.40017-11.08513-6.4-4.57271.00018-8.79872 2.43984-11.08524 6.4002l-2.77128-1.6z"
                            fill="#44D7B6" fill-rule="evenodd" />
                    </svg>

                    <svg width="15" height="23" data-depth="0.6" class="layer p4" xmlns="http://www.w3.org/2000/svg">
                        <rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5"
                            fill="#FFD15C" fill-rule="evenodd" />
                    </svg>

                    <svg width="15" height="23" data-depth="0.2" class="layer p5" xmlns="http://www.w3.org/2000/svg">
                        <rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5"
                            fill="#6C6CE5" fill-rule="evenodd" />
                    </svg>

                    <svg width="49" height="17" data-depth="0.5" class="layer p6" xmlns="http://www.w3.org/2000/svg">
                        <g fill="#FF4C60" fill-rule="evenodd">
                            <path
                                d="M.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C23.1175 5.50106 25.5 10.78292 25.5 16.5H23c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0C4.90625 7.70116 3 11.92697 3 16.5H.5z" />
                            <path
                                d="M23.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C46.1175 5.50106 48.5 10.78292 48.5 16.5H46c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0-3.09375 2.28651-5 6.51232-5 11.08535h-2.5z" />
                        </g>
                    </svg>

                    <svg width="26" height="26" data-depth="0.4" class="layer p7" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 22.6459L2.42705 1.5h21.1459L13 22.6459z" stroke="#FFD15C" stroke-width="3"
                            fill="none" fill-rule="evenodd" />
                    </svg>

                    <svg width="19" height="21" data-depth="0.3" class="layer p8" xmlns="http://www.w3.org/2000/svg">
                        <rect transform="rotate(-40 6.25252 10.12626)" x="7" width="3" height="25" rx="1.5"
                            fill="#6C6CE5" fill-rule="evenodd" />
                    </svg>

                    <svg width="30" height="25" data-depth="0.3" data-depth-y="-1.30" class="layer p9"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M29.8564 16.0718c-2.85854 4.95114-8.1405 8.00057-13.85654 8.00024-5.71605-.00032-10.9981-3.04992-13.85641-8-2.8583-4.95007-2.8584-11.0491.00014-16.00024l2.77128 1.6c-2.28651 3.96036-2.28631 8.84002-.00011 12.8002 2.2862 3.96017 6.5124 6.40017 11.08513 6.4 4.57271-.00018 8.79872-2.43984 11.08524-6.4002l2.77128 1.6z"
                            fill="#6C6CE5" fill-rule="evenodd" />
                    </svg>

                    <svg width="47" height="29" data-depth="0.2" class="layer p10" xmlns="http://www.w3.org/2000/svg">
                        <g fill="#44D7B6" fill-rule="evenodd">
                            <path
                                d="M46.78878 17.19094c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36265-9.0893-.26708-11.74616-4.27524-2.65686-4.00817-3.08917-9.78636-1.13381-15.15866l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12693 2.12514 3.20674 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40949 8.48988-8.70673l2.34923.85505z" />
                            <path
                                d="M25.17585 9.32448c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36264-9.0893-.26708-11.74616-4.27525C.16049 11.92447-.27182 6.14628 1.68354.77398l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12692 2.12514 3.20675 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40948 8.48988-8.70672l2.34923.85505z" />
                        </g>
                    </svg>

                    <svg width="33" height="20" data-depth="0.5" class="layer p11" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M32.36774.34317c.99276 5.63023-1.09332 11.3614-5.47227 15.03536-4.37895 3.67396-10.3855 4.73307-15.75693 2.77837C5.76711 16.2022 1.84665 11.53014.8539 5.8999l3.15139-.55567c.7941 4.50356 3.93083 8.24147 8.22772 9.8056 4.29688 1.56413 9.10275.71673 12.60554-2.2227C28.34133 9.98771 30.01045 5.4024 29.21635.89884l3.15139-.55567z"
                            fill="#FFD15C" fill-rule="evenodd" />
                    </svg>

                </div>
            </div>

        </section>

        <!-- section about -->
        <section id="about">

            <div class="container">
                <div class="particles" id="particles-js2"></div>
                <!-- section title -->
                <h2 class="section-title wow fadeInUp">About Me</h2>

                <div class="spacer" data-height="60"></div>

                <div class="row">

                    <div class="col-md-3">
                        <div class="text-center text-md-left">
                            <!-- avatar image -->
                            <img src="images/sibe-160.png" alt="sibeux" />
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>

                    <div class="col-md-9 triangle-left-md triangle-top-sm">
                        <div class="rounded bg-white shadow-dark padding-30">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- about text -->
                                    <p>I am an Information Systems student at the University of Jember with experience
                                        in BEM as Multimedia Staff and Head of Multimedia Sub-Division. I specialize in
                                        mobile development using Flutter and have intermediate skills in graphic design
                                        and video editing. I also take on freelance projects to create simple website
                                        applications, aiming to leverage my skills for innovative and impactful
                                        projects.
                                    </p>

                                    <!-- CURRICULUM CITAE -->
                                    <div class="mt-3">
                                        <a href="https://drive.google.com/file/d/1FIexWx39OxBeL8JDfwY5x5ilNiPuyeZl/view?usp=share_link"
                                            target="_blank" class="btn btn-default">Download CV</a>
                                    </div>
                                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                                </div>
                                <div class="col-md-6">
                                    <!-- skill item -->
                                    <div class="skill-item">
                                        <div class="skill-info clearfix">
                                            <h4 class="float-left mb-3 mt-0">Design Graphic</h4>
                                            <span class="float-right">2 Years</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar data-background" role="progressbar"
                                                aria-valuemin="0" aria-valuemax="100" aria-valuenow="55"
                                                data-color="#6C6CE5">
                                            </div>
                                        </div>
                                        <div class="spacer" data-height="20"></div>
                                    </div>

                                    <!-- skill item -->
                                    <div class="skill-item">
                                        <div class="skill-info clearfix">
                                            <h4 class="float-left mb-3 mt-0">Programming</h4>
                                            <span class="float-right">3 years</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar data-background" role="progressbar"
                                                aria-valuemin="0" aria-valuemax="100" aria-valuenow="77"
                                                data-color="#65f0bf">
                                            </div>
                                        </div>
                                        <div class="spacer" data-height="20"></div>
                                    </div>

                                    <!-- skill item -->
                                    <div class="skill-item">
                                        <div class="skill-info clearfix">
                                            <h4 class="float-left mb-3 mt-0">Videography</h4>
                                            <span class="float-right">2 Years</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar data-background" role="progressbar"
                                                aria-valuemin="0" aria-valuemax="100" aria-valuenow="55"
                                                data-color="#FF4C60">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- row end -->

                <div class="spacer" data-height="70"></div>

                <div class="row">

                    <!-- content -->
                    <div class="col-md-3 col-sm-6">
                        <div class="fact-item">
                            <span class="icon icon-social-youtube"></span>
                            <div class="details">
                                <?php
                                // Calling api form youtube
                                $youtube_subscribers = file_get_contents(
                                    'https://www.googleapis.com/youtube/v3/channels?part=statistics&id=UCIIwrwKxcrTXlyYlRmBV7hg&key=AIzaSyBU6wpZJjTM-yRG3dVcDtpoIiW09-S5sXg'
                                );

                                // Decoding json youtube api response
                                $youtube_api_response = json_decode($youtube_subscribers, true);

                                // get count of youtube subscribers.
                                $subscribers_count = intval($youtube_api_response['items'][0]['statistics']['subscriberCount']);

                                // get count of youtube views
                                $views_count = intval($youtube_api_response['items'][0]['statistics']['viewCount']);

                                // get count of youtube videos
                                $videos_count = intval($youtube_api_response['items'][0]['statistics']['videoCount']);

                                // print count of youtube subscribers.
                                // echo $subscribers_count;
                                ?>
                                <h3 class="mb-0 mt-0 number"><em class="count">
                                        <?php echo $subscribers_count ?>
                                    </em>
                                </h3>
                                <p class="mb-0">Subscribers Youtube</p>
                            </div>
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>

                    <!-- content -->
                    <div class="col-md-3 col-sm-6">
                        <div class="fact-item">
                            <span class="icon icon-people"></span>
                            <div class="details">
                                <h3 class="mb-0 mt-0 number"><em class="count">
                                        <?php echo $views_count ?>
                                    </em></h3>
                                <p class="mb-0">Views Youtube</p>
                            </div>
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>

                    <!-- content -->
                    <div class="col-md-3 col-sm-6">
                        <div class="fact-item">
                            <span class="icon icon-screen-desktop"></span>
                            <div class="details">
                                <h3 class="mb-0 mt-0 number"><em class="count">
                                        <?php echo $videos_count ?>
                                    </em></h3>
                                <p class="mb-0">Videos Youtube</p>
                            </div>
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>

                    <!-- content -->
                    <div class="col-md-3 col-sm-6">
                        <div class="fact-item">
                            <span class="icon icon-bubbles"></span>
                            <div class="details">
                                <h3 class="mb-0 mt-0 number"><em class="count">381</em></h3>
                                <p class="mb-0">Comments Youtube</p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </section>

        <!-- section services -->
        <section id="services">

            <div class="container">

                <!-- section title -->
                <h2 class="section-title wow fadeInUp">Skills</h2>

                <div class="spacer" data-height="60"></div>

                <div class="row">

                    <div class="col-md-4">
                        <!-- service box -->
                        <div class="service-box rounded data-background padding-30 text-center text-light shadow-blue"
                            data-color="#6C6CE5">
                            <img src="images/service-1.svg" alt="UI/UX design" />
                            <h3 class="mb-3 mt-0">Design Graphic</h3>
                            <p class="mb-0">CorelDraw, Adobe Photoshop, Adobe Illustrator, Figma, Canva.</p>
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>

                    <div class="col-md-4">
                        <!-- service box -->
                        <div class="service-box rounded data-background padding-30 text-center text-light shadow-green"
                            data-color="#65f0bf">
                            <img src="images/service-2.svg" alt="UI/UX design" />
                            <h3 class="mb-3 mt-0">Programming</h3>
                            <p class="mb-0">Java, Python, Kotlin, Linux, Web Development, Mobile Development.</p>
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>

                    <div class="col-md-4">
                        <!-- service box -->
                        <div class="service-box rounded data-background padding-30 text-center text-light shadow-pink"
                            data-color="#F97B8B">
                            <img src="images/service-3.svg" alt="UI/UX design" />
                            <h3 class="mb-3 mt-0">Videography</h3>
                            <p class="mb-0">Adobe Premiere Pro, Adobe After Effects, Kinemaster.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p class="mb-0">Looking for a project? <a href="#contact">Contact Me</a> now! 👋</p>
                </div>
            </div>
        </section>

        <!-- section experience -->
        <section id="experience">

            <div class="container">

                <!-- section title -->
                <h2 class="section-title wow fadeInUp">Education & Experience</h2>

                <div class="spacer" data-height="60"></div>

                <div class="row">

                    <div class="col-md-6">

                        <!-- timeline wrapper -->
                        <div class="timeline edu bg-white rounded shadow-dark padding-30 overflow-hidden">

                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp">
                                <div class="content">
                                    <span class="time">2020 - Present</span>
                                    <h3 class="title">University of Jember</h3>
                                    <p>Bachelor’s Degree - Information Systems
                                    </p>
                                </div>
                            </div>

                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                                <div class="content">
                                    <span class="time">2017 - 2020</span>
                                    <h3 class="title">SMAN 01 Srengat</h3>
                                    <p>Mathematics And Natural Science
                                    </p>
                                </div>
                            </div>

                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
                                <div class="content">
                                    <span class="time">2014 - 2017</span>
                                    <h3 class="title">SMPN 01 Srengat</h3>
                                    <p>Junior High School 01 Srengat
                                    </p>
                                </div>
                            </div>

                            <!-- main line -->
                            <span class="line"></span>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <!-- responsive spacer -->
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>

                        <!-- timeline wrapper -->
                        <div class="timeline exp bg-white rounded shadow-dark padding-30 overflow-hidden">

                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp">
                                <div class="content">
                                    <span class="time">Feb - Jun 2023</span>
                                    <h3 class="title">Programmer</h3>
                                    <p>Programmer Internship at BPJPH Kemenag
                                    </p>
                                </div>
                            </div>

                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                                <div class="content">
                                    <span class="time">Aug - Dec 2022</span>
                                    <h3 class="title">Android Developer - Hacktiv8 Indonesia</h3>
                                    <p>Certified Independent Study Program
                                    </p>
                                </div>
                            </div>

                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
                                <div class="content">
                                    <span class="time">2021 - 2023</span>
                                    <h3 class="title">BEM Fasilkom UNEJ</h3>
                                    <p>KOMINFO Staff at BEM Fasilkom UNEJ
                                    </p>
                                </div>
                            </div>

                            <!-- main line -->
                            <span class="line"></span>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- tes -->
        <section class="experience padding-tb" id="Resume" style="padding-top: 50px;">
            <div class="container" style="padding: 5px;">
                <div class="section-header">
                    <div class="title">
                        <h2 class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">I Have
                            Completed My
                            Master
                            <span>Degree & Experience</span> With Leading Companies
                        </h2>
                    </div>
                </div>
                <div class="section-wrapper">
                    <div class="exp-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="exp-inner">
                            <div class="exp-thumb">
                                <img src="https://raw.githubusercontent.com/sibeux/license-sibeux/MyProgram/cropped-Logo-Baku-UNEJ-2020-Square.png"
                                    alt="experience" height="40" width="40">
                                <h6>Universitas Jember</h6>
                                <div class="exp-cata">
                                    <span>2020 - Present</span>
                                </div>
                            </div>
                            <div class="exp-content">
                                <h3>S1 Sistem Informasi</h3>
                                <p>Undergraduate student of Information Systems in the Faculty of Computer Science at
                                    the University of Jember</p>
                            </div>
                        </div>
                    </div>
                    <div class="exp-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="exp-inner">
                            <div class="exp-thumb">
                                <img src="https://raw.githubusercontent.com/sibeux/license-sibeux/MyProgram/BEM%20Logo.png"
                                    alt="experience" height="40" width="40">
                                <h6>BEM FASILKOM UNEJ</h6>
                                <div class="exp-cata">
                                    <span>2021 - 2023</span>
                                </div>
                            </div>
                            <div class="exp-content">
                                <h3>KOMINFO Divison Staff</h3>
                                <p>Head of the Multimedia Subdivision and KOMINFO Staff at
                                    the BEM FASILKOM for the 2023
                                    term</p>
                            </div>
                        </div>
                    </div>
                    <div class="exp-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="exp-inner">
                            <div class="exp-thumb">
                                <img src="https://raw.githubusercontent.com/sibeux/license-sibeux/MyProgram/hacktiv8-1.png"
                                    alt="experience" height="40" width="40">
                                <h6>Hacktiv8 Indonesia</h6>
                                <div class="exp-cata">
                                    <span>Aug - Dec 2022</span>
                                </div>
                            </div>
                            <div class="exp-content">
                                <h3>Android Java Developer</h3>
                                <p>Certified Independent Study as Android Java for Mobile Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="exp-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="exp-inner">
                            <div class="exp-thumb">
                                <img src="https://raw.githubusercontent.com/sibeux/license-sibeux/MyProgram/halal.png"
                                    alt="experience" height="40" width="40">
                                <h6>BPJPH Kemenag RI</h6>
                                <div class="exp-cata">
                                    <span>Feb - Jun 2023</span>
                                </div>
                            </div>
                            <div class="exp-content">
                                <h3>Programmer</h3>
                                <p>An intern student of MSIB Batch 4 at BPJPH, serving as a member of the programming
                                    division.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- test -->

        <!-- section works -->
        <section id="works" style="padding-top: 70px;">

            <div class="container">

                <!-- section title -->
                <h2 class="section-title wow fadeInUp">My Design</h2>

                <div class="spacer" data-height="60"></div>

                <!-- portfolio filter (desktop) -->
                <ul class="portfolio-filter list-inline wow fadeInUp">
                    <li class="current list-inline-item" data-filter="*">All</li>
                    <li class="list-inline-item" data-filter=".art">Poster</li>
                    <!-- <li class="list-inline-item" data-filter=".feed">Feed</li> -->
                    <li class="list-inline-item" data-filter=".creative">Video</li>
                    <li class="list-inline-item" data-filter=".design">Logo</li>
                    <li class="list-inline-item" data-filter=".branding">Art</li>
                </ul>

                <!-- portfolio filter (mobile) -->
                <div class="pf-filter-wrapper">
                    <select class="portfolio-filter-mobile">
                        <option value="*">All</option>
                        <option value=".art">Poster</option>
                        <!-- <option value=".feed">Feed</option> -->
                        <option value=".creative">Video</option>
                        <option value=".design">Logo</option>
                        <option value=".branding">Art</option>
                    </select>
                </div>

                <!-- portolio wrapper -->
                <div class="row portfolio-wrapper">

                    <?php
                    function getIcon($filter)
                    {
                        if ($filter == "Poster") {
                            return "icon-picture";
                        } elseif ($filter == "Art") {
                            return "icon-star";
                        } elseif ($filter == "Video") {
                            return "icon-camrecorder";
                        } elseif ($filter == "Logo") {
                            return "icon-trophy";
                        }
                        ;
                    }

                    function getFIlter($filter)
                    {
                        if ($filter == "Poster") {
                            return "art";
                        } elseif ($filter == "Art") {
                            return "branding";
                        } elseif ($filter == "Video") {
                            return "creative";
                        } elseif ($filter == "Logo") {
                            return "design";
                        }
                        ;
                    }

                    // Function to extract links from the text
                    function extractLinks($extra_asset)
                    {
                        // Match all URLs within double quotes
                        preg_match_all('/"([^"]+)"/', $extra_asset, $matches);

                        // Return the array of URLs
                        return $matches[1];
                    }

                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['UID'];
                        $title = $row['title'];
                        $filter = $row['filter'];
                        $type = $row['type'];
                        $asset = $row['asset_link'];
                        $thumbnail = $row['thumb_link'];
                        $extra_asset = $row['extra_link'];
                        $p1_content = $row['p1_content'];
                        $p2_content = $row['p2_content'];
                        $caption = $row['caption_content'];

                        if ($type == "work-image") {
                            ?>
                    <!-- portfolio item -->
                    <div class="col-md-4 col-sm-6 grid-item <?php echo getFilter($filter) ?>">
                        <a href="<?php echo $asset ?>" class="work-image">
                            <div class="portfolio-item rounded shadow-dark">
                                <div class="details">
                                    <span class="term"><?php echo $filter ?></span>
                                    <h4 class="title"><?php echo $title ?></h4>
                                    <span class="more-button"><i class="<?php echo getIcon($filter) ?>"></i></span>
                                </div>
                                <div class="thumb">
                                    <img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                        } elseif ($row['type'] == "gallery-link") {
                            // Get the links
                            $gallery_link = extractLinks($extra_asset);
                            ?>
                    <!-- portfolio item -->
                    <div class="col-md-4 col-sm-6 grid-item <?php echo getFilter($filter) ?>">
                        <a href="#gallery-<?php echo $id ?>" class="gallery-link">
                            <div class="portfolio-item rounded shadow-dark">
                                <div class="details">
                                    <span class="term"><?php echo $filter ?></span>
                                    <h4 class="title"><?php echo $title ?></h4>
                                    <span class="more-button"><i class="<?php echo getIcon($filter) ?>"></i></span>
                                </div>
                                <div class="thumb">
                                    <img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div id="gallery-<?php echo $id ?>" class="gallery mfp-hide">
                            <!-- <a href="images/works/id (2).png"></a>
                            <a href="images/works/id (3).png"></a>
                            <a href="images/works/id (4).png"></a> -->
                            <?php
                                    foreach ($gallery_link as $link) {
                                        echo "<a href='$link'></a>";
                                    }
                                    ?>
                            ?>
                        </div>
                    </div>
                    <?php
                        } elseif ($row['type'] == "work-video") {
                            ?>
                    <!-- portfolio item -->
                    <div class="col-md-4 col-sm-6 grid-item <?php echo getFilter($filter) ?>">
                        <a href="<?php echo $asset ?>" class="work-video">
                            <div class="portfolio-item rounded shadow-dark">
                                <div class="details">
                                    <span class="term"><?php echo $filter ?></span>
                                    <h4 class="title"><?php echo $title ?></h4>
                                    <span class="more-button"><i class="<?php echo getIcon($filter) ?>"></i></span>
                                </div>
                                <div class="thumb">
                                    <img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                        } elseif ($type == 'work-content') {
                            ?>
                    <!-- portfolio item -->
                    <div class="col-md-4 col-sm-6 grid-item <?php echo getFilter($filter) ?>">
                        <a href="#small-dialog-<?php echo $id ?>" class="work-content">
                            <div class="portfolio-item rounded shadow-dark">
                                <div class="details">
                                    <span class="term"><?php echo $filter ?></span>
                                    <h4 class="title"><?php echo $title ?></h4>
                                    <span class="more-button"><i class="<?php echo getIcon($filter) ?>"></i></span>
                                </div>
                                <div class="thumb">
                                    <img src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div id="small-dialog-<?php echo $id ?>" class="white-popup zoom-anim-dialog mfp-hide">
                            <img src="<?php echo $asset ?>" alt="<?php echo $title ?>" />
                            <h2><?php echo $title ?></h2>
                            <p><?php echo $p1_content ?></p>
                            <p><?php echo $p2_content ?></p>
                            <a href="<?php echo $extra_asset ?>" target="_blank"
                                class="btn btn-default"><?php echo $caption ?></a>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    $db->close();
                    ?>

                    <!-- more button -->
                    <!-- <div class="load-more text-center mt-4">
                        <a style="color: white;" class="btn btn-default"><i class="fas fa-spinner"></i>Load more</a> -->
                    <!-- numbered pagination (hidden for infinite scroll) -->
                    <!-- <ul class="portfolio-pagination list-inline d-none">
                            <li class="list-inline-item">1</li>
                            <li class="list-inline-item"><a href="works-2.html"></a></li>
                            <li class="list-inline-item"><a href="works-3.html"></a></li>
                            <li class="list-inline-item"><a href="works-4.html"></a></li>
                            <li class="list-inline-item"><a href="works-5.html"></a></li>
                            <li class="list-inline-item"><a href="works-6.html"></a></li>
                        </ul>
                    </div> -->

                </div>

                <!-- Pagination -->
                <!-- <div class="pagination-wrapper text-center mt-4">
                    <ul class="pagination">
                        <?php if ($page > 1): ?>
                        <li class="page-item"><a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a>
                        </li>
                        <?php endif; ?>

                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                        <?php endfor; ?>

                        <?php if ($page < $total_pages): ?>
                        <li class="page-item"><a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a></li>
                        <?php endif; ?>
                    </ul>
                </div> -->

                <div class="pagination p12">
                    <ul class="pag-p12">
                        <!-- Sial, ini cuma buat blueprint, full controll ada di javascript -->
                    </ul>
                </div>


                <!-- need more? -->
                <div class="mt-1 text-center">
                    <p class="mb-0">Want to see more designs? View on <a href="https://bit.ly/Design-sibeux"
                            target="_blank">Drive</a> 🚀</p>
                </div>

                <!-- section testimonials -->
                <section id="testimonials">

                    <div class="container">

                        <!-- section title -->
                        <h2 class="section-title wow fadeInUp">Tools & Language</h2>

                        <div class="spacer" data-height="60"></div>
                        <!-- testimonials wrapper -->
                        <div class="testimonials-wrapper">

                            <!-- testimonial item -->
                            <div class="testimonial-item text-center mx-auto">
                                <div class="thumb mb-3 mx-auto">
                                    <img src="images/vscode.svg" alt="customer-name" />
                                </div>
                                <h4 class="mt-3 mb-0">Visual Studio Code</h4>
                                <span class="subtitle">IDE daily driver for programming</span>
                                <div
                                    class="bg-white padding-30 shadow-dark rounded triangle-top position-relative mt-4">
                                    <p class="mb-0">I use VSCode to programming because VSCode has a
                                        lot of extensions that are very useful in program development.</p>
                                </div>
                            </div>

                            <!-- testimonial item -->
                            <div class="testimonial-item text-center mx-auto">
                                <div class="thumb mb-3 mx-auto">
                                    <img src="images/android studio.svg" alt="customer-name" />
                                </div>
                                <h4 class="mt-3 mb-0">Android Studio</h4>
                                <span class="subtitle">Android Studio for Mobile Development</span>
                                <div
                                    class="bg-white padding-30 shadow-dark rounded triangle-top position-relative mt-4">
                                    <p class="mb-0">I learned Java and Kotlin programming languages ​​to
                                        develop android mobile applications using Android Studio.</p>
                                </div>
                            </div>

                            <!-- testimonial item -->
                            <div class="testimonial-item text-center mx-auto">
                                <div class="thumb mb-3 mx-auto">
                                    <img src="images/figma.svg" alt="customer-name" />
                                </div>
                                <h4 class="mt-3 mb-0">Figma</h4>
                                <span class="subtitle">Figma to design user interface application</span>
                                <div
                                    class="bg-white padding-30 shadow-dark rounded triangle-top position-relative mt-4">
                                    <p class="mb-0">I use figma to design the interface of the applications that I
                                        develop,
                                        such as websites and mobile apps.</p>
                                </div>
                            </div>

                            <!-- testimonial item -->
                            <div class="testimonial-item text-center mx-auto">
                                <div class="thumb mb-3 mx-auto">
                                    <img src="images/github.svg" alt="customer-name" />
                                </div>
                                <h4 class="mt-3 mb-0">GitHub</h4>
                                <span class="subtitle">GitHub repositories for portfolio</span>
                                <div
                                    class="bg-white padding-30 shadow-dark rounded triangle-top position-relative mt-4">
                                    <p class="mb-0">I use GitHub to store all program code while i study
                                        programming.
                                        And I can use this repository as a portfolio.</p>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3 col-6">
                                <!-- client item -->
                                <div class="client-item">
                                    <div class="inner">
                                        <img src="images/python.svg" alt="client-name" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <!-- client item -->
                                <div class="client-item">
                                    <div class="inner">
                                        <img src="images/linux.svg" alt="client-name" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <!-- client item -->
                                <div class="client-item">
                                    <div class="inner">
                                        <img src="images/java.svg" alt="client-name" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <!-- client item -->
                                <div class="client-item">
                                    <div class="inner">
                                        <img src="images/kotlin.svg" alt="client-name" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <!-- client item -->
                                <div class="client-item">
                                    <div class="inner">
                                        <img src="images/git.svg" alt="client-name" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <!-- client item -->
                                <div class="client-item">
                                    <div class="inner">
                                        <img src="images/ai.svg" alt="client-name" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <!-- client item -->
                                <div class="client-item">
                                    <div class="inner">
                                        <img src="images-works/Flutter 1.svg" alt="flutter" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <!-- client item -->
                                <div class="client-item">
                                    <div class="inner">
                                        <img src="images/copilot.svg" alt="client-name" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>

                <!-- section blog -->
                <section id="blog">

                    <div class="container">

                        <!-- section title -->
                        <h2 class="section-title wow fadeInUp">Latest Projects</h2>

                        <div class="spacer" data-height="60"></div>

                        <div class="row blog-wrapper">

                            <div class="col-md-4">
                                <!-- blog item -->
                                <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                                    <div class="thumb">
                                        <a href="https://github.com/sibeux/cybeat_music_player" target="_blank">
                                            <span class="category">Mobile</span>
                                        </a>
                                        <a href="https://github.com/sibeux/cybeat_music_player" target="_blank">
                                            <img src="assets/img/CYBEAT.svg" alt="Cybeat" />
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h4 class="my-0 title"><a href="https://github.com/sibeux/cybeat_music_player"
                                                target="_blank">Cybeat Music Player Mobile Application</a></h4>
                                        <ul class="list-inline meta mb-0 mt-2">
                                            <li class="list-inline-item">21 April, 2024</li>
                                            <li class="list-inline-item">Sibeux</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <!-- blog item -->
                                <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                                    <div class="thumb">
                                        <a href="https://sibeux.my.id/cloud-music-player/" target="_blank">
                                            <span class="category">Web</span>
                                        </a>
                                        <a href="https://sibeux.my.id/cloud-music-player/" target="_blank">
                                            <img src="https://raw.githubusercontent.com/sibeux/license-sibeux/c86ece04beee5d65c4fc9be7113b945f03616c6b/spotify.svg"
                                                alt="" />
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h4 class="my-0 title"><a href="https://sibeux.my.id/cloud-music-player/"
                                                target="_blank">Cloud Music Streaming Website</a></h4>
                                        <ul class="list-inline meta mb-0 mt-2">
                                            <li class="list-inline-item">12 January, 2024</li>
                                            <li class="list-inline-item">Sibeux</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <!-- blog item -->
                                <div class="blog-item rounded bg-white shadow-dark wow fadeIn">
                                    <div class="thumb">
                                        <a href="https://github.com/sibeux/android-java-bus-reservation"
                                            target="_blank">
                                            <span class="category">Android</span>
                                        </a>
                                        <a href="https://github.com/sibeux/android-java-bus-reservation"
                                            target="_blank">
                                            <img src="images-works/bus-reser.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h4 class="my-0 title"><a
                                                href="https://github.com/sibeux/android-java-bus-reservation"
                                                target="_blank">Android Java Bus Reservation
                                                Application</a></h4>
                                        <ul class="list-inline meta mb-0 mt-2">
                                            <li class="list-inline-item">16 December, 2022</li>
                                            <li class="list-inline-item">Hacktiv8</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- need more? -->
                        <div class="mt-5 text-center">
                            <p class="mb-0">Want to see more projects? <a href="LatestProject.php" target="_blank">Let's
                                    go!!</a> 🚗</p>
                        </div>

                    </div>

                </section>

                <!-- section contact -->
                <section id="contact">

                    <div class="container">

                        <!-- section title -->
                        <h2 class="section-title wow fadeInUp">Contact Me</h2>

                        <div class="spacer" data-height="60"></div>

                        <div class="row">

                            <div class="col-md-4">
                                <!-- contact info -->
                                <div class="contact-info">
                                    <h3 class="wow fadeInUp">Let's talk about everything!</h3>
                                    <p class="wow fadeInUp">Don't like forms? Send me an <a
                                            href="mailto:wahabinasrul@gmail.com">email</a>. 👋</p>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <!-- Contact Form -->
                                <form id="contact-form" class="contact-form mt-6">

                                    <div class="messages"></div>

                                    <div class="row">
                                        <div class="column col-md-6">
                                            <!-- Name input -->
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="InputName" id="InputName"
                                                    placeholder="Your name" required="required"
                                                    data-error="Name is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="column col-md-6">
                                            <!-- Email input -->
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="InputEmail"
                                                    name="InputEmail" placeholder="Email address" required="required"
                                                    data-error="Email is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="column col-md-12">
                                            <!-- Subject input -->
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="InputSubject"
                                                    name="InputSubject" placeholder="Subject" required="required"
                                                    data-error="Subject is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="column col-md-12">
                                            <!-- Message textarea -->
                                            <div class="form-group">
                                                <textarea name="InputMessage" id="InputMessage" class="form-control"
                                                    rows="5" placeholder="Message" required="required"
                                                    data-error="Message is required."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Send Button -->
                                    <button id="submit" name="submit" value="Submit" class="btn btn-default">Send
                                        Message</button>

                                </form>
                                <!-- Contact Form end -->
                            </div>

                        </div>

                    </div>

                </section>

                <div class="spacer" data-height="96"></div>

    </main>

    <!-- Go to top button -->
    <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- SCRIPTS -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/infinite-scroll.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/particle.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/morphext.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/pagination-design.js"></script>
    <script src="js/reinitiate-custom.js"></script>

</body>

</html>