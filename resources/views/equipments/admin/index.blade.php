@extends('layouts.admin')
@section('content')
<section class="wrapper">
   <h3><i class="fa fa-angle-right"></i> Equipment management</h3>
   <!-- row -->
   <div class="row mt">
      <div class="col-md-12">
         <div class="content-panel">
         <table class="table table-striped table-advance table-hover">
            <div class="row">
                  <div class="col-md-6">
               <div class="col-md-6">
               <a class="btn btn-primary "  href="{{ url('/equipments/admin/create') }}" >Add Equipments</a>  
                  </div>
               </div>
               </div>
               <hr />
               <thead>
                  <tr>
                     <th>Equipment image</th>
                     <th>Reference</th>
                     <th>Name</th>
                     <th>Type</th>
                     <th>Category</th>
                     <th></th>
                  </tr>
               </thead>
               @foreach($equipments as $equip)
               <tbody>
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
                     <td>
                        <div class="col-md-12">
                           <div class="row">
                              <div class="col">
                                 <a class="btn btn-primary btn-xs" href="{{ route('equipments.edit', $equip->id)}}"> <i class="fa fa-pencil"></i> </a>
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