@extends('layouts.appFront')
@section('content')
<section class="prof_main purchase info_main"> 
			<div class="container">
				<div class="row info_top">
					<div class="col-lg-12">
						<h2>Information Page</h2>
					</div>
				</div>
				<div class="row info_img">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<img src="{{ asset('/images/info_product_img.png') }}" alt="" class="img-responsive">
						<h3>Medicine ball <a href="#">Shop</a></h3>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
						<img src="{{ asset('/images/info_ad.png') }}" alt="" class="img-responsive">
					</div>
				</div>
				<div class="row">
			 		<div class="col-lg-12">
						<div class="published_by">
							<p><strong>Published By:</strong>
							Dynamax Medicine Ball   <a href="#">www.medicineballs.com</a></p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum etting, remaining essential , remaining essentially unchanged. It was popularised in the Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum etting, remaining essential , remaining essentially unchanged. It was popularised in the.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="graphs clearfix">
							<div class="line_graph">
								<h4>Graph</h4>
								<img src="{{ asset('/images/line_chart_big.png') }}" alt="" class="img-responsive">
							</div>
							<div class="chart">
								<h4>Chart</h4>
								<img src="{{ asset('/images/pie_chart_medium.png') }}" alt="" class="img-responsive">
							</div>
							<div class="bullets">
								<h4>Bullet points</h4>
								<ul>
									<li>Bullet point 1</li>
									<li>Bullet point 2</li>
									<li>Bullet point 3</li>
									<li>Bullet point 4</li>
									<li>Bullet point 5</li>
									<li>Bullet point 6</li>
									<li>Bullet point 7</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row exercise">
					<div class="col-lg-12">
						<h3>Related Exercises</h3>
						<div class="mob_exc visible-xs">
							<div>
								<div class="inner">
									<img src="{{ asset('/images/exercise_1.jpg') }}" alt="" class="img-responsive">
									<span>Single Leg Squat</span>
								</div>
							</div>
							<div>
								<div class="inner">
									<img src="{{ asset('/images/exercise_2.jpg') }}" alt="" class="img-responsive">
									<span>Plank Shuffle</span>
								</div>
							</div>
							<div>
								<div class="inner">
									<img src="{{ asset('/images/exercise_3.jpg') }}" alt="" class="img-responsive">
									<span>Overhead Throw</span>
								</div>
							</div>
						</div>
						<ul class="hidden-xs">
							<li>
								<img src="{{ asset('/images/exercise_1.jpg') }}" alt="" class="img-responsive">
								<span>Single Leg Squat</span>
							</li>
							<li>
								<img src="{{ asset('/images/exercise_2.jpg') }}" alt="" class="img-responsive">
								<span>Plank Shuffle</span>
							</li>
							<li>
								<img src="{{ asset('/images/exercise_3.jpg') }}" alt="" class="img-responsive">
								<span>Overhead Throw</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="row ref">
					<div class="col-lg-12">
						<h3>References</h3>
						<ul>
							<li><a href="#">Amercian Council Of Exercise Science</a></li>
							<li><a href="#">3 Essentianls For Anaerobics</a></li>
							<li><a href="#">Encyclopedia Of Fitness</a></li>
							<li><a href="#">Dynamax.com</a></li>
							<li><a href="#">Amazing Of World Of Fitness</a></li>
							<li><a href="#">Dr. Ruth Beckford, MD</a></li>
							<li><a href="#">Livestring.com</a></li>
							<li><a href="#">Forever Fitness</a></li>
							<li><a href="#">Center For Disease Control</a></li>
						</ul>
					</div>
				</div>
				<div class="row ref">
					<div class="col-lg-12">
						<h3>Categories</h3>
						<ul>
							<li><a href="#">Medicine Balls</a></li>
							<li><a href="#">Exercise Equipment</a></li>
							<li><a href="#">Exercise Accesories</a></li>
							<li><a href="#">Rehibilatation Medicine</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
  </div>

		</header>
</section>
@endsection