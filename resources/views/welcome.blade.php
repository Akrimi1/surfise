<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">
   <head>
      <meta charset="utf-8" />
      <meta name="MobileOptimized" content="width" />
      <meta name="HandheldFriendly" content="true" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="shortcut icon" href="{{ asset('/images/favicon_0.png') }}" type="image/png" />
      <link rel="alternate" type="application/rss+xml" title="" href="./rss.xml" />
      <title>Welcome to Surfise | Surfise</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}" />
      <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Noto+Serif:400,700" rel="stylesheet">
      <!-- Latest compiled and minified JavaScript -->
      <link href="{{ asset('/css/style.css')}}" rel="stylesheet" />
      <link rel="stylesheet" href="{{ asset('/css/ajax-progress.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/align.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/autocomplete-loading.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/fieldgroup.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/container-inline.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/clearfix.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/details.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/hidden.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/item-list.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/js.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/nowrap.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/position-container.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/progress.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/reset-appearance.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/resize.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/sticky-header.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/system-status-counter.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/system-status-report-counters.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/system-status-report-general-info.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/tabledrag.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/tablesort.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/tree-child.module.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/animated-slider.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/slick.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/slick-theme.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/responsiveslides.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/simplegallery.demo1.min.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/tabs.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/tinyscrollbar.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/toggles.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/toggles-all.css')}}" />
      <link rel="stylesheet" href="{{ asset('/css/toggles-modern.css')}}" />
      <!--[if lte IE 8]>
      <script src="/core/assets/vendor/html5shiv/html5shiv.min.js?v=3.7.3"></script>
      <![endif]-->
   </head>
   <body class="path-frontpage">
      <a href="#main-content" class="visually-hidden focusable skip-link">
      Skip to main content
      </a>
      <header class="home">
         <div class="region region-topheader">
            <!--Top header-->
            <section class="header_top">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 top_links">
                        <ul>
                           <li><a href="/">H2O</a></li>
                           <li><a href="{{ url('bmi') }}">BMI</a></li>
                           <li><a href="{{ url('rmr') }}">RMR</a></li>
                           <li><a href="{{ url('thr') }}">THR</a></li>
                           <li><a href="{{ url('/') }}">Register</a></li>
                        </ul>
                     </div>
                     <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 pull-right log_links">
                        <ul>
                           <li><a href="./user/reg">Signup it’s free!</a></li>
                           <li><a href="./user">Login</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </section>
            <!--Top header-->
         </div>
         <div class="region region-menuheader">
            <!--Main Menu-->
            <section class="header_bot">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1>Surfise</h1>
                        <p>We promote and advertise credible products, services and information in the field of <a href="#">health &amp; fitness</a>.</p>
                        <form name="form1" method="post" action="" class="clearfix">
                           <select>
                              <option>Select Zipcode</option>
                           </select>
                           <input type="text" placeholder="Search here....">
                        </form>
                        <nav>
                           <ul>
                              <li><a href="{{ url('blog') }}">Blog</a></li>
                              <li><a href="{{ url('clubs') }}">Clubs/Gyms</a></li>
                              <li><a href="{{ url('equipments') }}">Equipments</a></li>
                              <li><a href="{{ url('products') }}">Products</a></li>
                              <li><a href="{{ url('restaurants') }}">Restaurants</a></li>
                              <li><a href="{{ url('services') }}">Services</a></li>
                            
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </section>
            <!--Main Menu-->
         </div>
      </header>
      <section class="inner_top "  >
         <header>
         </header>
      </section>
      <main>
         <div class="region region-maincontent">
            <div id="block-surfise-content--2" class="block block-system block-system-main-block">
               <div class="views-element-container">
                  <div class="js-view-dom-id-0ed1ca7ba5459867bb8109e9123a24ab36d7ddc23ae3e7fa5732c7ff92134612">
                     No front page content has been created yet.
                     <a href="./rss.xml" class="feed-icon">
                     Subscribe to 
                     </a>
                  </div>
               </div>
            </div>
            <section class="home_top">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right our_mission">
                        <a href="/info" style="text-decoration:none;">
                           <h2>Our Mission</h2>
                        </a>
                        <p>To provide our users with the most accurate and credible  information online in the field of health & fitness. We do this by using our custom built algorithms to search for and grade  business’ and information along with a combination of users ratings and reviews. This helps our users make the best educated decisions when ever they are choosing products, services and information found throughout our website platform.</p>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 advertising">
                        <a href="/info" style="text-decoration:none;">
                           <h2>Advertising</h2>
                        </a>
                        <p>Our goal is to advertise and promote the best in health & fitness. This includes nutrition, training, wellness, products and all other health related information. When you add your business to our website platform you ensure your customers that you are a professional in the field. Not only do we host your business for free but we also have a free blog that comes with your page along with other tools to help you get the most exposure in your field of expertise. We have a variety of ways to get the word out about your business and some include video ads, web banners, magazine ads, or product/flyer handouts.</p>
                     </div>
                  </div>
               </div>
            </section>
            <div class="views-element-container block block-views block-views-blockhome-top-slider-block-1" id="block-views-block-home-top-slider-block-1">
               <div>
                  <div class="js-view-dom-id-343d916ac74e4934a94e40fca6300ece22ca236080fbd708d1f2436a10b4e525">
                     <section class="pop_prod_main">
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="pop_links">
                                    <div>
                                       <a href="{{ url('blog/post')}}">
                                       <img src="{{ asset('/images/car_link_4_4.jpg') }}" alt="">
                                       Top 10 Gyms In Chicago
                                       </a>
                                    </div>
                                    <div>
                                       <a href="{{ url('blog/post')}}">
                                       <img src="{{ asset('/images/car_link_4_2.jpg') }}" alt="">
                                       Top 10 Healthy Restaurants
                                       </a>
                                    </div>
                                    <div>
                                       <a href="{{ url('blog/post')}}">
                                       <img src="{{ asset('/images/car_link_5_0.jpg') }}" alt="">
                                       Top 10 Healthy Restaurants
                                       </a>
                                    </div>
                                    <div>
                                       <a href="{{ url('blog/post')}}">
                                       <img src="{{ asset('/images/car_link_4_0.jpg') }}" alt="">
                                       Top 10 Healthy Restaurants
                                       </a>
                                    </div>
                                    <div>
                                       <a href="{{ url('blog/post')}}">
                                       <img src="{{ asset('/images/car_link_3_0.jpg') }}" alt="">
                                       Fun Places To Workout
                                       </a>
                                    </div>
                                    <div>
                                       <a href="{{ url('blog/post')}}">
                                       <img src="{{ asset('/images/car_link_2_0.jpg') }}" alt="">
                                       Personal Trainers that will change
                                       </a>
                                    </div>
                                    <div>
                                       <a href="{{ url('blog/post')}}">
                                       <img src="{{ asset('/images/car_link_1_0.jpg') }}" alt="">
                                       Top 10 Gyms In Chicago
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
            <div class="views-element-container block block-views block-views-blockhome-top-slider-block-2" id="block-views-block-home-top-slider-block-2">
               <div>
                  <div class="js-view-dom-id-de955d6e39ffbc6584e9459e19626d9cbb96a37c663a5389ed9f64c8b60c7153">
                     <section class="pop_prod_main">
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <h2>Popular PRODUCTS</h2>
                                 <div class="pop_prod">
                                    <div>
                                       <img src="{{ asset('/images/pop_product_6.jpg') }}" alt="">
                                       <div class="content">
                                          <h5>CAP Barbell Cast Iron Hex</h5>
                                          <p>
                                          <p>sit amet, consectetur adiping elit, sed dosit amet, consecte tur adiping elit, sed do [Pair of 20kg]</p>
                                          </p>
                                          <p><a href="{{ url('products/product_details') }}">Read More</a></p>
                                       </div>
                                    </div>
                                    <div>
                                       <img src="{{ asset('/images/pop_product_4.jpg') }}" alt="">
                                       <div class="content">
                                          <h5>CAP Barbell Cast Iron Hex</h5>
                                          <p>
                                          <p>sit amet, consectetur adiping elit, sed dosit amet, consecte tur adiping elit, sed do [Pair of 20kg]</p>
                                          </p>
                                          <p><a href="{{ url('product_details') }}">Read More</a></p>
                                       </div>
                                    </div>
                                    <div>
                                       <img src="{{ asset('/images/pop_product_2.jpg') }}" alt="">
                                       <div class="content">
                                          <h5>CAP Barbell Cast Iron Hex</h5>
                                          <p>
                                          <p>sit amet, consectetur adiping elit, sed dosit amet, consecte tur adiping elit, sed do [Pair of 20kg]</p>
                                          </p>
                                          <p><a href="{{ url('product_details') }}">Read More</a></p>
                                       </div>
                                    </div>
                                    <div>
                                       <img src="{{ asset('/images/pop_product_0.jpg') }}" alt="">
                                       <div class="content">
                                          <h5>CAP Barbell Cast Iron Hex</h5>
                                          <p>
                                          <p>sit amet, consectetur adiping elit, sed dosit amet, consecte tur adiping elit, sed do [Pair of 20kg]</p>
                                          </p>
                                          <p><a href="{{ url('product_details') }}">Read More</a></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
            <div class="views-element-container block block-views block-views-blockhome-top-slider-block-3" id="block-views-block-home-top-slider-block-3">
               <div>
                  <div class="js-view-dom-id-f770a641edc8a3ad77784f886b566e221c5dc645c1c1fed496a67bc7934cbfeb">
                     <section class="our_gal">
                        <a href="/imagegallery" style="text-decoration:none;">
                           <h2>Our Gallery</h2>
                        </a>
                        <div class="home_gal">
                           <div>
                              <a href="{{ url('medias') }}"><img src="{{ asset('/images/gal_1_0.jpg') }}" alt=""></a>
                              <a href="{{ url('medias') }}"><img src="{{ asset('/images/gal_2_0.jpg') }}" alt=""></a>
                              <a href="{{ url('medias') }}"><img src="{{ asset('/images/gal_3_0.jpg') }}" alt=""></a>
                              <a href="{{ url('medias') }}"><img src="{{ asset('/images/gal_4_0.jpg') }}" alt=""></a>
                           </div>
                           <div>
                              <a href="{{ url('medias') }}"><img src="{{ asset('/images/gal_1_2.jpg') }}" alt=""></a>
                              <a href="{{ url('medias') }}"><img src="{{ asset('/images/gal_2_2.jpg') }}" alt=""></a>
                              <a href="{{ url('medias') }}"><img src="{{ asset('/images/gal_3_2.jpg') }}" alt=""></a>
                              <a href="{{ url('medias') }}"><img src="{{ asset('/images/gal_4_2.jpg') }}" alt=""></a>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
            <section class="our_community">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2>Popular PRODUCTS</h2>
                     </div>
                  </div>
                  <div class="row" id="counter">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p><strong class="counter-value" data-count="1264">0</strong> Registered Members</p>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p><strong class="counter-value" data-count="125">0</strong> Gym Activities</p>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p><strong class="counter-value" data-count="224">0</strong> Trainers</p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <a href="/user/reg" class="button">Register Now</a>
                     </div>
                  </div>
               </div>
            </section>
            <div class="views-element-container block block-views block-views-blockhome-top-slider-block-4" id="block-views-block-home-top-slider-block-4">
               <div>
                  <div class="js-view-dom-id-ce3515e299c2a06d2c0e4e2c8236f65f5edc19de5a72b6c465d9b54597253a70">
                     <section class="home_testinonials">
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <h2>People love our service and efforts!</h2>
                                 <p>Surfise is consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                 <div class="choose_slider">
                                    <div class="choose_slider_items">
                                       <ul id="mySlider1">
                                          <li class="current_item">
                                             <h4><img src="{{ asset('/images/testimonial_img_top_2.jpg') }}" alt=""><strong>Mila Kunis</strong>NY, USA</h4>
                                             <p>
                                             <p>Surfise is consectetur adipisicing elit, sed do eiusmod tempor elit, sed incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                             </p>
                                             <p><a href="/clientreview">Read more</a></p>
                                          </li>
                                          <li class="current_item">
                                             <h4><img src="{{ asset('/images/testimonial_img_2.jpg') }}" alt=""><strong>John Doe</strong>NY, USA</h4>
                                             <p>
                                             <p>Surfise is consectetur adipisicing elit, sed do eiusmod tempor elit, sed incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                             </p>
                                             <p><a href="/clientreview">Read more</a></p>
                                          </li>
                                          <li class="current_item">
                                             <h4><img src="{{ asset('/images/testimonial_img_top_0.jpg') }}" alt=""><strong>Mila Kunis</strong>NY, USA</h4>
                                             <p>
                                             <p>Surfise is consectetur adipisicing elit, sed do eiusmod tempor elit, sed incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                             </p>
                                             <p><a href="/clientreview">Read more</a></p>
                                          </li>
                                          <li class="current_item">
                                             <h4><img src="{{ asset('/images/testimonial_img_0.jpg') }}" alt=""><strong>John Doe</strong>NY, USA</h4>
                                             <p>
                                             <p>Surfise is consectetur adipisicing elit, sed do eiusmod tempor elit, sed incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                             </p>
                                             <p><a href="/clientreview">Read more</a></p>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <ul class="next_prev">
                                    <li><a id="btn_prev1" href="#">Previous</a></li>
                                    <li><a id="btn_next1" href="#">Next</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <footer>
         <div class="region region-topfooter">
            <section class="footer_top">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 foot_links">
                        <h3>Surfise</h3>
                        <ul>
                           <li><a href="/">Home</a></li>
                           <li><a href="/node">About Surfise</a></li>
                           <li><a href="/node">Our Services</a></li>
                           <li><a href="/node">Our Locations</a></li>
                           <li><a href="/videogallery">Gallery</a></li>
                           <li><a href="./BlogSurfise.html">Blog</a></li>
                           <li><a href="/node">How It Works</a></li>
                           <li><a href="/node">Features</a></li>
                           <li><a href="/node">Pricing</a></li>
                           <li><a href="/node">FAQs</a></li>
                           <li><a href="/node">Advertise with us</a></li>
                        </ul>
                        <a href="/user/reg" class="button">Register Now</a>
                     </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 foot_contact">
                        <h3>Contact Info</h3>
                        <p>152 Church Ave<br>
                           Brooklyn, NY 12118
                        </p>
                        <p>719-459-4899<br>
                           729-370-0379
                        </p>
                        <p><a href="mailto:info@surfise.com">info@surfise.com</a></p>
                        <a href="/contactus" class="button">Contact Us</a>
                     </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 foot_dir">
                        <h3>Give Us a VIsit</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        <img src="{{ asset('/images/location.png') }}" alt="" class="location">
                        <a href="#" class="button">Get Direction</a>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <div class="region region-bottomfooter">
            <section class="footer_bot">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p>Copyrights @ 2017, All rights reserved by Surfise.com</p>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                        <p>Website designed and developed by <a href="#">www.rdinteractive.net</a></p>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </footer>
      <!--End Header & Navbar -->
      <script src="{{ asset('/js/jquery.js') }}"></script>
      <script src="{{ asset('/js/jquery.fancybox.min.js') }}"></script>
      <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.min.css')}}" />
      <script src="{{ asset('/js/ready.min.js') }}"></script>
      <script src="{{ asset('/js/jquery.min.js') }}"></script>
      <script src="{{ asset('/js/jquery.once.min.js') }}"></script>
      <script src="{{ asset('/js/progress.js') }}"></script>
      <script src="{{ asset('/js/responsive_image.ajax.js') }}"></script>
      <script src="{{ asset('/js/ajax.js') }}"></script>
      <script src="{{ asset('/js/jquery.uniform.standalone.js') }}"></script>
      <script src="{{ asset('/js/slick.min.js') }}"></script>
      <script src="{{ asset('/js/counter.js') }}"></script>
      <script src="{{ asset('/js/jquery.cssslider.js') }}"></script>
      <script src="{{ asset('/js/responsiveslides.js') }}"></script>
      <script src="{{ asset('/js/accordion.js') }}"></script>
      <script src="{{ asset('/js/simplegallery.min.js') }}"></script>
      <script src="{{ asset('/js/qty.js') }}"></script>
      <script src="{{ asset('/js/tabs.js') }}"></script>
      <script src="{{ asset('/js/toggles.js') }}"></script>
      <script src="{{ asset('/js/jquery.tinyscrollbar.js') }}"></script>
      <script src="{{ asset('/js/custom.js') }}"></script>
      <script src="{{ asset('/js/debounce.js') }}"></script>
      <script src="{{ asset('/js/jquery.cookie.min.js') }}"></script>
      <script src="{{ asset('/js/form.js') }}"></script>
      <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
   </body>
</html>