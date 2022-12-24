@extends('layouts.admin')
@section('content')

<section class="wrapper">
          <h3><i class="fa fa-angle-right"></i> Vendors management</h3>

          <!-- row -->
          <div class="row mt">
            <div class="col-md-12">
              <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                <div class="row">
                  <div class="col-md-6">
               <div class="col-md-6">
               <a class="btn btn-primary "  href="{{ url('/vendors/admin/create') }}" >Add Vendors</a>  
                  </div>
               </div>
               </div>
                  <hr />
                  <thead>
                    <tr>
                    <th>vendor image</th>
                      <th>vendor name</th>
                      <th>Email</th>
                      <th>Phone number</th>
                      <th>Website</th>
                      <th>Country</th>                     
                      <th>Working hours</th>                     
                      <th>Street Address</th>
                      
                      <th></th>
                    </tr>
                  </thead>
                  @foreach($vendors as $vendor)
                  
                  <tbody>
                    <tr>
                    <td class="col-md-1">
                        <img src="{{ asset('images/vendors/' . $vendor->photo)}}" class="thumbnail" width="100%" />
                     </td>
                      <td>
                      {{$vendor->vendor_name}}
                    
                      </td>
                      <td>{{$vendor->email}}</td>
                      <td>{{$vendor->phone}}</td>
                      <td>{{$vendor->website}}</td>
                      <td>{{$vendor->country}}</td>
                      <td>
                      {{$vendor->workingHours}}
                      </td>
                      <td>
                      {{$vendor->streetAddress}}
                      </td>
                      
                      <td class="col-md-1">
                      <div class="col-md-12">
                           <div class="row">
                              <div class="col-md-1">
                                 <a class="btn btn-primary btn-xs" href="{{ route('admin.edit', $vendor->id)}}"> <i class="fa fa-pencil"></i> </a>
</div>
<div class="col-md-1">

                                 <form class="col-md-2" method="post" action="{{ route('vendors.destroy', $vendor->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash-o"></i>
                                    </button>
                                 </form>
                              </div>
                           </div>
                        </div>
                      </td>
                    </tr>
                    
                  </tbody>
                  @endforeach
                </table>
              </div>
              <!-- /content-panel -->
            </div>
            <!-- /col-md-12 -->
          </div>
          <!-- /row -->
        </section>
        @endsection