@extends("layout.saap")

@section("title")
    ::contact Us
@endsection
@section("content")

 <!-- end page-header -->
    <section class="content-section" data-background="#fffbf7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                <div class="section-title text-center">
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
        <!-- <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10202.81803653302!2d30.552083977692742!3d50.4247130103151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf73cbd2db91%3A0x8141e376ee29dd50!2sZvirynetske%20Cemetery!5e0!3m2!1str!2str!4v1614660000205!5m2!1str!2str"
        >
    </iframe> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1780.218992951057!2d87.15213902690712!3d26.826018285707637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef3fba96a79c53%3A0xf5753932af354d14!2sJagadguru%20ramanandacharya%20Tarak%20bhramha%20peeth!5e0!3m2!1sen!2snp!4v1639916309904!5m2!1sen!2snp" allowfullscreen="" loading="lazy">
    </iframe>
    </div>

@endsection
