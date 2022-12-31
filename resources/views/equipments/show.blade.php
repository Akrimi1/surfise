@extends('layouts.appFront')
@section('title', 'Equipment')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<section class="prof_main">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 prof_info">
							<div class="prof_pic">
								<img src="{{ asset('/images/equipments/'.$equip->images[0]->path) }}" alt="">
								<ul>
									<li class="like"><a href="#">{{ $equip->like}}</a></li>
									<li class="dislike"><a href="#">{{ $equip->dislike }}</a></li>
								</ul>
							</div>
							<div class="rating">
								<h4>Rating</h4>								                           
								<ul>
									@php
									$j = $equip->rating;
									@endphp
									
									@for($i = 0; $i < $equip->rating; $i++)
									<li><a href="#" class="active"></a></li>                           
									@endfor

									@while($j < 5)
									<li><a href="#" class=""></a></li>    
									@php $j++ @endphp
									@endwhile																		
								</ul>
								<p>{{ $equip->rating}}/5</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 prof_desc prod">
							<h3>Exercise equipment - {{ $equip->type }}</h3>
							<p class="text-justify">{{ $equip->details }}</p>
							<ul>
								<li><a href="#">Meet the Team</a></li>
							</ul>
							<form name="form2" method="post" action="" class="clearfix">
								<select>
									<option>Services</option>
								</select>
								<a href="#">Hours</a>
							</form>
							<ul class="bot_info">
								<li class="web"><a href="#">{{ $equip->vendor->website }}</a></li>
								<li class="email"><a href="#">{{ $equip->vendor->email }}</a></li>
								<li class="phone"><a href="#">{{ $equip->vendor->phone }}</a></li>
							</ul>
							<form name="form2" method="post" action="" class="location clearfix">
								<select>
									<option>Locations</option>
								</select>
							</form>
							<ul class="bot_info last">
								<li class="pin">{{ $equip->vendor->streetAddress }}</li>
								<li class="msg"><a href="#">Messages</a></li>
								<li class="live"><a href="#">Live stream</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 booking">
							<h3>Featured equipments</h3>
							<div class="featured_prod">
								<ul class="rslides" id="fitprodSlide">
									<li><img src="{{ asset('/images/featured_product.jpg') }}" alt=""></li>
									<li><img src="{{ asset('/images/featured_product.jpg') }}" alt=""></li>
									<li><img src="{{ asset('/images/featured_product.jpg') }}" alt=""></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 client_rev">
							<h3>Client reviews</h3>
							<ul class="rslides" id="reviewSlide">
								<li>
									<img src="{{ asset('/images/testimonial_img_top.jpg') }}" alt="">
									<h3>Anna John</h3>
									<p class="rating">
										<span class="active">1</span>
										<span class="active">2</span>
										<span class="active">3</span>
										<span class="active">4</span>
										<span>5</span>
									</p>
									<p>Execellent trainer. I lost my weight upto 50lb in 1 month.</p>
								</li>
								<li>
									<img src="{{ asset('/images/testimonial_img_top.jpg') }}" alt="">
									<h3>Anna John</h3>
									<p class="rating">
										<span class="active">1</span>
										<span class="active">2</span>
										<span class="active">3</span>
										<span class="active">4</span>
										<span>5</span>
									</p>
									<p>Execellent trainer. I lost my weight upto 50lb in 1 month.</p>
								</li>
								<li>
									<img src="{{ asset('/images/testimonial_img_top.jpg') }}" alt="">
									<h3>Anna John</h3>
									<p class="rating">
										<span class="active">1</span>
										<span class="active">2</span>
										<span class="active">3</span>
										<span class="active">4</span>
										<span>5</span>
									</p>
									<p>Execellent trainer. I lost my weight upto 50lb in 1 month.</p>
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
		  <div class="region region-maincontent">
		
		<section class="mid_slide">
			<div class="shop_float">
				<a href="javascript:void(0);" class="shop_link">Shop</a>
				<ul class="cat_list">
					<li>
						<a href="javascript:void(0);">{{ $equip->category->category }}</a>
						<div class="prod_list">
							<h3>Category 1</h3>
							<ul class="clearfix">
								<li>
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
								</li>
								<li>
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
								</li>
								<li>
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
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
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
								</li>
								<li>
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
								</li>
								<li>
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
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
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
								</li>
								<li>
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
								</li>
								<li>
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
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
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
								</li>
								<li>
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
								</li>
								<li>
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
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
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
								</li>
								<li>
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
								</li>
								<li>
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
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
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
								</li>
								<li>
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
								</li>
								<li>
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
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
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
								</li>
								<li>
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
								</li>
								<li>
									<img src="{{ asset('/images/prod_img.png') }}" alt="">
									<h4><a href="#">Item name</a></h4>
									<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod.</p>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<ul class="rslides" id="midSlider">
				<li style="background-image: url(./mid_slidr.jpg') }});">
					<img src="{{ asset('/images/mid_slidr.jpg') }}" alt="">
					<div class="slide_content">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<h3>Lorem ipsum dolor sit amet, consect etur adipisicing elit.</h3>
									<a href="#">Learn more</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li style="background-image: url(./mid_slidr.jpg') }});">
					<img src="{{ asset('/images/mid_slidr.jpg') }}" alt="">
					<div class="slide_content">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<h3>Lorem ipsum dolor sit amet, consect etur adipisicing elit.</h3>
									<a href="#">Learn more</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li style="background-image: url(./mid_slidr.jpg') }});">
					<img src="{{ asset('/images/mid_slidr.jpg') }}" alt="">
					<div class="slide_content">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<h3>Lorem ipsum dolor sit amet, consect etur adipisicing elit.</h3>
									<a href="#">Learn more</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li style="background-image: url(./mid_slidr.jpg') }});">
					<img src="{{ asset('/images/mid_slidr.jpg') }}" alt="">
					<div class="slide_content">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<h3>Lorem ipsum dolor sit amet, consect etur adipisicing elit.</h3>
									<a href="#">Learn more</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li style="background-image: url(./mid_slidr.jpg') }});">
					<img src="{{ asset('/images/mid_slidr.jpg') }}" alt="">
					<div class="slide_content">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<h3>Lorem ipsum dolor sit amet, consect etur adipisicing elit.</h3>
									<a href="#">Learn more</a>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</section>	<section class="mid_blogs">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<h2>john’s images <span>100 Images</span></h2>
					<div class="img_block">
						<a href="#">
							<img src="{{ asset('/images/john_img.jpg') }}" alt="" class="img-responsive">
							<span>Training my clients</span>
						</a>
					</div>
					<p class="link"><a href="#">See all John’s Images</a></p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<h2>john’s VBlogs <span>13 Videos</span></h2>
					<div class="img_block">
						<a href="#">
							<img src="{{ asset('/images/john_video.jpg') }}" alt="" class="img-responsive">
							<img src="{{ asset('/images/player.png') }}" alt="" class="player">
							<span>nstructional exercise videos</span>
						</a>
					</div>
					<p class="link"><a href="#">See all Exercise Videos</a></p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<h2>john’s Blogs <span>33 Blogs</span></h2>
					<div class="blog_block">
						<h3><img src="{{ asset('/images/blog_icon.jpg') }}" alt=""> How to knock off the lbs with in month? <span><em>12-01-2017</em> &nbsp;|&nbsp; Weight Loss</span></h3>
						<p>Weight loss, Functional Training, Crossfit Training. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. <a href="#">Read More</a></p>
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
	</section>	<section class="ad_space">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
					<img src="{{ asset('/images/ad.jpg') }}" alt="" class="img-responsive">
				</div>
			</div>
		</div>
	</section>
@endsection