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
                           <th>Product Image</th>
                           <th>Reference</th>
                           <th>Name</th>
                           <th>Type</th>
                           <th>Category</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($equipments as $equip)
                        <tr>
                           <td class="col-md-1">
                              <img src="{{ asset('images/equipments/' . $equip->images[0]->path)}}" class="thumbnail" width="100%" />
                           </td>
                           <td>
                              {{$equip->ref}}
                           </td>
                           <td class="hidden-phone">{{$equip->name}}</td>
                           <td>{{$equip->type}}</td>
                           <td>{{$equip->category->category}}</td>
                           <td class="col-md-1">
                              <div class="col-md-12">
                                 <div class="row">
                                    <div class="col-md-1">
                                       <a class="btn btn-primary btn-xs" href="{{ route('equipments.edit', $equip->id)}}"> <i class="fa fa-pencil"></i> </a>
                                    </div>
                                    <div class="col-md-1">
                                       <form class="col-md-2" method="post" action="{{ route('equipments.destroy', $equip->id) }}">
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