@extends("layout.saap")

@section("title")
  Home
@endsection

@section("content")
 <!-- end navbar -->
 <header class="slider">
    <div class="swiper-container slider-images">
      <div class="swiper-wrapper">
        <div class="swiper-slide" data-background="images/slider-2.jpg">
          <div
            class="mobile-slide"
            data-background="images/slide-02-mobile.jpg"
          ></div>
        </div>
        <div class="swiper-slide" data-background="images/slider-2.jpg">
          <div
            class="mobile-slide"
            data-background="images/slide-02-mobile.jpg"
          ></div>
        </div>
        <div class="swiper-slide" data-background="images/slider-2.jpg">
          <div
            class="mobile-slide"
            data-background="images/slide-02-mobile.jpg"
          ></div>
        </div>
      </div>
      <!-- end swiper-wrapper -->
      <div class="container-fluid slider-nav">
        <div class="swiper-pagination"></div>
        <!-- end swiper-pagination -->
        <div class="swiper-fraction"></div>
        <!-- end swiper-fraction -->
        <div class="button-prev"><i class="far fa-chevron-down"></i></div>
        <!-- end swiper-button-prev -->
        <div class="button-next"><i class="far fa-chevron-up"></i></div>
        <!-- end swiper-button-next -->
      </div>
      <!-- end slider-nav -->
    </div>
  <!-- end slider-images -->
  <div class="swiper-container slider-texts">
    <svg width="580" height="400" class="svg-morph">
      <path
        id="svg_morph"
        d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z"
      />
    </svg>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="container-fluid">
          <h2>
            Mahayogi Siddhababa <br />
            Spiritual Academy
          </h2>
          <p>
            A not for profit organization providing<br />
            seekers with authentic meditation based on the yogic
            tradition and with<br />
            the guidance of a bonafide<br />
            spiritual Guru (Jagatguru Mahayogi Siddhababa).
          </p>
        </div>
        <!-- end container -->
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <div class="container-fluid">
          <h2>
            Mahayogi Siddhababa <br />
            Spiritual Academy
          </h2>
          <p>
            A not for profit organization providing<br />
            seekers with authentic meditation based on the yogic
            tradition and with<br />
            the guidance of a bonafide<br />
            spiritual Guru (Jagatguru Mahayogi Siddhababa).
          </p>
        </div>
        <!-- end container -->
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <div class="container-fluid">
          <h2>
            Mahayogi Siddhababa <br />
            Spiritual Academy
          </h2>
          <p>
            A not for profit organization providing<br />
            seekers with authentic meditation based on the yogic
            tradition and with<br />
            the guidance of a bonafide<br />
            spiritual Guru (Jagatguru Mahayogi Siddhababa).
          </p>
        </div>
        <!-- end container -->
      </div>
      <!-- end swiper-slide -->
    </div>
    <!-- end swiper-wrapper -->
  </div>
  <!-- end slider-texts -->
  <div class="play-now">
    <a
      href="videos/video.mp4"
      data-fancybox
      data-width="640"
      data-height="360"
      class="play-btn"
    ></a>
    <svg
      version="1.1"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      x="0px"
      y="0px"
      width="300px"
      height="300px"
      viewBox="0 0 300 300"
      enable-background="new 0 0 300 300"
      xml:space="preserve"
    >
      <defs>
        <path
          id="circlePath"
          d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "
        />
      </defs>
      <circle cx="150" cy="100" r="75" fill="none" />
      <g>
        <use xlink:href="#circlePath" fill="none" />
        <text>
          <textPath xlink:href="#circlePath">
            PLAY NOW - PLAY NOW - PLAY NOW -
          </textPath>
        </text>
      </g>
    </svg>
  </div>
  <!-- end play-now -->
</header>
<!-- end slider -->
<section class="content-section" data-background="#fffbf7">
  <div class="container">
    <div class="row align-items-center">
      <!-- Six Products (Best) Alternate Product Atleast -->
      <div class="row justify-content-center">
        <div class="section-title text-center">
          <h2>
            Upgrade Your <br />
            Kundali
          </h2>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="exhibition-box" data-scroll data-scroll-speed="-1">
            <figure>
              <a href="exhibition-detail.html"
                ><img src="images/event01.jpg" alt="Image" class="img"
              /></a>
              <div class="info">
                <figure class="i">
                  <img src="images/icon-info.png" alt="Image" />
                </figure>
                <span>50% off exhibitions</span>
              </div>
              <!-- end info -->
            </figure>
            <div class="content-box">
              <h4>
                <a href="exhibition-detail.html"
                  >Artemisia Gentileschi talk with Maria</a
                >
              </h4>
              <p>15 August – 31 October 2020</p>
            </div>
            <!-- end content-box -->
          </div>
          <!-- end exhibition-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 col-md-6">
          <div class="exhibition-box" data-scroll data-scroll-speed="1">
            <figure>
              <a href="exhibition-detail.html"
                ><img src="images/event02.jpg" alt="Image" class="img"
              /></a>
              <div class="info">
                <figure class="i">
                  <img src="images/icon-info.png" alt="Image" />
                </figure>
                <span>50% off exhibitions</span>
              </div>
              <!-- end info -->
            </figure>
            <div class="content-box">
              <h4>
                <a href="exhibition-detail.html"
                  >Arctic culture and climate Exhibition</a
                >
              </h4>
              <p>22 Oct 2020 - 21 Feb 2021</p>
            </div>
            <!-- end content-box -->
          </div>
          <!-- end exhibition-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 col-md-6">
          <div
            class="exhibition-box"
            data-scroll
            data-scroll-speed="-0.5"
          >
            <figure>
              <a href="exhibition-detail.html"
                ><img src="images/event03.jpg" alt="Image" class="img"
              /></a>
              <div class="info">
                <figure class="i">
                  <img src="images/icon-info.png" alt="Image" />
                </figure>
                <span>50% off exhibitions</span>
              </div>
              <!-- end info -->
            </figure>
            <div class="content-box">
              <h4>
                <a href="exhibition-detail.html"
                  >Thomas Becket murder and the making of a saint</a
                >
              </h4>
              <p>22 Apr 2021 - 22 Aug 2021</p>
            </div>
            <!-- end content-box -->
          </div>
          <!-- end exhibition-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 col-md-6">
          <div class="exhibition-box" data-scroll data-scroll-speed="-1">
            <figure>
              <a href="exhibition-detail.html"
                ><img src="images/event04.jpg" alt="Image" class="img"
              /></a>
              <div class="info">
                <figure class="i">
                  <img src="images/icon-info.png" alt="Image" />
                </figure>
                <span>50% off exhibitions</span>
              </div>
              <!-- end info -->
            </figure>
            <div class="content-box">
              <h4>
                <a href="exhibition-detail.html"
                  >Artemisia Gentileschi talk with Maria</a
                >
              </h4>
              <p>15 August – 31 October 2020</p>
            </div>
            <!-- end content-box -->
          </div>
          <!-- end exhibition-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 col-md-6">
          <div class="exhibition-box" data-scroll data-scroll-speed="1">
            <figure>
              <a href="exhibition-detail.html"
                ><img src="images/event05.jpg" alt="Image" class="img"
              /></a>
              <div class="info">
                <figure class="i">
                  <img src="images/icon-info.png" alt="Image" />
                </figure>
                <span>50% off exhibitions</span>
              </div>
              <!-- end info -->
            </figure>
            <div class="content-box">
              <h4>
                <a href="exhibition-detail.html"
                  >Arctic culture and climate Exhibition</a
                >
              </h4>
              <p>22 Oct 2020 - 21 Feb 2021</p>
            </div>
            <!-- end content-box -->
          </div>
          <!-- end exhibition-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 col-md-6">
          <div
            class="exhibition-box"
            data-scroll
            data-scroll-speed="-0.5"
          >
            <figure>
              <a href="exhibition-detail.html"
                ><img src="images/event06.jpg" alt="Image" class="img"
              /></a>
              <div class="info">
                <figure class="i">
                  <img src="images/icon-info.png" alt="Image" />
                </figure>
                <span>50% off exhibitions</span>
              </div>
              <!-- end info -->
            </figure>
            <div class="content-box">
              <h4>
                <a href="exhibition-detail.html"
                  >Thomas Becket murder and the making of a saint</a
                >
              </h4>
              <p>22 Apr 2021 - 22 Aug 2021</p>
            </div>
            <!-- end content-box -->
          </div>
          <!-- end exhibition-box -->
        </div>
        <!-- end col-4 -->
      <!-- /Six Products (Best) Alternate Product Atleast -->
    
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end content-section -->
        <section class="content-section">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-9">
                <div class="section-title">
                  <figure>
                    <img src="images/title-shape.png" alt="Image" />
                  </figure>
                  <h6>DON’T MISS THE OPPORTUNITY</h6>
                  <h2>Upcoming Events</h2>
                </div>
                <!-- end section-title -->
              </div>
              <!-- end col-9 -->
              <div class="col-lg-3">
                <a href="#" class="circle-button"
                  >BOOK AN <br />
                  EVENT</a
                >
              </div>
              <!-- end col-3 -->
            </div>
            <!-- end row -->
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6">
                <div class="exhibition-box" data-scroll data-scroll-speed="-1">
                  <figure>
                    <a href="#"
                      ><img src="images/event01.jpg" alt="Image" class="img"
                    /></a>
                    <div class="info">
                      <figure class="i">
                        <img src="images/icon-info.png" alt="Image" />
                      </figure>
                      <span>50% off exhibitions</span>
                    </div>
                    <!-- end info -->
                  </figure>
                  <div class="content-box">
                    <h4>
                      <a href="#">Artemisia Gentileschi talk with Maria</a>
                    </h4>
                    <p>15 August – 31 October 2020</p>
                  </div>
                  <!-- end content-box -->
                </div>
                <!-- end exhibition-box -->
              </div>
              <!-- end col-4 -->
              <div class="col-lg-4 col-md-6">
                <div class="exhibition-box" data-scroll data-scroll-speed="1">
                  <figure>
                    <a href="#"
                      ><img src="images/event02.jpg" alt="Image" class="img"
                    /></a>
                    <div class="info">
                      <figure class="i">
                        <img src="images/icon-info.png" alt="Image" />
                      </figure>
                      <span>50% off exhibitions</span>
                    </div>
                    <!-- end info -->
                  </figure>
                  <div class="content-box">
                    <h4>
                      <a href="#">Arctic culture and climate Exhibition</a>
                    </h4>
                    <p>22 Oct 2020 - 21 Feb 2021</p>
                  </div>
                  <!-- end content-box -->
                </div>
                <!-- end exhibition-box -->
              </div>
              <!-- end col-4 -->
              <div class="col-lg-4 col-md-6">
                <div
                  class="exhibition-box"
                  data-scroll
                  data-scroll-speed="-0.5"
                >
                  <figure>
                    <a href="#"
                      ><img src="images/event03.jpg" alt="Image" class="img"
                    /></a>
                    <div class="info">
                      <figure class="i">
                        <img src="images/icon-info.png" alt="Image" />
                      </figure>
                      <span>50% off exhibitions</span>
                    </div>
                    <!-- end info -->
                  </figure>
                  <div class="content-box">
                    <h4>
                      <a href="#"
                        >Thomas Becket murder and the making of a saint</a
                      >
                    </h4>
                    <p>22 Apr 2021 - 22 Aug 2021</p>
                  </div>
                  <!-- end content-box -->
                </div>
                <!-- end exhibition-box -->
              </div>
              <!-- end col-4 -->
              <div class="col-12 text-center">
                <a href="#" class="custom-button">VIEW ALL UPCOMING EVENTS</a>
              </div>
              <!-- end col-12 -->
            </div>
            <!-- end row -->
          </div>
          <!-- end container -->
        </section>
        <!-- end content-section -->
        <section
          class="content-section no-bottom-spacing bottom-white"
          data-background="#fffbf7"
        >
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="section-title text-center">
                  <figure>
                    <img src="images/title-shape.png" alt="Image" />
                  </figure>
                  <h2>
                    Our Five <br />
                    Shala's
                  </h2>
                </div>
                <!-- end section-title -->
              </div>
              <!-- end col-12 -->
              <div class="col-lg-4 col-md-6">
                <div class="text-content" data-scroll data-scroll-speed="-1">
                  <h6>Gaushala</h6>
                  <p>
                    In the 1980s, “the UK’s national museums faced political
                    pressure from the <strong>Conservative</strong> government
                    to charge for admission, to make them less dependent on
                    government funding".
                  </p>
                </div>
                <!-- end text-content -->
              </div>
              <!-- end col-4 -->
              <div class="col-lg-4 col-md-6">
                <div class="text-content" data-scroll data-scroll-speed="0.5">
                  <h6>Pathshala</h6>
                  <p>
                    In 1997, the new Labour government made a commitment to
                    reinstate free entry for <strong>national</strong> museums
                    in order to have a more diverse range of visitors.
                    “Following a campaign led by the museums themselves,
                  </p>
                </div>
                <!-- end text-content -->
              </div>
              <!-- end col-4 -->
              <div class="col-lg-4 col-md-6">
                <div class="text-content" data-scroll data-scroll-speed="1">
                  <h6>Dharma Shala</h6>
                  <p>
                    The national museums which dropped charges all saw
                    <strong>substantial</strong> increases to their visitor
                    numbers, an average of 70 percent. In the first year after
                    free admission was introduced visitor figures.
                  </p>
                </div>
                <!-- end text-content -->
              </div>
              <!-- end col-4 -->
            </div>
            <!-- end row -->
          </div>
          <!-- end container -->
          <div class="clearfix spacing-100"></div>
          <div class="horizontal-scroll">
            <div
              class="scroll-inner"
              data-scroll
              data-scroll-direction="horizontal"
              data-scroll-speed="5"
            >
              <div class="scroll-wrapper">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-3">
                      <figure
                        class="image-box"
                        data-scroll
                        data-scroll-speed="0"
                      >
                        <img src="images/image01.jpg" alt="Image" />
                      </figure>
                    </div>
                    <!-- end col-3 -->
                    <div class="col-md-4 offset-md-1">
                      <figure
                        class="image-box"
                        data-scroll
                        data-scroll-speed="0"
                      >
                        <img src="images/image02.jpg" alt="Image" />
                      </figure>
                    </div>
                    <!-- end col-3 -->
                    <div class="col-md-2 offset-md-1">
                      <figure
                        class="image-box"
                        data-scroll
                        data-scroll-speed="0"
                      >
                        <img src="images/image03.jpg" alt="Image" />
                      </figure>
                    </div>
                    <!-- end col-3 -->
                  </div>
                  <!-- end row -->
                </div>
                <!-- end container-fluid -->
              </div>
              <!-- end scroll-wrapper -->
              <div class="scroll-wrapper">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-3">
                      <figure
                        class="image-box"
                        data-scroll
                        data-scroll-speed="0"
                      >
                        <img src="images/image01.jpg" alt="Image" />
                      </figure>
                    </div>
                    <!-- end col-3 -->
                    <div class="col-md-4 offset-md-1">
                      <figure
                        class="image-box"
                        data-scroll
                        data-scroll-speed="0"
                      >
                        <img src="images/image02.jpg" alt="Image" />
                      </figure>
                    </div>
                    <!-- end col-3 -->
                    <div class="col-md-2 offset-md-1">
                      <figure
                        class="image-box"
                        data-scroll
                        data-scroll-speed="0"
                      >
                        <img src="images/image03.jpg" alt="Image" />
                      </figure>
                    </div>
                    <!-- end col-3 -->
                  </div>
                  <!-- end row -->
                </div>
                <!-- container-fluid -->
              </div>
              <!-- end scroll-wrapper -->
            </div>
            <!-- end scroll-inner -->
          </div>
          <!-- end horizontal-scroll -->
        </section>
        <section class="content-section">
          <div class="container">
            <div class="row g-0 align-items-center">
              <div class="col-lg-6">
                <div class="art-slider">
                  <div class="titles">
                    <h6>Lineages</h6>
                    <h2>
                      Guru Parampara <br />
                      
                    </h2>
                  </div>
                  <!-- end titles -->
                  <div class="swiper-container art-slider-content">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <span>01</span>
                        <h3>
                          Venus <br />
                          de Milo
                        </h3>
                      </div>
                      <!-- end swiper-slide -->
                      <div class="swiper-slide">
                        <span>02</span>
                        <h3>
                          Les Demoiselles <br />
                          d'Avignon
                        </h3>
                      </div>
                      <!-- end swiper-slide -->
                      <div class="swiper-slide">
                        <span>03</span>
                        <h3>
                          Mona <br />
                          Lisa
                        </h3>
                      </div>
                      <!-- end swiper-slide -->
                      <div class="swiper-slide">
                        <span>04</span>
                        <h3>
                          L'Arlesienne: <br />
                          Madame Ginoux
                        </h3>
                      </div>
                      <!-- end swiper-slide -->
                      <div class="swiper-slide">
                        <span>05</span>
                        <h3>
                          Cuckoo <br />
                          Clocks
                        </h3>
                      </div>
                      <!-- end swiper-slide -->
                    </div>
                    <!-- end swiper-wrapper -->
                  </div>
                  <!-- end art-slider-content -->
                </div>
                <!-- end art-slider -->
              </div>
              <!-- end col-6 -->
              <div class="col-lg-6">
                <div class="art-slider" data-scroll data-scroll-speed="1">
                  <div class="swiper-container art-slider-images">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="images/art-slide01.jpg" alt="Image" />
                      </div>
                      <!-- end swiper-slide -->
                      <div class="swiper-slide">
                        <img src="images/art-slide02.jpg" alt="Image" />
                      </div>
                      <!-- end swiper-slide -->
                      <div class="swiper-slide">
                        <img src="images/art-slide03.jpg" alt="Image" />
                      </div>
                      <!-- end swiper-slide -->
                      <div class="swiper-slide">
                        <img src="images/art-slide04.jpg" alt="Image" />
                      </div>
                      <!-- end swiper-slide -->
                      <div class="swiper-slide">
                        <img src="images/art-slide05.jpg" alt="Image" />
                      </div>
                      <!-- end swiper-slide -->
                    </div>
                    <!-- end swiper-wrapper -->
                  </div>
                  <!-- end art-slider-images -->
                </div>
                <!-- end art-slider -->
              </div>
              <!-- end col-6 -->
            </div>
            <!-- end row -->
          </div>
          <!-- end container -->
        </section>
        <!-- end content-section -->
        <section class="content-section">
          <div class="video-bg">
            <video
              src="videos/drone.mp4"
              loop
              autoplay
              playsinline
              muted
            ></video>
          </div>
          <!-- end video-bg -->
          <div class="container">
            <div class="cta-box" data-scroll data-scroll-speed="-1">
              <h6>Exclusive View of</h6>
              <h2>
                Chatara<br />
                Dham
              </h2>
              <br /><br /><br />
              <p style="margin-top:60px">&nbsp;</p><p></p><p></p>
              <!-- <a href="#" class="custom-button">BECOME A MEMBER</a> -->
            </div>
            <!-- end cta-box -->
          </div>
          <!-- end container -->
        </section>
        <!-- end content-section -->
        <section class="content-section">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="section-title text-center">
                  <figure>
                    <img src="images/title-shape.png" alt="Image" />
                  </figure>
                  <h6>Get Latest Updates and News</h6>
                  <h2>Recent News</h2>
                </div>
                <!-- end section-title -->
              </div>
              <!-- end col-12 -->
            </div>
            <!-- end row -->
          </div>
          <!-- end container -->
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="recent-news">
                  <div class="content-box">
                    <small>Dec 26, 2020</small>
                    <h3>The Ultimate Guide To Knots Practice Kit</h3>
                    <p>
                      Learn to tie over 250 knots with step-by-step
                      instructions. Supplied with 4...
                    </p>
                    <a href="#" class="custom-link">Continue reading</a>
                  </div>
                  <!-- end content-box -->
                  <figure data-scroll data-scroll-speed="-1">
                    <img src="images/recent-news01.jpg" alt="Image" />
                  </figure>
                </div>
                <!-- end recent-news -->
              </div>
              <!-- end col-8 -->
              <div class="col-12">
                <div class="recent-news">
                  <div class="content-box">
                    <small>Dec 26, 2020</small>
                    <h3>The Ultimate Guide To Knots Practice Kit</h3>
                    <p>
                      Learn to tie over 250 knots with step-by-step
                      instructions. Supplied with 4...
                    </p>
                    <a href="#" class="custom-link">Continue reading</a>
                  </div>
                  <!-- end content-box -->
                  <figure data-scroll data-scroll-speed="1">
                    <img src="images/recent-news02.jpg" alt="Image" />
                  </figure>
                </div>
                <!-- end recent-news -->
              </div>
              <!-- end col-9 -->
              <div class="col-12 text-center">
                <a href="news.html" class="circle-button"
                  >SEE ALL<br />
                  NEWS</a
                >
              </div>
              <!-- end col-12 -->
            </div>
            <!-- end row -->
          </div>
          <!-- end container -->
        </section>
@endsection