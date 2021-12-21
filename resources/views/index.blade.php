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
        <div class="swiper-slide" data-background="images/stone.jpeg">
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
  @include("index.activitiy")
<!-- end content-section -->
  @include("index.upcoming_event")     
  @include("index.shalas")
  @include("index.parampara")
  @include("index.exclusive_view")
  @include("index.recent_news")
@endsection