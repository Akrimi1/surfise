@extends('layouts.admin')
@section('title', 'Create Equipment')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('content')
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Add Content Fields Page</h1>
         </div>
      </div>
   </div>
</section>
<section class="content">
   <div class="container-fluid">
      <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title"> Add Content Field</h3>
</div>
               <div class="card-body table-responsive p-0 pt-1">
                  <table class="table table-hover text-nowrap">
                     <thead>
                        <tr>             
                           <th><a href="" data-toggle="modal" data-target="#modal-editcat" title="Click to modify">{{ $category->category  }}</th></a>
                           <th></th>
                           
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($subcategories as $subcat)
                        <tr>                          
                              <td>
                              {{ $subcat->subcategory}}
                                 </td>
                           <td class="col-md-1">
                              <div class="col-md-12">
                                 <div class="row">
                                    <div class="col-md-5">
                                      <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-editsub"><i class="fa fa-pencil"></i></a>
                                    </div>
                                   <div class="col-md-1">
                                       <form class="col-md-2" action="{{ route('subcategories.destroy', $subcat->id) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button class="btn btn-danger btn-xs">
                                          <i class="fa fa-trash"></i>
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
   </div>
</section>
<!--Categotry Modal-->
<div class="modal fade" id="modal-editcat">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Edit Category</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            @include('categories/admin.edit')
         </div>
         
      </div>
   </div>
</div>
</div>
<!--SubCategotry Modal-->
<div class="modal fade" id="modal-editsub">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Edit Subcategory</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            @include('subcategories/admin.edit')
         </div>
         
      </div>
   </div>
</div>
</div>
@endsection