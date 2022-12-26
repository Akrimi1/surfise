@extends('layouts.admin')
@section('title', 'Vendors Management')
@section('content')
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Business Page</h1>
         </div>
        
      </div>
   </div>
</section>
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title"></h3>
                  <div class="card-tools">
                     <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                           <button type="submit" class="btn btn-default">
                           <i class="fas fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                     <thead>
                        <tr>
                           <th>Business Name</th>
                           <th>Email</th>
                           <th>Phone number</th>
                           <th>Website</th>
                           <th>Country</th>
                           <th>Address</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($vendors as $vendor)
                        <tr>
                          
                           <td>
                              {{$vendor->business_name}}
                           </td>
                           <td>{{$vendor->email}}</td>
                           <td>{{$vendor->phone}}</td>
                           <td>{{$vendor->website}}</td>
                           <td>{{$vendor->country}}</td>
                           
                           <td>
                              {{$vendor->Address}}
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
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection