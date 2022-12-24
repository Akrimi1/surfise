<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="shortcut icon" href="./images/favicon_0.png" type="image/png" />
      <title>Register | Surfise</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" />
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
         />
      <!-- Latest compiled and minified JavaScript -->
      <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
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
      <!--[if lte IE 8]>
      <script src="/core/assets/vendor/html5shiv/html5shiv.min.js') }}?v=3.7.3"></script>
      <![endif]-->
   </head>
   <body class="login path-user">
      <a href="" class="visually-hidden focusable skip-link">
      Skip to main content
      </a>
      <section class="inner_top no_bg">
         <header>
            <div class="region region-topinnerheader">
               <section class="header_top transperant">
                  <div class="header_top_inner clearfix">
                     <div class="left_part">
                        <a href=""><img src="{{ asset('/images/logo.png') }}" alt="" class="img-responsive"></a>
                     </div>
                     <div class="last_part">
                        <ul>
                           <li><a href="{{ url('user_login') }}" class="login">Login Here</a></li>
                        </ul>
                     </div>
                     <a href="#" class="mobile_hamburger">Menu</a>
                     <div class="mobile_menu">
                        <ul class="log_menu">
                           <li><a href="{{ url('user_login') }}" class="login">Login Here</a></li>
                        </ul>
                     </div>
                  </div>
               </section>
            </div>
         </header>
      </section>
      <main>
         <div class="region region-maincontent">
            <div id="block-surfise-content--2" class="block block-system block-system-main-block">
               <section class="login_main">
                  <div class="login_inner">
                     <h2>Register Now</h2>
                     <p>Please fillout the details to<br> create your account.</p>
                     <form class="user-register-form user-form" data-user-info-from-browser="" data-drupal-selector="user-register-form" action="http://live-surfise.pantheonsite.io/user/register" method="post" id="user-register-form" accept-charset="UTF-8" data-drupal-form-fields="edit-name,edit-mail,edit-pass,edit-submit">
                        <div data-drupal-selector="edit-account" id="edit-account" class="js-form-wrapper form-wrapper">
                           <div class="js-form-item form-item js-form-type-textfield form-item-name js-form-item-name form-no-label">
                              <input class="user form-text required" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="Username" data-drupal-selector="edit-name" type="text" id="edit-name" name="name" value="" size="60" maxlength="60" required="required" aria-required="true">
                           </div>
                           <div class="js-form-item form-item js-form-type-email form-item-mail js-form-item-mail form-no-label">
                              <input placeholder="Email Address" class="email form-email required" data-drupal-selector="edit-mail" type="email" id="edit-mail" name="mail" value="" size="60" maxlength="254" required="required" aria-required="true">
                           </div>
                           <div class="js-form-item form-item js-form-type-password form-item-pass js-form-item-pass form-no-label">
                              <input class="pass form-text required" placeholder="Password" data-drupal-selector="edit-pass" type="password" id="edit-pass" name="pass" size="25" maxlength="128" required="required" aria-required="true">
                           </div>
                        </div>
                        <input autocomplete="off" data-drupal-selector="form-qtcwu9s97y6wwvbw9jn-o-lutr-gnuqlpvxgtm9zvn8" type="hidden" name="form_build_id" value="form-QTcwU9s97Y6wwvBw9Jn_O-luTR_gnuQLpvXGtM9Zvn8">
                        <input data-drupal-selector="edit-user-register-form" type="hidden" name="form_id" value="user_register_form">
                        <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions"><input data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Register Now" class="button button--primary js-form-submit form-submit"></div>
                     </form>
                     <p class="bot_text">Do you already have an account? <a href="{{ url('user_login') }}">Log In Here</a></p>
                  </div>
               </section>
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
                           <li><a href="/node">Home</a></li>
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
                        <a href="http://live-surfise.pantheonsite.io/user/reg" class="button">Register Now</a>
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
                        <a href="http://live-surfise.pantheonsite.io/contactus" class="button">Contact Us</a>
                     </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 foot_dir">
                        <h3>Give Us a VIsit</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        <img src="./images/location.png" alt="" class="location">
                        <a href="" class="button">Get Direction</a>
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
                        <p>Copyrights @ 2022, All rights reserved by Surfise.com</p>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                        <p>Website designed and developed by <a href=""></a></p>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </footer>
      <!--End Header & Navbar -->
      <script src="{{ asset('/js/jquery.js') }}"></script>
      <script src="{{ asset('/js/jquery.fancybox.min.js') }}"></script>
      <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.min.css') }}" />
      <script src="{{ asset('/js/ready.min.js') }}"></script>
      <script src="{{ asset('/js/progress.js') }}"></script>
      <script src="{{ asset('/js/responsive_image.ajax.js') }}"></script>
      <script src="{{ asset('/js/ajax.js') }}"></script>
      <script src="{{ asset('/js/jquery.uniform.standalone.js') }}"></script>
      <script src="{{ asset('/js/slick.min.js') }}"></script>
      <script src="{{ asset('/js/jquery.css') }}slider.js') }}"></script>
      <script src="{{ asset('/js/responsiveslides.js') }}"></script>
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