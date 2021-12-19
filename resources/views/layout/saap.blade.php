<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="theme-color" content="#feed01" />
    <title>
        Siddhamahyog Spiritual Academy
        @yield("title")
    </title>
    @yield("meta")
    
    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset ('css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('css/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('css/fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('css/style.css')  }}">
  </head>
  <body>
    <div class="preloader" id="preloader">
      <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
        <path
          d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"
        ></path>
      </svg>
      <div class="inner">
        <canvas
          class="progress-bar"
          id="progress-bar"
          width="200"
          height="200"
        ></canvas>
        <figure><img src="{{ asset ('images/preloader.png') }}" alt="Image" /></figure>
        <small>Loading</small>
      </div>
      <!-- end inner -->
    </div>
    <!-- end preloder -->
    <div class="page-transition">
      <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
        <path
          d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"
        ></path>
      </svg>
    </div>
    <!-- end page-transition -->
    <div class="smooth-scroll">
      <div class="section-wrapper" data-scroll-section>
        <div class="search-box">
          <div class="container">
            <div class="form">
              <h3>SEARCH EVENT</h3>
              <form action="route()" method="post"></form>
              <input type="search" placeholder="What are you looking for ?" />
              <input type="submit" value="SEARCH" />
            </div>
            <!-- end form -->
            <div class="search-events">
              <ul>
                <li>
                  <h5><a href="#">Artemisia Gentileschi talk with Maria</a></h5>
                  <small>15 August – 31 October 2020</small>
                </li>
                <li>
                  <h5><a href="#">Artemisia Gentileschi talk with Maria</a></h5>
                  <small>15 August – 31 October 2020</small>
                </li>
                <li>
                  <h5><a href="#">Artemisia Gentileschi talk with Maria</a></h5>
                  <small>15 August – 31 October 2020</small>
                </li>
              </ul>
            </div>
            <!-- end search-events -->
          </div>
        </div>
        <!-- end search-box -->
        <aside class="side-widget">
          <svg viewBox="0 0 600 1080" preserveAspectRatio="none" version="1.1">
            <path
              d="M540,1080H0V0h540c0,179.85,0,359.7,0,539.54C540,719.7,540,899.85,540,1080z"
            ></path>
          </svg>
          <figure class="logo">
            <img
              src="https://psmyoga.ca/wp-content/uploads/2021/02/LogoT-e1621667004612-150x150.png"
              alt="Image"
            />
          </figure>
          <!-- end logo -->
          <div class="inner">
            <div class="widget">
              <figure>
                <img
                  src="https://psmyoga.ca/wp-content/uploads/2021/02/LogoT-e1621667004612-150x150.png"
                  alt="Image"
                />
              </figure>
              <p>
                It speedily me addition <strong>weddings vicinity</strong> in
                pleasure. Happiness commanded an conveying breakfast in. Regard
                her say warmly elinor. Him these are visit front end for
                <u>seven walls</u>. Money eat scale now ask law learn.
              </p>
            </div>
            <!-- end widget -->
            <div class="widget">
              <h6 class="widget-title">Opening Hours</h6>
              <p>
                Tuesday ‒ Friday: 09:00 ‒ 17:00<br />
                Friday ‒ Monday: 10:00 ‒ 20:00
              </p>
            </div>
            <!-- end widget -->
          </div>
          <!-- end inner -->
          <div class="display-mobile">
            <div class="custom-menu">
              <ul>
                <li><a href="#">Eng</a></li>
                <li><a href="#">Rus</a></li>
              </ul>
            </div>
            <!-- end custom-menu -->
            <div class="site-menu">
              <ul>
                <li><a href="visit.html">Visit</a></li>
                <li><a href="exhibitions.html">Exhibitions</a></li>
                <li><a href="collections.html">Collections</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
            <!-- end site-menu -->
          </div>
          <!-- end display-mobile -->
        </aside>
        <nav class="navbar">
          <div class="logo">
            <a href="index.html">
              <img
                src="https://psmyoga.ca/wp-content/uploads/2021/02/LogoT-e1621667004612-150x150.png"
                alt="Image"
              />
            </a>
          </div>
          <!-- end logo -->
          <div class="custom-menu">
            <ul>
              <li><a href="#">Eng</a></li>
              <li><a href="#">Rus</a></li>
            </ul>
          </div>
          <!-- end custom-menu -->
          <div class="site-menu">
            <ul>
              <li><a href="visit.html">Visit</a></li>
              <li><a href="exhibitions.html">Exhibitions</a></li>
              <li><a href="collections.html">Collections</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
          <!-- end site-menu -->
          <div class="search-button"><i class="far fa-search"></i></div>
          <!-- end search-button -->
          <div class="hamburger-menu">
            <svg class="hamburger" width="30" height="30" viewBox="0 0 30 30">
              <path class="line line-top" d="M0,9h30" />
              <path class="line line-center" d="M0,15h30" />
              <path class="line line-bottom" d="M0,21h30" />
            </svg>
          </div>
          <!-- end hamburger-menu -->
          <div class="navbar-button">
            <a href="https://sadhak.siddhamahayog.org" target="_new"
              >Sadhak Login</a
            >
          </div>
          <!-- end navbar-button -->
        </nav>
            @yield("content")
        <!-- end content-section -->
        <section class="content-section no-spacing" data-background="#94ffc4">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="newsletter-box">
                  <div class="form">
                    <div class="titles">
                      <h6>Subscribe Newsletter</h6>
                      <h2>Sign up to get the latest news</h2>
                    </div>
                    <!-- end titles -->
                    <div class="inner">
                      <input
                        type="email"
                        placeholder="Enter your e-mail address"
                      />
                      <input type="submit" value="SIGN UP" />
                    </div>
                    <!-- end inner -->
                    <small
                      >Will be used in accordance with our
                      <a href="#">Privacy Policy</a></small
                    >
                  </div>
                  <!-- end form -->
                  <figure
                    class="newsletter-image"
                    data-scroll
                    data-scroll-speed="0.7"
                  >
                    <img src="images/newsletter-image.png" alt="Image" />
                  </figure>
                </div>
                <!-- end newsletter-box -->
              </div>
              <!-- end col-12 -->
            </div>
            <!-- end row -->
          </div>
          <!-- end container -->
        </section>
        <!-- end content-section -->
        <footer class="footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <h6 class="widget-title">About Spiritual Academy</h6>
                <ul class="footer-menu">
                  <li><a href="#">About us </a></li>
                  <li><a href="#">Contact us</a></li>
                  <li><a href="#">National work</a></li>
                  <li><a href="#">International work</a></li>
                </ul>
              </div>
              <!-- end col-4 -->
              <div class="col-lg-4 col-md-6">
                <h6 class="widget-title">Connect Us</h6>
                <ul class="social-media">
                  <li>
                    <a href="#"
                      ><i class="fab fa-facebook-f"></i> /siddhamahayog</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fab fa-twitter"></i> /siddhamahayog</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fab fa-youtube"></i> /siddhamahayog</a
                    >
                  </li>
                </ul>
              </div>
              <!-- end col-4 -->
              <div class="col-lg-4">
                <h6 class="widget-title">Visit Us Now</h6>
                <address class="address">
                  Chatra, Dharan <strong>Nepal</strong>
                  <i class="fas fa-info-circle"></i> +977 - 982312323
                </address>
              </div>
              <!-- end col-4 -->
            </div>
            <!-- end row -->
          </div>
          <!-- end container -->
          <div class="footer-bottom">
            <div class="container">
              <span class="copyright"
                >© {{ date("Y") }} Siddhamahyog | Spiritual Academy</span
              >
              <!-- <span class="creation"
                >Site created by <a href="#">themezinho</a></span
              > -->
            </div>
            <!-- end container -->
          </div>
          <!-- end footer-bottom -->
        </footer>
        <!-- end footer -->
      </div>
    </div>

    <!-- JS FILES -->
    <script src="{{ asset ('js/jquery.min.js') }}"></script>
    <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('js/gsap.min.js') }}"></script>
    <script src="{{ asset ('js/locomotive-scroll.min.js') }}"></script>
    <script src="{{ asset ('js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset ('js/kinetic-slider.js') }}"></script>
    <script src="{{ asset ('js/fancybox.min.js') }}"></script>
    <script src="{{ asset ('js/odometer.min.js') }}"></script>
    <script src="{{ asset ('js/swiper.min.js') }}"></script>
    <script src="{{ asset ('js/scripts.js') }}"></script>
    <script type="text/javascript">
        
    </script>
  </body>
</html>
