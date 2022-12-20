@extends('layouts.appFront')
@section('content')

<section class="prof_main">
                  <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="product_container">
                              <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 prof_desc prod res">
                                    <img src="{{ asset('/images/panera_bread_logo.png')}}" alt="" class="top_logo_res col">
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 prof_desc prod res hidden-sm">
                                    <h3>Panera Bread - Sandwich</h3>
                                    <ul class="bot_info last pt-3">
                                       <li><a href="http://www.panerabread.com" style="color: white; font-size: 19px;" target="_blank">www.panerabread.com</a></li>
                                    </ul>
                                 </div>
								</div>
								<div class="row">
									<div class="col">
                                 <ul class="bot_info last pt-3" style="color:white">
                                    <li class="pin">1519 West Foster Chicago, IL 60640</li>
                                    <li class="email">dynamax@dynamax.com</li>
                                    <li class="phone">719-459-4899346</li>
                                    <li class="time">Hours - 11:00 a.m - 8:00 p.m <a href="{{ url('restaurants/restaurant_details') }}" style="background:#ff0022!important; color:white; border-radius: 0; border:#ff0022 1px solid" class="btn btn-profile float-right mr-3">Visit Profile Page</a></li>
                                 </ul>
								</div>
								</div>
                            
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="product_container">
                              <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 prof_desc prod res">
                                    <img src="{{ asset('/images/panera_bread_logo.png') }}" alt="" class="top_logo_res col">
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 prof_desc prod res hidden-sm">
                                    <h3>Panera Bread - Sandwich</h3>
                                    <ul class="bot_info last pt-3">
                                       <li><a href="http://www.panerabread.com" style="color: white; font-size: 19px;" target="_blank">www.panerabread.com</a></li>
                                    </ul>
                                 </div>
								</div>
								<div class="row">
									<div class="col">
                                 <ul class="bot_info last pt-3" style="color:white">
                                    <li class="pin">1519 West Foster Chicago, IL 60640</li>
                                    <li class="email">dynamax@dynamax.com</li>
                                    <li class="phone">719-459-4899346</li>
                                    <li class="time">Hours - 11:00 a.m - 8:00 p.m <a href="{{ url('restaurants/restaurant_details') }}" style="background:#ff0022!important; color:white; border-radius: 0; border:#ff0022 1px solid" class="btn btn-profile float-right mr-3">Visit Profile Page</a></li>
                                 </ul>
								</div>
								</div>
                            
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="product_container">
                              <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 prof_desc prod res">
                                    <img src="{{ asset('/images/panera_bread_logo.png') }}" alt="" class="top_logo_res col">
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 prof_desc prod res hidden-sm">
                                    <h3>Panera Bread - Sandwich</h3>
                                    <ul class="bot_info last pt-3">
                                       <li><a href="http://www.panerabread.com" style="color: white; font-size: 19px; text-align: left;" target="_blank">www.panerabread.com</a></li>
                                    </ul>
                                 </div>
								</div>
								<div class="row">
									<div class="col">
                                 <ul class="bot_info last pt-3" style="color:white">
                                    <li class="pin">1519 West Foster Chicago, IL 60640</li>
                                    <li class="email">dynamax@dynamax.com</li>
                                    <li class="phone">719-459-4899346</li>
                                    <li class="time">Hours - 11:00 a.m - 8:00 p.m <a href="{{ url('restaurants/restaurant_details') }}" style="background:#ff0022!important; color:white; border-radius: 0; border:#ff0022 1px solid" class="btn btn-profile float-right mr-3">Visit Profile Page</a></li>
                                 </ul>
								</div>
								</div>
                            
                           </div>
                        </div>
               </section>
          @endsection