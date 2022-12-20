@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="./css/vanilla-calendar.css"/>
@endpush

    
@section('content')
</div>
<section class="prof_main">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 prof_info">
                  <img
                    src="{{ asset('images/Dexifit_withtag_3.png') }}"
                    alt=""
                    class="top_logo_res img-thumbnail"
                  />
                  <div class="prof_pic">
                    <img src="{{ asset('images/profile.jpg') }}" alt="" />
                    <ul>
                      <li class="like"><a href="#">107</a></li>
                      <li class="dislike"><a href="#">13</a></li>
                    </ul>
                  </div>
                  <div class="rating">
                    <h4>Rating</h4>
                    <ul>
                      <li><a href="#" class="active">1</a></li>
                      <li><a href="#" class="active">2</a></li>
                      <li><a href="#" class="active">3</a></li>
                      <li><a href="#" class="active">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                    <p>4/5</p>
                  </div>
                </div>
                <div
                  class="col-lg-3 col-md-3 col-sm-6 col-xs-12 prof_desc prod res hidden-sm"
                >
                  <div class="container bg-white pb-1 pt-1">
                    <h3>purchase memberchip</h3>
                  </div>
                  <h3 class="pt-4">body composition expert</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consect etur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore. sed do tempor
                    incididunt ut labore. consect etur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore. sed do tempor
                    incididunt ut labore.
                  </p>

                  <div class="row">
                    <form
                      name="form2"
                      method="post"
                      action=""
                      class="location clearfix"
                    >
                      <select>
                        <option>Locations</option>
                      </select>
                    </form>
                    <form name="form2" method="post" action="" class="clearfix">
                      <select>
                        <option>Services</option>
                      </select>
                    </form>
                  </div>
                  <ul class="bot_info last">
                    <li class="msg"><a href="#">Messages</a></li>
                    <li class="live"><a href="#">Live stream</a></li>
                  </ul>
                </div>
                <div
                  class="col-lg-3 col-md-3 col-sm-6 col-xs-12 prof_desc prod res hidden-sm"
                >
                  <div class="container bg-white pb-1 pt-1">
                    <h3>PURCHASE SESSION</h3>
                  </div>

                  <h3 class="pt-4"></h3>

                <!-- Calendar-->
                    <div class="row pl-3 pb-3">

                      <div class="vanilla-calendar"  id="calendar4">
                        </div>


                    </div>
                  

                  <ul class="bot_info last">
                    <li class="pin">1519 West Foster Chicago, IL 60640</li>
                    <div class="row">
                      <li class="email"><a href="#">info@superfice.com</a></li>
                      <li class="phone"><a href="#">719-459-4899346</a></li>
                    </div>
                  </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 client_rev">
                  <h3>Client reviews</h3>
                  <ul class="rslides" id="reviewSlide">
                    <li>
                      <img src="{{ asset('images/testimonial_img_top.jpg') }}" alt="" />
                      <h3>Anna John</h3>
                      <p class="rating">
                        <span class="active">1</span>
                        <span class="active">2</span>
                        <span class="active">3</span>
                        <span class="active">4</span>
                        <span>5</span>
                      </p>
                      <p>
                        Execellent trainer. I lost my weight upto 50lb in 1
                        month.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/testimonial_img_top.jpg') }}" alt="" />
                      <h3>Anna John</h3>
                      <p class="rating">
                        <span class="active">1</span>
                        <span class="active">2</span>
                        <span class="active">3</span>
                        <span class="active">4</span>
                        <span>5</span>
                      </p>
                      <p>
                        Execellent trainer. I lost my weight upto 50lb in 1
                        month.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/testimonial_img_top.jpg') }}" alt="" />
                      <h3>Anna John</h3>
                      <p class="rating">
                        <span class="active">1</span>
                        <span class="active">2</span>
                        <span class="active">3</span>
                        <span class="active">4</span>
                        <span>5</span>
                      </p>
                      <p>
                        Execellent trainer. I lost my weight upto 50lb in 1
                        month.
                      </p>
                    </li>
                  </ul>
                  <p class="link"><a href="#">See All Reviews in Details</a></p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </header>
    </section>

    <main>
      <!--<div class="region region-maincontent">
        <section class="mid_slide">
          <div class="shop_float">
            <a href="javascript:void(0);" class="shop_link">Shop</a>
            <ul class="cat_list">
              <li>
                <a href="javascript:void(0);">Category 1</a>
                <div class="prod_list">
                  <h3>Category 1</h3>
                  <ul class="clearfix">
                    <li>
                      <img src="{{ asset('images/res_item_1.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/res_item_2.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/res_item_3.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="javascript:void(0);">Category 2</a>
                <div class="prod_list">
                  <h3>Category 2</h3>
                  <ul class="clearfix">
                    <li>
                      <img src="{{ asset('images/res_item_1.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/res_item_2.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/res_item_3.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="javascript:void(0);">Category 3</a>
                <div class="prod_list">
                  <h3>Category 3</h3>
                  <ul class="clearfix">
                    <li>
                      <img src="{{ asset('images/res_item_1.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/res_item_2.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/res_item_3.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="javascript:void(0);">Category 4</a>
                <div class="prod_list">
                  <h3>Category 4</h3>
                  <ul class="clearfix">
                    <li>
                      <img src="{{ asset('images/res_item_1.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/res_item_2.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/res_item_3.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="javascript:void(0);">Category 5</a>
                <div class="prod_list">
                  <h3>Category 5</h3>
                  <ul class="clearfix">
                    <li>
                      <img src="{{ asset('images/res_item_1.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/res_item_2.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/res_item_3.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="javascript:void(0);">Category 6</a>
                <div class="prod_list">
                  <h3>Category 6</h3>
                  <ul class="clearfix">
                    <li>
                      <img src="{{ asset('images/res_item_1.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/res_item_2.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/res_item_3.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="javascript:void(0);">Category 7</a>
                <div class="prod_list">
                  <h3>Category 7</h3>
                  <ul class="clearfix">
                    <li>
                      <img src="{{ asset('images/res_item_1.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/res_item_2.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                    <li>
                      <img src="{{ asset('images/res_item_3.jpg') }}" alt="" />
                      <h4><a href="#">Item name</a></h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectet ur adipisicing
                        elit, sed do eiusmod.
                      </p>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div> -->
          

          <!--<ul class="rslides" id="midSlider">
            <li style="background-image: url({{ asset('images/mid_slidr_res.jpg') }})">
            --><!-- Changed -->
             <!-- <img src="{{ asset('images/mid_slidr_res.jpg') }}" alt="" />
              <div class="slide_content">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <h3>
                        Lorem ipsum dolor sit amet, consect etur adipisicing
                        elit.
                      </h3>
                      <a href="#">Learn more</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li style="background-image: url({{ asset('images/mid_slidr_res.jpg') }})">
               Changed 
              <img src="{{ asset('images/mid_slidr_res.jpg') }}" alt="" />
              <div class="slide_content">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <h3>
                        Lorem ipsum dolor sit amet, consect etur adipisicing
                        elit.
                      </h3>
                      <a href="#">Learn more</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li style="background-image: url({{ asset('images/mid_slidr_res.jpg') }})">
               Changed 
              <img src="{{ asset('images/mid_slidr_res.jpg') }}" alt="" />
              <div class="slide_content">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <h3>
                        Lorem ipsum dolor sit amet, consect etur adipisicing
                        elit.
                      </h3>
                      <a href="#">Learn more</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li style="background-image: url({{ asset('images/mid_slidr_res.jpg') }})">
               Changed 
              <img src="{{ asset('images/mid_slidr_res.jpg') }}" alt="" />
              <div class="slide_content">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <h3>
                        Lorem ipsum dolor sit amet, consect etur adipisicing
                        elit.
                      </h3>
                      <a href="#">Learn more</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li style="background-image: url({{ asset('images/mid_slidr_res.jpg') }})">
               Changed
              <img src="{{ asset('images/mid_slidr_res.jpg') }}" alt="" />
              <div class="slide_content">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <h3>
                        Lorem ipsum dolor sit amet, consect etur adipisicing
                        elit.
                      </h3>
                      <a href="#">Learn more</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </section>-->
        <section class="mid_blogs">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h2>john’s images <span>100 Images</span></h2>
                <div class="img_block">
                  <a href="#">
                    <img
                      src="{{ asset('images/john_img.jpg') }}"
                      alt=""
                      class="img-responsive"
                    />
                    <span>Training my clients</span>
                  </a>
                </div>
                <p class="link"><a href="#">See all John’s Images</a></p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h2>john’s VBlogs <span>13 Videos</span></h2>
                <div class="img_block">
                  <a href="#">
                    <img
                      src="{{ asset('images/john_video.jpg') }}"
                      alt=""
                      class="img-responsive"
                    />
                    <img src="{{ asset('images/player.png') }}" alt="" class="player" />
                    <span>nstructional exercise videos</span>
                  </a>
                </div>
                <p class="link"><a href="#">See all Exercise Videos</a></p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <h2>john’s Blogs <span>33 Blogs</span></h2>
                <div class="blog_block">
                  <h3>
                    <img src="{{ asset('images/blog_icon.jpg') }}" alt="" /> How to knock off
                    the lbs with in month?
                    <span><em>12-01-2017</em> &nbsp;|&nbsp; Weight Loss</span>
                  </h3>
                  <p>
                    Weight loss, Functional Training, Crossfit Training. Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt. <a href="#">Read More</a>
                  </p>
                  <p class="rating">
                    <strong>Rating</strong>
                    <span class="active">1</span>
                    <span class="active">2</span>
                    <span class="active">3</span>
                    <span>4</span>
                    <span>5</span>
                  </p>
                </div>
                <p class="link"><a href="#">See all Articles</a></p>
              </div>
            </div>
          </div>
        </section>

        
          <section class="mid_blogs bg-white">
            <h2 class="text-center"> products</h2>
            <div class="col-md-12">
               <div class="row">
                  <div class="col-md-4">
                     <div class="product_container border">
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 prof_desc prod res">
                              <img src="{{ asset('images/alter.jpg') }}" alt="" class="top_logo_res col pt-5">
                           </div>
                           <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 prof_desc prod res hidden-sm">
                              <h3>alter</h3>
                              <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore. sed do tempor
                                incididunt ut labore</p>    
                                <ul class="bot_info last pt-3" style="color:black">
                                    <li><a href="#" class="btn btn-profile float-right mr-3">Visit Profile Page</a></li>
                                   </ul>
                           </div>
                          </div>
                     </div>
                  </div>
                       <div class="col-md-4">
                          <div class="product_container border">
                             <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 prof_desc prod res">
                                   <img src="{{ asset('images/alter.jpg') }}" alt="" class="top_logo_res col pt-5">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 prof_desc prod res hidden-sm">
                                   <h3>alter</h3>
                                   <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit,
                                     sed do eiusmod tempor incididunt ut labore. sed do tempor
                                     incididunt ut labore</p>
                                     <ul class="bot_info last pt-3" style="color:black">
                                         <li><a href="#" class="btn btn-profile float-right mr-3">Visit Profile Page</a></li>
                                        </ul>
                            </div>
                            </div>
                        </div> 
                          </div> 

                          <div class="col-md-4">
                            <div class="product_container border">
                               <div class="row">
                                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 prof_desc prod res">
                                     <img src="{{ asset('images/alter.jpg') }}" alt="" class="top_logo_res col pt-5">
                                  </div>
                                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 prof_desc prod res hidden-sm">
                                     <h3>alter</h3>
                                     <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit,
                                       sed do eiusmod tempor incididunt ut labore. sed do tempor
                                       incididunt ut labore</p>
                                       <ul class="bot_info last pt-3" style="color:black">
                                           <li><a href="#" class="btn btn-profile float-right mr-3">Visit Profile Page</a></li>
                                          </ul>
                              </div>
                              </div>
         </section>
          

        <section class="ad_space">
          <div class="container">
            <div class="row">
              <div
                class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12"
              >
                <img src="{{ asset('images/ad.jpg') }}" alt="" class="img-responsive" />
              </div>
            </div>
          </div>
        </section>
     
   



    <script>var exports = {};</script>
    <!--End Header & Navbar -->
    <script src="./js/vanilla-calendar.js"></script>
    <script> const calendar4 = new VanillaCalendar({
      HTMLElement: document.querySelector('#calendar4'),
      date: new Date('2022-12-05'),
      settings: {
        selected: {
          date: '2022-12-05',
          month: '12',
          year: '2022',
        },
      },
});
calendar4.init();
</script>

@endsection