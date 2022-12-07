<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('/images/favicon_0.png') }}" type="image/png" />

    <title>Blog | Surfise</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css"  />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- Latest compiled and minified JavaScript -->

 

    <link rel="stylesheet" href="{{ asset('/css/ajax-progress.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/align.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/autocomplete-loading.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/fieldgroup.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/container-inline.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/clearfix.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/details.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/hidden.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/item-list.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/js.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/nowrap.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/position-container.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/progress.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/reset-appearance.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/resize.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/sticky-header.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/system-status-counter.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/system-status-report-counters.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/system-status-report-general-info.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/tabledrag.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/tablesort.module.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/tree-child.module.css') }}" />

    <link rel="stylesheet" href="{{ asset('/css/animated-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/responsiveslides.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/simplegallery.demo1.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/tabs.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/tinyscrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/toggles.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/toggles-all.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/toggles-modern.css') }}" />
    @stack('styles')

    <!--[if lte IE 8]>
      <script src="/core/assets/vendor/html5shiv/html5shiv.min.js?v=3.7.3') }}"></script>
    <![endif]-->
  </head>
  <body class="login path-blog">
    <a href="#main-content" class="visually-hidden focusable skip-link">
      Skip to main content
    </a>

    <section class="inner_top search">
      <header>
        <div class="region region-topinnerheader">
          <section class="header_top">
            <div class="header_top_inner clearfix">
              <div class="left_part">
                <a href="/"><img src="{{ asset('/images/logo.png')}}" alt="" /></a>
                <ul>
                  <li><a href="/">H2O</a></li>
                  <li><a href="{{ url('bmi')}}">BMI</a></li>
                  <li><a href="{{ url('rmr') }}">RMR</a></li>
                  <li><a href="{{ url('thr') }}">THR</a></li>
                 
                </ul>
              </div>
              <div class="mid_part">
                <form name="form1" method="post" action="" class="clearfix">
                  <input type="text" placeholder="Search here...." />
                  <select>
                    <option>Advanced Search</option>
                  </select>
                </form>
              </div>
              <div class="last_part">
                <ul>
                  <li><a href="/user/reg">Signup it’s free!</a></li>
                  <li><a href="/user/login">Login</a></li>
                </ul>
              </div>
              <a href="#" class="mobile_hamburger">Menu</a
              ><!-- Added -->

              <div class="mobile_menu">
                <!-- Added -->
                <form name="form1" method="post" action="" class="clearfix">
                  <input type="text" placeholder="Search here...." />
                  <select>
                    <option>Advanced</option>
                  </select>
                </form>
                <ul class="log_menu">
                  <li><a href="/user/reg">Signup it’s free!</a></li>
                  <li><a href="/user/login">Login</a></li>
                </ul>
                <ul class="navigation">
                  <li><a href="{{ url('blog') }}">Blog</a></li>
                  <li><a href="{{ url('clubs') }}">Clubs/Gyms</a></li>
                  <li><a href="{{ url('equipments') }}">Equipment</a></li>
                  <li><a href="{{ url('products') }}">Products</a></li>
                  <li><a href="{{ url('restaurats') }}">Restaurants</a></li>
                  <li><a href="{{ url('Services') }}">Services</a></li>
                  
                </ul>
              </div>
            </div>
            
          </section>
       
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
          </header>
    
<div>
          
            @yield('content')
</div>
     
</section>


        <footer>
      <div class="region region-topfooter">
        <section class="footer_top">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 foot_links">
                <h3>Surfise</h3>
                <ul>
                  <li>
                    <a href="{{ url('node') }}"
                      >Home</a
                    >
                  </li>
                  <li>
                    <a href="{{ url('node') }}"
                      >About Surfise</a
                    >
                  </li>
                  <li>
                    <a href="{{ url('node') }}"
                      >Our Services</a
                    >
                  </li>
                  <li>
                    <a href="{{ url('node') }}"
                      >Our Locations</a
                    >
                  </li>
                  <li>
                    <a
                      href="{{ url('videogallery') }}"
                      >Gallery</a
                    >
                  </li>
                  <li>
                    <a href="{{ url('blog') }}"
                      >Blog</a
                    >
                  </li>
                  <li>
                    <a href="{{ url('node') }}"
                      >How It Works</a
                    >
                  </li>
                  <li>
                    <a href="{{ url('node') }}"
                      >Features</a
                    >
                  </li>
                  <li>
                    <a href="{{ url('node') }}"
                      >Pricing</a
                    >
                  </li>
                  <li>
                    <a href="{{ url('node') }}"
                      >FAQs</a
                    >
                  </li>
                  <li>
                    <a href="{{ url('node') }}"
                      >Advertise with us</a
                    >
                  </li>
                </ul>
                <a
                  href="./user/reg"
                  class="button"
                  >Register Now</a
                >
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 foot_contact">
                <h3>Contact Info</h3>
                <p>
                  152 Church Ave<br />
                  Brooklyn, NY 12118
                </p>
                <p>
                  719-459-4899<br />
                  729-370-0379
                </p>
                <p><a href="mailto:info@surfise.com">info@surfise.com</a></p>
                <a
                  href="./contactus"
                  class="button"
                  >Contact Us</a
                >
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 foot_dir">
                <h3>Give Us a VIsit</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod.
                </p>
                <img
                  src="{{ asset('/images/location.png') }}"
                  alt=""
                  class="location"
                />
                <a
                  href="./categories#"
                  class="button"
                  >Get Direction</a
                >
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
                <p>
                  Website designed and developed by
                  <a
                    href="{{ url('categories') }}"
                    >www.rdinteractive.net</a
                  >
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </footer>
  </div>
</div>
   <!--End Header & Navbar -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

	<script src="{{ asset('/js/jquery.js') }}"></script>
	<script src="{{ asset('/js/jquery.fancybox.min.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.min.css') }}" />

	<script src="{{ asset('/js/jquery.uniform.standalone.js') }}"></script>
  <script src="{{ asset('/js/slick.min.js') }}"></script>

	<script src="{{ asset('/js/jquery.cssslider.js') }}"></script>
  <script src="{{ asset('/js/responsiveslides.js') }}"></script>
  <script src="{{ asset('/js/simplegallery.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.tinyscrollbar.js') }}"></script>


  <script src="{{ asset('/js/custom.js') }}"></script>
	<script src="{{ asset('/js/ready.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.once.min.js') }}"></script>

	<script src="{{ asset('/js/counter.js') }}"></script>

	<script src="{{ asset('/js/jquery.min.js') }}"></script>

	<script src="{{ asset('/js/qty.js') }}"></script>
	<script src="{{ asset('/js/tabs.js') }}"></script>
	<script src="{{ asset('/js/toggles.js') }}"></script>
	<script src="{{ asset('/js/jquery.cookie.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>

	
  @yield('bmi-scripts')
  @yield('rmr-script')
  @yield('thr-script')
   </body>
   </html>