@extends('layouts.admin')
@section('content')
<section class="wrapper">
   <h3><i class="fa fa-angle-right"></i> Categories management</h3>
   <!-- row -->
   <div class="row mt">
      <div class="col-md-12">
         <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
               <div class="row">
                  <div class="col-md-6">
           
               <div class="col-md-6">
               <a class="btn btn-primary "  href="{{ url('/categories/admin/create') }}" >Add categories</a>  
                  </div>
               </div>
               </div>
               <hr />
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Type</th>
                     <th></th>
                  </tr>
               </thead>
               @foreach($categories as $cat)
               <tbody>
                  <tr>
                  <td>{{$cat->category}}</td>
                     <td>{{$cat->type}}</td>                     
                     <td>
                        <div class="col-md-12">
                           <div class="row">
                              <div class="col">
                                 <a class="btn btn-primary btn-xs" href="{{ route('categories.edit', $cat->id)}}"> <i class="fa fa-pencil"></i> </a>
                                 <form class="col-md-2" method="post" action="{{ route('categories.destroy', $cat->id) }}">
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