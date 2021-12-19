@extends("layout.saap")

@section("title")


          <!-- end container -->



@endsection

@section("content")

<div>
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
        <figure><img src="images/preloader.png" alt="Image" /></figure>
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
        <!-- end navbar -->
        <!-- data-background="images/page-header.jpg" -->
        <header class="page-header" data-background="#fff">
          <div class="inner">
            <svg width="580" height="400" class="svg-morph">
              <path
                id="svg_morph"
                d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z"
              />
            </svg>
            <h1>Contact Us</h1>
            <p>
              For the latest updates about reopening, booking tickets and what's
              happening at the Museum, sign up to our newsletter
            </p>
          </div>
          <!-- end inner -->
        </header>
        <!-- end page-header -->
        <section class="content-section" data-background="#fffbf7">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="section-title text-center">
                  <figure>
                    <img src="images/title-shape.png" alt="Image" />
                  </figure>
                  <h2>
                    Help us to respond to <br />
                    you more quickly
                  </h2>
                </div>
                <!-- end section-title -->
              </div>
              <!-- end col-12 -->
              <div class="col-lg-5">
                <div class="contact-box">
                  <h6>Main Contact Number</h6>
                  <p>020 3461 4444 (Monday to Friday, 9am to 5pm)</p>
                  <p>
                    Please use this number if you know the name of the person or
                    department you would like to contact. Or you can fax 020
                    3461 4771.
                  </p>
                </div>
                <!-- end contact-box -->
                <div class="contact-box">
                  <h6>General enquiries</h6>
                  <p>
                    <a href="#">enquiries@wandau.co.uk</a> 020 3461 4878 (Monday
                    to Friday: 10:00 - 17:00).
                  </p>
                </div>
                <!-- end contact-box -->
                <div class="contact-box">
                  <h6>Media enquiries</h6>
                  <p>
                    <a href="#">sponsor@wandau.co.uk</a> The person or
                    department you would like to contact
                  </p>
                </div>
                <!-- end contact-box -->
              </div>
              <!-- end col-5 -->
              <div class="col-lg-5">
                <div class="contact-form">
                  <div class="mb-3">
                    <input type="text" placeholder="Complete Name" />
                  </div>
                  <!-- end mb-3 -->
                  <div class="mb-3">
                    <input type="text" placeholder="E-mail Address" />
                  </div>
                  <!-- end mb-3 -->
                  <div class="mb-3">
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <!-- end mb-3 -->
                  <div class="mb-3">
                    <textarea placeholder="Your Message"></textarea>
                  </div>
                  <!-- end mb-3 -->
                  <div class="mb-3">
                    <input type="submit" value="Send Us" />
                  </div>
                  <!-- end mb-3 -->
                </div>
                <!-- end contact-form -->
              </div>
              <!-- end col-5 -->
            </div>
            <!-- end row -->
          </div>
          <!-- end container -->
        </section>
        <!-- end content-section -->
        <div class="google-maps">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10202.81803653302!2d30.552083977692742!3d50.4247130103151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf73cbd2db91%3A0x8141e376ee29dd50!2sZvirynetske%20Cemetery!5e0!3m2!1str!2str!4v1614660000205!5m2!1str!2str"
          ></iframe>
        </div>
        <!-- end google-maps -->
       
</div>
 @end section