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
                    <p id="sub_message" class='text-danger'></p>

                    <form style="display:contents" id="subscribe" action="{{ route('subscribe.add_new_subscription_list') }}" method="post">
                    <div class="inner">
                        @csrf
                        <input
                          value="{{ old('email') }}"
                          type="email"
                          placeholder="Enter your e-mail address",
                          name="email"
                          required
                        />
                        <input type="submit" value="SIGN UP" />
                      </form>
                    </div>
                    <!-- end inner -->
                    <small
                      >Will be used in accordance with our
                      <a target="_blank" href="{{ route('terms.subscriber_privacy') }}">Privacy Policy</a></small
                    >
                  </div>
                  <!-- end form -->
                  <figure
                    class="newsletter-image"
                    data-scroll
                    data-scroll-speed="0.7"
                  >
                    <img src="{{ asset ('images/newsletter-image.png') }}" alt="Image" />
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