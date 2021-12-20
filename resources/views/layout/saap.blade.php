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
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
        >
        </canvas>
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
          @include("inc.aside")
          @include("inc.navigation")
          @yield("content")
        <!-- end content-section -->
        @include("inc.subscription")
        @include("inc.footer")
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
        $("#subscribe").submit( function (event) {
            event.preventDefault();
            $("#sub_message").removeAttr('class').attr('class','text-warning').empty().html("Please wait...")
            $.ajax({
              type : "POST",
              url: $(this).attr("action"),
              data : $(this).serializeArray(),
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success : function (response) {
                if (response.success === true) {
                  $("#sub_message").attr("class","text-primary");
                } else {
                  $("#sub_message").attr("class",'text-danger');
                }
                $("#sub_message").fadeIn("fast", function() {
                    $(this).html(response.message);
                })
              }
            })
        })
    </script>
  </body>
</html>
