@extends('layouts.admin')
@section('title', 'Vendors Management')
@section('content')
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Brands/Product Library Page</h1>
            <span>Welcome to our brand and products library. Here you can search all of our brand and product listings</span>
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
                  <h3 class="card-title">

<div class="d-inline p-2 text-white"><a href="#" class="">Search Brands</a></div>
<div class="d-inline p-2 text-white"><a href="#" class="">Search Product</a></div>
<div class="d-inline p-2 text-white"><a href="#" class="">Home</a></div>

                  </h3>
                  <div class="card-tools">
                     <div class="input-group input-group-sm" style="width: 150px;">
                        <select class="form-control" name="filter" id="searchFilter">
                           <option selected>Filter</option>
                           <option value="da">Date Added</option>
                           <option value="ad">Added By</option>
                           <option value="bc">By Category</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="card-body p-0">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="row p-3">
                              <div class="col-md-3">
                           <!--when click on the link it will be changed to "-->
                           <label>Jay Flex Fitnes 3 Products</label>
               </div>
                        <div class="col-md-4">
                           <div class="input-group input-group-sm">
                           <input type="text" name="search" class="form-control float-right" placeholder="Search">
                           <div class="input-group-append">
                              <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                              </button>
                           </div>
                        </div>
                        
               </div>
               <div class="col-md-5">
                  <a class="btn btn-info float-right" href="{{ url('equipments/admin/create') }}">Add Product</a>
               </div>
               

                     </div>
                        </div>
                        <div class="card-body table-responsive p-0 pt-1">
                     <table class="table table-hover text-nowrap">
                        <thead>
                           <tr>
                              
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>Category - subcategory</td>
                              <td>Product name</td>
                              <td>Product name</td>
                              <td>Description</td>
                              <td>image</td>
                              
                              <td>
                                 delete & edit
                              </td>
                              <td class="col-md-1">
                                 <div class="col-md-12">
                                    <div class="row">
                                       <div class="col-md-1">
                                          <!-- <a class="btn btn-primary btn-xs" href=""> <i class="fa fa-pencil"></i> </a>-->
                                       </div>
                                       <!-- <div class="col-md-1">
                                          <form class="col-md-2" method="post" action="">
                                             @csrf
                                             @method('DELETE')
                                             <button class="btn btn-danger btn-xs">
                                             <i class="fa fa-trash-o"></i>
                                             </button>
                                          </form>
                                          </div>-->
                                    </div>
                                 </div>
                              </td>
                           </tr>                          
                        </tbody>
                     </table>
                  </div>
                  <div class="float-right">
                     {{-- @if($subcategories->count()>=50) --}}
                        {{-- {{ $subcategories->links() }} --}}
                        {{-- @endif --}}
                  </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection