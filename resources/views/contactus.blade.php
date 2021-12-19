@extends("layout.saap")

@section("title")


          <!-- end container -->



@endsection
@section("content")

    <!-- end page-transition -->
    <div class="smooth-scroll">
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
                  <h6>Head Office</h6> 
                  <p><i class='fas fa-map-marker text-danger'></i> Chatara dham, Sunsari </p>
                     <p> <i class="fas fa-envelope"> </i>  adhyatmabigyan@gmail.com</p>
                     
                     <p> <i class="fas fa-phone"> </i>  9846779788 </p>
                  </p>
                  
                </div>
                <!-- end contact-box -->
                <div class="contact-box">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Kathmandu</h6>
                                <p>
                                    <a href="#">enquiries@wandau.co.uk</a> 020 3461 4878 (Monday
                                    to Friday: 10:00 - 17:00).
                                </p>
                        </div>
                        <div class="col-md-6">
                            <h6>Pokhara</h6>
                                <p>
                                    <a href="#">enquiries@wandau.co.uk</a> 020 3461 4878 (Monday
                                    to Friday: 10:00 - 17:00).
                                </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h6>Chitwan</h6>
                                <p>
                                    <a href="#">enquiries@wandau.co.uk</a> 020 3461 4878 (Monday
                                    to Friday: 10:00 - 17:00).
                                </p>
                        </div>
                        <div class="col-md-6">
                            <h6>Surkhet</h6>
                                <p>
                                    <a href="#">enquiries@wandau.co.uk</a> 020 3461 4878 (Monday
                                    to Friday: 10:00 - 17:00).
                                </p>
                        </div>
                    </div>



                </div>

                <div class="contact-box">
                  <h6>Canada</h6>
                  <p>
                    <a href="#">enquiries@wandau.co.uk</a> 020 3461 4878 (Monday
                    to Friday: 10:00 - 17:00).
                  </p>
                </div>

                <div class="contact-box">
                  <h6>U.K</h6>
                  <p>
                    <a href="#">enquiries@wandau.co.uk</a> 020 3461 4878 (Monday
                    to Friday: 10:00 - 17:00).
                  </p>
                </div>

                <div class="contact-box">
                  <h6>Australia</h6>
                  <p>
                    <a href="#">enquiries@wandau.co.uk</a> 020 3461 4878 (Monday
                    to Friday: 10:00 - 17:00).
                  </p>
                </div>
                <!-- end contact-box -->
<<<<<<< HEAD
            
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
=======
                </div>
                <!-- end col-5 -->
                <div class="col-lg-5">
                    <div class="contact-form">
                        <form action="" style="display:contents" method="post">
                            <div class="mb-3">
                                <input type="text" name="name" class="hover_effect" require placeholder="Complete Name" />
                            </div>
                        <!-- end mb-3 -->
                            <div class="mb-3">
                                <input type="text" name="email" required placeholder="E-mail Address" />
                            </div>
                            <!-- end mb-3 -->
                            <div class="mb-3">
                                <input type="text" name="phone" required placeholder="Phone Number" />
                            </div>
                            <!-- end mb-3 -->
                                <div class="mb-3">
                                    <textarea placeholder="Your Message" require></textarea>
                                </div>
                            <!-- end mb-3 -->
                            <div class="mb-3">
                                <input type="submit" value="Send Us" />
                            </div>
                            <!-- end mb-3 -->
                        </form>
                    </div>
>>>>>>> 8141f53def5ffa36199d173677e821049cfbea3e
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