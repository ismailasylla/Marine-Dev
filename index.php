<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">
  <title>Portfolio| Developper</title>
  <link rel="icon" href="favicon.png" type="image/png">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <!-- <link href="css/bootstrap-theme.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="css/swiper.min.css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <!-- <link href="css/contactcss/custom.css" rel="stylesheet" type="text/css"> -->
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
</head>

<body>
  <!--Header_section-->
  <header id="header_wrapper">
    <div class="container">
      <div class="header_box">
        <div class="logo"><a href="index.php"><img src="img/logo2.png" alt="logo" style="width:200px"></a></div>
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
              <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span> </button>
          </div>
          <div id="main-nav" class="collapse navbar-collapse navStyle">
            <ul class="nav navbar-nav" id="mainNav">
              <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
              <li><a href="#aboutUs" class="scroll-link">About Me</a></li>
              <li><a href="#service" class="scroll-link">Skills</a></li>
              <li><a href="#Portfolio" class="scroll-link">Projects</a></li>
              <!-- <li><a href="#team" class="scroll-link">Testimonial</a></li> -->
              <li><a href="#clients" class="scroll-link">Social-Networks</a></li>
              <li><a href="contact.php" class="scroll-link">Contact</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--Header_section-->


  <!--Hero_Section-->
  <section id="hero_section" class="top_cont_outer">
    <div class="hero_wrapper">
      <div class="container">
        <div class="hero_section">
          <div class="row">
            <div class="col-md-12">

              <div class="top_left_cont zoomIn wow animated">
                <h2>Hello, I am <b>Ismail<b><br> <strong>Am a Full Stack Web-developper I <i class="fa fa-heart" style="
    color: red;"></i>
                        Programing</strong></h2>

                <div class="underline"></div>
                <a href="#aboutUs" class="read_more2">Who Am I</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Hero_Section-->
  <section id="aboutUs">
    <!--Aboutus-->
    <div class="inner_wrapper aboutUs-container fadeInLeft animated wow">
      <div class="container">
        <h2>Am Ismail</h2>
        <h6>I'm a Full Stack Web Developer, focused on web development industries</h6>
        <div class="inner_section">
          <div class="row">
            <div class="col-lg-12 about-us">
              <div class="row">
                <div class="col-md-6"> <img class="img-responsive" src="img/about2.jpg" ,align="" width="400px" style="border-radius:200px">
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                  <h3>I Design and build Awesome Web Apps</h3>
                  <p class="about-me">
                    Graduate of Computer science and Application Technology. I have 3 years of Web-Development
                    Experience, 5years of Computer Hardware Maintenance and Networking Troubleshooting experience
                    skills. I have completed my Master's degree in Economics as well in 2014, I love interactive,
                    experimental technologies, data visualization ... and love everything that's related to computer
                    programming...
                  </p>
                  <ul class="about-us-list" style="color:#565656">
                    <li class="points">Consectetur Morbi sagittis, sem quisci ipsum gravida tortor</li>
                    <li class="points">Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida </li>
                    <li class="points">Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci gravida </li>
                    <li class="points">Sagittis, sem quis lacinia faucibus, orci ipsum gravida </li>
                    <li class="points">Ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci</li>
                  </ul><!-- /.about-us-list -->

                </div><!-- /.col-md-6 -->

              </div><!-- /.row -->
            </div><!-- /.col-lg-12 -->
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--Aboutus-->
  <section class="case-study" id="service" style=" margin-top: 35px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="sub-heading">Exclusively</h4>
          <h1 class="heading purple"><span class="purple">work</span> with <br>The the flowing stacks</h1>
          <!-- Swiper -->
          <div class="swiper-container client-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide client-box">
                <img src="img/stacks/nodejs.png" class="client-logo">
                <h3 class="text-left title">Node.js Back End framework..</h3>
                <p class="text-left tag">Front End framework</p>
                <p class="text-left"><a href="#">Know More &#8594;</a></p>
              </div>
              <div class="swiper-slide client-box">
                <img src="img/stacks/angularjs.png" class="client-logo">
                <h3 class="text-left title">Angular is a Front-End framework..</h3>
                <p class="text-left tag">Front End framework</p>
                <p class="text-left"><a href="#">Know More &#8594;</a></p>
              </div>
              <div class="swiper-slide client-box">
                <img src="img/stacks/react-js-logo.png" class="client-logo">
                <h3 class="text-left title">ReactJS is is a Front-End JavaScript library..</h3>
                <p class="text-left tag">Front End framework</p>
                <p class="text-left"><a href="#">Know More &#8594;</a></p>
              </div>
              <div class="swiper-slide client-box">
                <img src="img/stacks/vuejs.png" class="client-logo">
                <h3 class="text-left title">Vue is a progressive Front End framework..</h3>
                <p class="text-left tag">Front End framework</p>
                <p class="text-left"><a href="#">Know More &#8594;</a></p>
              </div>
              <div class="swiper-slide client-box">
                <img src="img/stacks/laravel_logo.png" class="client-logo">
                <h3 class="text-left title">Laravel is a PHP Framework..</h3>
                <p class="text-left tag">Branding, UI, Website</p>
                <p class="text-left"><a href="#">Know More &#8594;</a></p>
              </div>
              <div class="swiper-slide client-box">
                <img src="img/stacks/wordpress-logo.png" class="client-logo">
                <h3 class="text-left title">WordPress is an MVC build on top of PHP..</h3>
                <p class="text-left tag">Branding, UI, Website</p>
                <p class="text-left"><a href="#">Know More &#8594;</a></p>
              </div>
            </div>

          </div>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </section>
  <!--Service-->

  <!-- Portfolio -->
  <section id="Portfolio" class="content">

    <!-- Container -->
    <div class="container portfolio_title">

      <!-- Title -->
      <div class="section-title">
        <h2>Projects</h2>
        <h6>Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum</h6>

      </div>
      <!--/Title -->

    </div>
    <!-- Container -->

    <div class="portfolio-top"></div>

    <!-- Portfolio Filters -->
    <div class="portfolio">

      <div id="filters" class="sixteen columns">
        <ul class="clearfix">
          <li><a id="all" href="#" data-filter="*" class="active">
              <h5>All</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".prototype">
              <h5>Prototype</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".design">
              <h5>Design</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".android">
              <h5>Android</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".appleIOS">
              <h5>Apple IOS</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".web">
              <h5>Web App</h5>
            </a></li>
        </ul>
      </div>
      <!--/Portfolio Filters -->

      <!-- Portfolio Wrapper -->
      <div class="isotope fadeInLeft animated wow grid" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">
        <!-- Portfolio Item -->
        <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four   appleIOS isotope-item effect-oscar">

          <div class="portfolio_img">
            <img src="img/portfolio_pic1.jpg" alt="Portfolio 1"> </div>
          <figcaption>
            <div>
              <a href="img/portfolio_pic1.jpg" class="fancybox">
                <h2>Warm <span>Oscar</span></h2>
                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
              </a>
            </div>
          </figcaption>
        </figure>
        <!--/Portfolio Item -->

        <!-- Portfolio Item-->
        <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four  design isotope-item effect-oscar">
          <div class="portfolio_img"> <img src="img/portfolio_pic2.jpg" alt="Portfolio 1"> </div>
          <figcaption>
            <div>
              <a href="img/portfolio_pic2.jpg" class="fancybox">
                <h2>Warm <span>Oscar</span></h2>
                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
              </a>
            </div>
          </figcaption>
        </figure>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four  design  isotope-item effect-oscar">
          <div class="portfolio_img"> <img src="img/portfolio_pic3.jpg" alt="Portfolio 1"> </div>
          <figcaption>
            <div>
              <a href="img/portfolio_pic3.jpg" class="fancybox">
                <h2>Warm <span>Oscar</span></h2>
                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
              </a>
            </div>
          </figcaption>
        </figure>
        <!--/Portfolio Item-->

        <!-- Portfolio Item-->
        <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four  android  prototype web isotope-item effect-oscar">
          <div class="portfolio_img"> <img src="img/projects/node-js/notes/home-page-01.png" alt="Portfolio 1"> </div>
          <figcaption>
            <div>
              <a href="img/projects/node-js/notes/home-page-01.png" class="fancybox">
                <h2>Warm <span>Oscar</span></h2>
                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
              </a>
            </div>
          </figcaption>
        </figure>
        <!-- Portfolio Item -->

        <!-- Portfolio Item -->
        <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four  design isotope-item effect-oscar">
          <div class="portfolio_img"> <img src="img/portfolio_pic5.jpg" alt="Portfolio 1"> </div>
          <figcaption>
            <div>
              <a href="img/portfolio_pic5.jpg" class="fancybox">
                <h2>Warm <span>Oscar</span></h2>
                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
              </a>
            </div>
          </figcaption>
        </figure>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four  web isotope-item effect-oscar">
          <div class="portfolio_img"> <img src="img/projects/node-js/notes/login-page.png" alt="Portfolio 1"> </div>
          <figcaption>
            <div>
              <a href="img/projects/node-js/notes/login-page.png" class="fancybox">
                <h2>Warm <span>Oscar</span></h2>
                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
              </a>
            </div>
          </figcaption>
        </figure>
        <!--/Portfolio Item -->





        <!-- Portfolio Item  -->
        <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four  design web isotope-item effect-oscar">
          <div class="portfolio_img"> <img src="img/projects/node-js/notes/Registration-page.png" alt="Portfolio 1">
          <a href="img/projects/node-js/notes/Registration-page.png" class="fancybox">
        </div>
          <figcaption>
            <div>
              <!-- <a href="img/projects/node-js/notes/Registration-page.png" class="fancybox"> -->
                <!-- <h2>Warm <span>Oscar</span></h2>
                <p>Oscar is a decent man. He used to clean porches with pleasure.</p> -->
              </a>
            </div>
          </figcaption>
        </figure>
        <!--/Portfolio Item -->






        <!-- Portfolio Item -->
        <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four   android isotope-item effect-oscar">
          <div class="portfolio_img"> <img src="img/portfolio_pic8.jpg" alt="Portfolio 1"> </div>
          <figcaption>
            <div>
              <a href="img/portfolio_pic8.jpg" class="fancybox responsive">
                <h2>Warm <span>Oscar</span></h2>
                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
              </a>
            </div>
          </figcaption>
        </figure>
        <!--/Portfolio Item -->

      </div>
      <!--/Portfolio Wrapper -->

    </div>
    <!--/Portfolio Filters -->

    <div class="portfolio_btm"></div>


    <div id="project_container">
      <div class="clear"></div>
      <div id="project_data"></div>
    </div>


  </section>
  <!--/Portfolio -->

  <!--Footer-->
  <footer class="footer_wrapper" id="contact">
    <div class="container">
      <section class="page_section contact" id="contact">
        <div class="contact_section">

          <section class="page_section" id="clients">
            <!--page_section-->
            <!-- <h2>Worked With</h2> -->
            <!--page_section-->
            <div class="client_logos">
              <!--client_logos-->
              <div class="container-fluid">
              </div>
            </div>
          </section>

        </div>
        <div class="arrow bounce">
          <a href="#clients">
            <img class="me scroll-link" src="img/me.jpg" width=320px height=320px style="border-radius:100%; margin-left: 400px;margin-right: auto;   margin-left: auto; margin-bottom: -70px;">
          </a>
        </div>

        <!-- arrow social -->
        <div class="arrow bounce bounceIn wow delay-02s" style="margin-top: 75px;">
          <a class="fa fa-arrow-down fa-2x scroll-link" href="#clients" style="color: #ffffff;"></a>
        </div>
        <!-- end arrow social -->
        <h2 style="color:white; margin-bottom: 35px; ">Get In Touch</h2>
        <!-- margin-top: -60px; -->
        <h6>Let’s talk about your Website</h6>
        <div class="">
            <ul class="social_links">
              <li class="twitter animated bounceIn wow delay-02s"><a href="https://twitter.com/ismailasylla"><i class="fa fa-twitter"></i></a></li>
              <li class="facebook animated bounceIn wow delay-03s"><a href="https://www.facebook.com/Syldox"><i class="fa fa-facebook"></i></a></li>
              <li class="pinterest animated bounceIn wow delay-04s"><a href="https://github.com/Syldox"><i class="fa fa-github"></i></a></li>
              <li class="gplus animated bounceIn wow delay-05s"><a href="https://www.linkedin.com/in/ismaila-sylla-04377b126/"><i
                    class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
    </section>
    </div>
    <div class="container">
      <div class="footer_bottom"><span>Copyright © 2015, All Rights Reserved | Design by Ismaila Sylla <a href="#">DEV-Marines</a>.
        </span> </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/contact_form.js"></script>
  <script src="js/contactjs/script.js"></script>
  <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
  <script src="js/swiper.jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.nav.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script type="text/javascript" src="js/wow.js"></script>

</body>

</html>
