@extends('layouts.admin')
@section('title', 'Restaurants Management')
@section('content')
<section class="wrapper">
   <h3><i class="fa fa-angle-right"></i> Restaurants management</h3>
   <!-- row -->
   <div class="row mt">
      <div class="col-md-12">
         <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
               <div class="row">
                  <div class="col-md-6">
                     <div class="col-md-6">
                        <a class="btn btn-primary "  href="{{ url('/restaurants/admin/create') }}" >Add Restaurants</a>  
                     </div>
                  </div>
               </div>
               <hr />
               <thead>
                  <tr>
                     <th>restaurant image</th>
                     <th>restaurant name</th>
                     <th>Website</th>
                     <th>Working hours</th>
                     <th></th>
                  </tr>
               </thead>
               @foreach($restaurants as $restaurant)
               <tbody>
                  <tr>
                     <td class="col-md-1">
                        <img src="{{ asset('images/restaurants/' . $restaurant->logo)}}" class="thumbnail" width="100%" />
                     </td>
                     <td>
                        {{$restaurant->name}}
                     </td>
                     <td>{{$restaurant->website}}</td>
                     <td>
                        {{$restaurant->workingHours}}
                     </td>
                     <td class="col-md-1">
                        <div class="col-md-12">
                           <div class="row">
                              <div class="col-md-1">
                                 <a class="btn btn-primary btn-xs" href="{{ route('admin.edit', $restaurant->id)}}"> <i class="fa fa-pencil"></i> </a>
                              </div>
                              <div class="col-md-1">
                                 <form class="col-md-2" method="post" action="{{ route('restaurants.destroy', $restaurant->id) }}">
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