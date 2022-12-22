@extends('layouts.appFront')

@section('content')

<section class="prof_main client_rev">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 client_rev_top small_gap">
                  <h2>EQUIPMENTS</h2>
                </div>
              </div>
              <!--category-->
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs sidebar">
                  <!-- Changed -->
                  <div class="inner">
                    <h3>Catergories</h3>
                    <ul>
                      @foreach($categories as $c)
                      <li>
                        <!-- Add filter with ajax call to a controller method-->
                        <a
                          href="./categories#"
                          class=""
                          >{{ $c->category }}</a
                        >
                        @if(count($c->subcategories) !=0)
                        <ul style>
                          @foreach($c->subcategories as $sub)                          
                          <li>
                            <a
                              href="./categories#"
                              class=""
                              >{{ $sub->subcategory }}</a
                            >
                          </li> 
                          @endforeach                         
                        </ul>
                        @endif
                      </li>      
                      @endforeach                
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--Categories end-->

                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                  <div class="row">
                    <!-- filter -->
                    <!-- Added 
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="filter_cont clearfix">
                        <h4>Refine by</h4>
                        <ul>
                          <li>
                            <a
                              href="./categories#"
                              >Brand</a
                            >
                            <div class="ref_cont"></div>
                          </li>
                          <li>
                            <a
                              href="./categories#"
                              >Color</a
                            >
                            <div class="ref_cont"></div>
                          </li>
                          <li>
                            <a
                              href="./categories#"
                              >Size</a
                            >
                            <div class="ref_cont"></div>
                          </li>
                          <li>
                            <a
                              href="./categories#"
                              >Price</a
                            >
                            <div class="ref_cont">
                              <h5>Refine by <span>Price</span></h5>
                              <form>
                                <label
                                  ><div class="checker">
                                    <span
                                      ><input type="checkbox" name="price"
                                    /></span>
                                  </div>
                                  $0 to $50</label
                                >
                                <label
                                  ><div class="checker">
                                    <span
                                      ><input type="checkbox" name="price"
                                    /></span>
                                  </div>
                                  $50 to $100</label
                                >
                                <label
                                  ><div class="checker">
                                    <span
                                      ><input type="checkbox" name="price"
                                    /></span>
                                  </div>
                                  $100 to $200</label
                                >
                                <label
                                  ><div class="checker">
                                    <span
                                      ><input type="checkbox" name="price"
                                    /></span>
                                  </div>
                                  $200 to $500</label
                                >
                                <div class="custom">
                                  <input type="text" name="" />
                                  <span>to</span>
                                  <input type="text" name="" />
                                </div>
                                <input type="submit" name="" value="Refine" />
                              </form>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div> Changed -->
                  </div>
                  
                  <div class="row prod_main">
                  @foreach($equipments as $equip)
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog_block">
                      <div class="product_block">
                         <img src="{{ asset('/images/equipments/'.$equip->images[0]->path) }}"  alt=""  class="img-responsive col"/>
                         <div class="prod_info">
                            <h4>
                               <a
                                  href="{{ route('equipments.show', $equip->id) }}"
                                  >{{$equip->name}}</a>
                            </h4>
                            <p>
                              {{ Illuminate\Support\Str::limit($equip->details, 100)}}
                            </p>
                            <!--Rating--> 
                            <div class="row">
                             <div class="col-md-12 d-flex p-2"> 
                              <p class="rating">
                               @php
                                $j = $equip->rating;
                                @endphp
                                
                                @for($i = 0; $i < $equip->rating; $i++)
                                  <a href="" class="active"></a>                                
                                @endfor

                                @while($j < 5)
                                  <a href="" class=""></a>
                                  @php $j++ @endphp
                                @endwhile
                              </p>
                            </div>
                          <div class="col">
                            <h5>
                         
                               <a
                                  href="{{ route('equipments.show', $equip->id) }}"
                                  >View More</a
                                  >
                            </h5>
                          </div>
                          </div>
                            <hr size="10" />
                            <div class="row">
                              <div class="col-md-3">
                                <img
                                  src="{{ asset('/images/vendors/'.$equip->vendor->photo) }}"
                                  alt="Avatar"
                                  style="
                                    position: relative;
                                    width: 50px;
                                    height: 50px;
                                    overflow: hidden;
                                    border-radius: 50%;
                                  "
                                />
                              </div>
                              <div class="col-md-9"><a href="{{ route('vendors.show', $equip->vendor->id) }}">{{ $equip->vendor->vendor_name }}</a></div>
                            </div>
                              <!-- <div class="row">
                                  <div class="col">
                                     <img
                                        src={{ asset('/images/img_avatar.png') }}"
                                        alt="Avatar"
                                        class="img-responsive col"
                                        style="border-radius: 50%;"
                                        />
                                  </div>
                                  <div class="col">
                                     <span>Vendor name</span>
                                  </div>
                               </div>-->
                         </div>
                      </div>
                      
                   </div>
                


                   @endforeach

                 </div>
                 
                
              <div class="row pagination_cont">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <ul>
                    <li>
                      <a
                        href="./categories#"
                        class="prev hidden"
                        >Previous</a
                      >
                    </li>
                    <li>
                      <a
                        href="./categories#"
                        class="active"
                        >1</a
                      >
                    </li>
                    <li>
                      <a
                        href="./categories#"
                        class=""
                        >2</a
                      >
                    </li>
                    <li>
                      <a
                        href="./categories#"
                        class=""
                        >3</a
                      >
                    </li>
                    <li>
                      <a
                        href="./categories#"
                        class=""
                        >4</a
                      >
                    </li>
                    <li>
                      <a
                        href="./categories#"
                        class="next"
                        >Next</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        
      </header>
    </section>

    @endsection
    