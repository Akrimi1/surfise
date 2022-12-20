@extends('layouts.appFront')
@section('content')
</div>
<section class="media_main">
            <div class="container">
              <div class="row media_top">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <img
                    src="{{ asset('/images/fit_media_logo.jpg') }}"
                    alt=""
                    class="img-responsive"
                  />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <h3>What we do</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consect etur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore. sed do tempor
                    incididunt ut labore. consect etur adipisicing elit, sed do
                    eiusmod.
                  </p>
                  <p>
                    <a href="./media#"
                      >Send us a Message</a
                    >
                    <a href="./media#"
                      >Advertise with us</a
                    >
                    <a href="./media#"
                      >Email</a
                    >
                  </p>
                </div>
              </div>
              <div class="row media_slide">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <h3>
                    FitMedia - Advertising and Promoting the best in Health
                    &amp; Fitness.
                  </h3>
                  <ul class="rslides" id="mediaSlide">
                    <li>
                      <img src="{{ asset('/images/media_slide.jpg') }}" alt="" />
                    </li>
                    <li>
                      <img src="{{ asset('/images/media_slide.jpg') }}" alt="" />
                    </li>
                    <li>
                      <img src="{{ asset('/images/media_slide.jpg') }}" alt="" />
                    </li>
                    <li>
                      <img src="{{ asset('/images/media_slide.jpg') }}" alt="" />
                    </li>
                    <li>
                      <img src="{{ asset('/images/media_slide.jpg') }}" alt="" />
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
      </header>
    </section>

    <main>
      <div class="region region-maincontent">
        <section class="mid_blogs">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                <!-- Changed -->
                <div class="live">
                  <h2>Live Stream</h2>
                  <img
                    src="{{ asset('/images/live_stream.jpg') }}"
                    alt=""
                    class="img-responsive"
                  />
                </div>
                <div class="audio">
                  <h3>Audio Podcast</h3>
                  <img src="{{ asset('/images/audio.jpg') }}" alt="" class="img-responsive" />
                </div>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 media_gal">
                <!-- Changed -->
                <h2>Image Gallery</h2>
                <div class="home_gal slick-initialized slick-slider">
                  <button
                    class="slick-prev slick-arrow"
                    aria-label="Previous"
                    type="button"
                    style="display: inline-block"
                  >
                    Previous
                  </button>
                  <div class="slick-list draggable">
                    <div
                      class="slick-track"
                      style="
                        opacity: 1;
                        width: 3750px;
                        transform: translate3d(-750px, 0px, 0px);
                      "
                    >
                      <div
                        class="slick-slide slick-cloned"
                        data-slick-index="-1"
                        aria-hidden="true"
                        tabindex="-1"
                        style="width: 750px"
                      >
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_1.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_1.jpg') }}" alt=""
                        /></a>
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_4.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_4.jpg') }}" alt=""
                        /></a>
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_2.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_2.jpg') }}" alt=""
                        /></a>
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_3.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_3.jpg') }}" alt=""
                        /></a>
                      </div>
                      <div
                        class="slick-slide slick-current slick-active"
                        data-slick-index="0"
                        aria-hidden="false"
                        tabindex="0"
                        style="width: 750px"
                      >
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_1.jpg') }}"
                          tabindex="0"
                          ><img src="{{ asset('/images/gal_1.jpg') }}" alt=""
                        /></a>
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_4.jpg') }}"
                          tabindex="0"
                          ><img src="{{ asset('/images/gal_4.jpg') }}" alt=""
                        /></a>
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_2.jpg') }}"
                          tabindex="0"
                          ><img src="{{ asset('/images/gal_2.jpg') }}" alt=""
                        /></a>
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_3.jpg') }}"
                          tabindex="0"
                          ><img src="{{ asset('/images/gal_3.jpg') }}" alt=""
                        /></a>
                      </div>
                      <div
                        class="slick-slide"
                        data-slick-index="1"
                        aria-hidden="true"
                        tabindex="-1"
                        style="width: 750px"
                      >
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_1.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_1.jpg') }}" alt=""
                        /></a>
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_4.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_4.jpg') }}" alt=""
                        /></a>
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_2.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_2.jpg') }}" alt=""
                        /></a>
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_3.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_3.jpg') }}" alt=""
                        /></a>
                      </div>
                      <div
                        class="slick-slide slick-cloned"
                        data-slick-index="2"
                        aria-hidden="true"
                        tabindex="-1"
                        style="width: 750px"
                      >
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_1.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_1.jpg') }}" alt=""
                        /></a>
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_4.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_4.jpg') }}" alt=""
                        /></a>
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_2.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_2.jpg') }}" alt=""
                        /></a>
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_3.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_3.jpg') }}" alt=""
                        /></a>
                      </div>
                      <div
                        class="slick-slide slick-cloned"
                        data-slick-index="3"
                        aria-hidden="true"
                        tabindex="-1"
                        style="width: 750px"
                      >
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_1.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_1.jpg') }}" alt=""
                        /></a>
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_4.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_4.jpg') }}" alt=""
                        /></a>
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_2.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_2.jpg') }}" alt=""
                        /></a>
                        <a
                          data-fancybox="gallery"
                          href="{{ asset('/images/gal_3.jpg') }}"
                          tabindex="-1"
                          ><img src="{{ asset('/images/gal_3.jpg') }}" alt=""
                        /></a>
                      </div>
                    </div>
                  </div>

                  <button
                    class="slick-next slick-arrow"
                    aria-label="Next"
                    type="button"
                    style=""
                  >
                    Next
                  </button>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="news_feed">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>News / Events Board</h2>
              </div>
            </div>
            <div class="row news_block">
              <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                <!-- Changed -->
                <img
                  src="{{ asset('/images/news_img.png') }}"
                  alt=""
                  class="img-responsive"
                />
              </div>
              <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                <!-- Changed -->
                <h3>
                  Title of the post will show here
                  <span>Posted: &nbsp;&nbsp;12 Nov 2017</span>
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                  irure dolor in reprehenderit in voluptate velit esse cillum
                  dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                  cupidatat non proident.
                </p>
                <p>
                  <a href="./media#"
                    >+P / I</a
                  >
                  <a href="./media#"
                    >More Info</a
                  >
                  <a href="./media#"
                    >Visit Website</a
                  >
                </p>
              </div>
            </div>
            <div class="row news_block">
              <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                <!-- Changed -->
                <img
                  src="{{ asset('/images/news_img.png') }}"
                  alt=""
                  class="img-responsive"
                />
              </div>
              <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                <!-- Changed -->
                <h3>
                  Title of the post will show here
                  <span>Posted: &nbsp;&nbsp;12 Nov 2017</span>
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                  irure dolor in reprehenderit in voluptate velit esse cillum
                  dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                  cupidatat non proident.
                </p>
                <p>
                  <a href="./media#"
                    >+P / I</a
                  >
                  <a href="./media#"
                    >More Info</a
                  >
                  <a href="./media#"
                    >Visit Website</a
                  >
                </p>
              </div>
            </div>
            <div class="row news_block">
              <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                <img
                  src="{{ asset('/images/news_img.png') }}"
                  alt=""
                  class="img-responsive"
                />
              </div>
              <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                <h3>
                  Title of the post will show here
                  <span>Posted: &nbsp;&nbsp;12 Nov 2017</span>
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                  irure dolor in reprehenderit in voluptate velit esse cillum
                  dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                  cupidatat non proident.
                </p>
                <p>
                  <a href="./media#"
                    >+P / I</a
                  >
                  <a href="./media#"
                    >More Info</a
                  >
                  <a href="./media#"
                    >Visit Website</a
                  >
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="ad_space">
          <div class="container">
            <div class="row">
              <div
                class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12"
              >
                <img src="{{ asset('/images/ad.jpg') }}" alt="" class="img-responsive" />
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
    @endsection