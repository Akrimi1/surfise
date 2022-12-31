@extends('layouts.admin')
@section('title', 'Create Equipment')
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
                           <th>Subcategories</th>
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
                                    <div class="col-md-1">
                                      <a class="btn btn-primary btn-xs" href=""> <i class="fa fa-pencil"></i> </a>
                                    </div>
                                   <div class="col-md-1">
                                       <form class="col-md-2" action="{{ route('subcategories.destroy', $subcat->id)}}" method="post">
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
   </div>
</section>
@endsection