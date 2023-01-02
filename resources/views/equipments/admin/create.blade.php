@extends('layouts.admin')
@section('title', 'Create Equipment')
@section('content')
<script src="{{ asset('/backend/plugins/jquery/jquery.min.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
   $(document).ready(function(){
      $('#business_type').change(function(e){                
         e.preventDefault();
         $('#categories').empty();
         var btype = $('#business_type').find(":selected").text();        
         $.ajax(
         {
            url: "{{route('categoryByBusinessType')}}",
            type: "GET",
         
            data: { type: btype},
            success: function (result) {
               for (var i = 0; i < result.length; i++) {
                  var select = document.getElementById("categories");
                  var option = document.createElement("option");
                  option.text = result[i].category;
                  option.value = result[i].id;
                  select.add(option);
               }  
               var id = $('#categories').find(":selected").val();   
               myFunction(id) ;
            },
            error: function () {
               $('#categories').empty();
            }
         });     
      });
      $('#categories').change(function(e){                
         e.preventDefault();
         var id = $('#categories').find(":selected").val();   
         myFunction(id) ;
      });
      
      function myFunction(id) {
         $('#subcategories').empty();            
         $.ajax(
         { 
            url: "{{route('SubCategoryByCategory')}}",
            type: "GET",
         
            data: { id: id},
            success: function (result) {
               for (var i = 0; i < result.length; i++) {
                  var select = document.getElementById("subcategories");
                  var option = document.createElement("option");
                  option.text = result[i].subcategory;
                  option.value = result[i].id;
                  select.add(option);
               }
            }
         });
   }


   $('#product_type1').change(function(e){                
         e.preventDefault();
         $('#categories1').empty();
         var btype = $('#product_type1').find(":selected").text();        
         $.ajax(
         {
            url: "{{route('categoryByBusinessType')}}",
            type: "GET",
         
            data: { type: btype},
            success: function (result) {
               for (var i = 0; i < result.length; i++) {
                  var select = document.getElementById("categories1");
                  var option = document.createElement("option");
                  option.text = result[i].category;
                  option.value = result[i].id;
                  select.add(option);
               }  
               var id = $('#categories1').find(":selected").val();   
               myFunction1(id) ;
            },
            error: function () {
               $('#categories1').empty();
            }
         });     
      });
      $('#categories1').change(function(e){                
         e.preventDefault();
         var id = $('#categories1').find(":selected").val();   
         myFunction1(id) ;
      });
      
      function myFunction1(id) {
         $('#subcategories1').empty();            
         $.ajax(
         { 
            url: "{{route('SubCategoryByCategory')}}",
            type: "GET",
         
            data: { id: id},
            success: function (result) {
               for (var i = 0; i < result.length; i++) {
                  var select = document.getElementById("subcategories1");
                  var option = document.createElement("option");
                  option.text = result[i].subcategory;
                  option.value = result[i].id;
                  select.add(option);
               }
            }
         });
   }
   });
        
</script>

<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Create Product Page</h1>
         </div>
      </div>
   </div>
</section>
<section class="content">
   <div class="container-fluid">
      <div class="card card-default collapsed-card">
         <div class="card-header">
            <h3 class="card-title"><a class="btn btn-tool" data-card-widget="collapse"> Quick Add Product</a></h3>
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse">
               <i class="fas fa-plus"></i>
               </button>
               <button type="button" class="btn btn-tool" data-card-widget="remove">
               <i class="fas fa-times"></i>
               </button>
            </div>
         </div>
         <div class="card-body">
            {!! Form::open(['route'=>'equipments.store', 'files' => true])  !!}
            <div class="row">
               <div class="col-md-3">
                  <div class="form-group">
                     <label>Product type</label>
                     <select name="product_type" id="product_type1" class="form-control select2" style="width: 100%;">
                     <option selected></option>
                        @foreach($product_types as $pt)
                        <option value="{{ $pt->id }}">{{ $pt->product_type }}</option>
                        @endforeach
                     </select>
                  </div>
                  <div class="form-group">
                     <label>Add to category</label>
                     <select name="idCategory"  id="categories1" class="form-control select2" style="width: 100%;">
                     
                        @foreach($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->category }}</option>
                        @endforeach
                     </select>
                     <a href="" data-toggle="modal" data-target="#modal-category" class="nav-link" >Add Category</a>
                  </div>
                  <div class="form-group">
                     <label>Subcategory</label>
                     <select name="idSubCategory"  id="subcategories1" class="form-control select2" style="width: 100%;">
                        <option selected="selected"></option>
                     </select>
                     <a href="" data-toggle="modal" data-target="#modal-subcategory" class="nav-link">Add Subcategory</a>
                  </div>
               </div>
               <div class="col-md-3"></div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Enter Product Name</label>
                     <input name="product_name" Placeholder="Enter Product Name" type="text" class="form-control">
                  </div>
               </div>
            </div>
            <hr/>
            <div class="from-group float-right" >
               <button type="submit" class="btn btn-success">Add +</button>
            </div>
         </div>
         {!!Form::close()!!}
      </div>
      <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title"> Add New Product</h3>
         </div>
         <div calss="row">
            <button class="btn btn-info float-right m-2" data-toggle="modal" data-target="#modal-vendors">Add Product to Existing Business</button>
         </div>
         
        
         <div class="card-body">
            {!! Form::open(['route'=>'equipments.store', 'files' => true])  !!}
            <div class="row">
               <div class="col-md-3">
                  <div class="form-group">
                     <label>Product type</label>
                     <select name="product_type"  id="business_type" class="form-control select2" style="width: 100%;">
                     <option selected></option>
                        @foreach($product_types as $pt)
                        <option value="{{ $pt->id }}">{{ $pt->product_type }}</option>
                        @endforeach
                     </select>
                  </div>
                  <div class="form-group">
                     <label>Select Category</label>
                     <div class="row">
                     <div class="col-md-10 p-0">
                        
                     <select name="idCategory" id="categories" class="form-control select2" style="width: 100%;">
                     </select>
</div>
<div class="col-md-2 p-0">
                     <a href="" id="addCat" data-toggle="modal" data-target="#modal-category" class="nav-link" ><i class="fa-solid fa-circle-plus"></i></a></div>    
</div>
                  </div>
                  <div class="form-group">
                     <label>Select Subcategory</label>
                     <div class="row">
                     <div class="col-md-10 p-0">
                     <select name="idSubcategory" id="subcategories" class="form-control select2" style="width: 100%;">
                     </select></div>
                     <div class="col-md-2 p-0">
                     <a href="" data-toggle="modal" id="addsubCat" data-target="#modal-subcategory" class="nav-link"><i class="fa-solid fa-circle-plus"></i></a>
</div>
</div>
                  </div>
               </div>
               
               <div class="col-md-3">
                  <div class="form-group">
                     <label>Brand Name</label>
                     <input name="brand_name" type="text" class="form-control">
                     <input name="idVendor" id="idVendor" type="hidden" class="form-control">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputFile">Upload logo</label>
                     <div class="input-group">
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" name="logo" id="exampleInputFile">
                           <label class="custom-file-label" for="exampleInputFile">Upload Logo</label>
                        </div>
                        <div class="input-group-append">
                           <span class="input-group-text">Upload</span>
                        </div>
                     </div>
                  </div>
                  
               </div>
               
               <div class="col-md-3">
                  <div class="form-group">
                     <label>Website</label>
                     <input type="text" class="form-control" name="website">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputFile">Upload Other Images</label>
                     <div class="input-group">
                        <div class="custom-file">
                           <input type="file" name="equip_images[]" class="custom-file-input" multiple />
                           <label class="custom-file-label" for="exampleInputFile">Upload Other Images</label>
                        </div>
                        <div class="input-group-append">
                           <span class="input-group-text">Upload</span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputFile">Upload Videos</label>
                     <div class="input-group">
                        <div class="custom-file">
                           <input type="file" name="equip_videos[]" class="custom-file-input" multiple />
                           <label class="custom-file-label" for="exampleInputFile">Upload Videos</label>
                        </div>
                        <div class="input-group-append">
                           <span class="input-group-text">Upload</span>
                        </div>
                     </div>
                  </div>
                  
               </div>
               <div class="col-md-3"></div>
               <div class="col-md-3"></div>
               <div class="col-md-6">
                     <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows=5 placeholder="Enter Description"></textarea>
                     </div>
                  </div>
                  
               
            </div>
<hr/>
            <div class="row float-right">
               <div class="from-group" >
                  <button class="btn btn-success">Add +</button>
               </div>
            </div>
           
            {!!Form::close()!!}
         </div>
      </div>
   </div>
   </div>
   </div>
</section>
<!--Categotry Modal-->
<div class="modal fade" id="modal-category">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Default Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            @include('categories/admin.create')
         </div>
         
      </div>
   </div>
</div>
</div>
<!--SubCategotry Modal-->
<div class="modal fade" id="modal-subcategory">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Add Subcategory</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            @include('subcategories/admin.create')
         </div>
         
      </div>
   </div>
</div>
<!--vendors Modal-->
<div class="modal fade" id="modal-vendors">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Add product to existing business</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class=form-group>
               <label>Choose from existing business</label>
               <select class="form-control select2" id="vendors" name="vendors">
                  <option selected></option>
                  @foreach($vendors as $v)
                     <option value="{{ $v->id }}">{{ $v->business_name }}</option>
                  @endforeach
               </select>
            </div>            
         </div>
         <div class="modal-footer justify-content-between">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button class="btn btn-info float-right" id="vendors_btn" type="button">Add to </button>
            </div>
         
      </div>
   </div>
</div>
<script>
   $(document).ready(function(){
      $('#vendors_btn').click(function(){
         var id = $('#vendors').find(":selected").val();
         var idVendor = document.getElementById('idVendor')    
         idVendor.value = id;
         $("#modal-vendors").modal('toggle');
      });
   });
</script>
@endsection