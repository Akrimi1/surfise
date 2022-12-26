@extends('layouts.admin')
@section('title', 'Create Equipment')
@section('content')
@push('subcat-ajax')
<script>
   $(document).ready(function(){
      $('#category').change(function(e){
        
         e.preventDefault();
         $('#subcategory').empty();
         var idcat = $('#category').find(":selected").val();
   
        
         $.ajax(
         {
            url: "/ajaxTest",
            type: "GET",
         
            data: { id: idcat},
            success: function (result) {
               for (var i = 0; i < result.length; i++) {
                  var select = document.getElementById("subcategory");
                  var option = document.createElement("option");
                  option.text = result[i].subcategory;
                  option.value = result[i].id;
                  select.add(option);
               }
            
            }
         });     
      });
   });
        
</script>
@endpush
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
      <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title"> Quick Add Product</h3>
         </div>
         <div class="card-body">
         {!! Form::open(['route'=>'equipments.store', 'files' => true])  !!}
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Product type</label>
                     <select name="product_type" class="form-control select2" style="width: 100%;">
                        <option>Accessory</option>
                        <option>Equipment</option>
                        <option>Product</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Add to category</label>
                     <select name="idCategory"  id="category" class="form-control select2" style="width: 100%;">
                     @foreach($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->category }}</option>
                        
                     @endforeach
                     </select>
                     <a href="" data-toggle="modal" data-target="#modal-category" class="nav-link" >Add Category</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Enter Product Name</label>
                     <input name="product_name" Placeholder="Enter Product Name" type="text" class="form-control">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Subcategory</label>
                     <select name="idSubCategory"  id="subcategory" class="form-control select2" style="width: 100%;">
                        <option selected="selected"></option>
                     </select>
                     <a href="" data-toggle="modal" data-target="#modal-subcategory" class="nav-link">Add Subcategory</a>
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
         <div class="card-body">
         {!! Form::open(['route'=>'equipments.store', 'files' => true])  !!}
            <div class="row">
               <div class="col-md-6">

                  <div class="form-group">


                     <label>Add to category</label>
                     <select name="idCategory" class="form-control select2" style="width: 100%;">
                     @foreach($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->category }}</option>
                     @endforeach
                     </select>
                     <a href="" class="nav-link" >add category</a>
                  </div>
                  <div class="form-group">
                     <label>Product type</label>
                     <select name="product_type" class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                     </select>

                  </div>
               </div>
               <div class="col-md-6">
               <div class="form-group">
                     <label>Subcategory</label>
                     <select name="idSubCategory" class="form-control select2" style="width: 100%;">
                        <option selected="selected"></option>
                     </select>
                     <a href="" class="nav-link" >Add Subcategory</a>
                  </div>
               </div>
            </div>
            <hr>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Brand Name</label>
                     <input name="brand_name" type="text" class="form-control">
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
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Website</label>
                     <input type="text" class="form-control" name="website">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputFile">Upload Other Images</label>
                     <div class="input-group">
                        <div class="custom-file">
                           <input type="file" name="equip_image[]" class="custom-file-input" multiple />
                           <label class="custom-file-label" for="exampleInputFile">Upload Other Images</label>
                        </div>
                        <div class="input-group-append">
                           <span class="input-group-text">Upload</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 pt-3">
                  <div class="form-group">
                     <label>Description</label>
                     <textarea name="description" class="form-control" rows="4" placeholder="Enter ..."></textarea>
                  </div>
               </div>
               
            </div>
            <div>
               <button class="btn btn-success float-right" type="submit">Add +</button>
            </div>
            {!!Form::close()!!}
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
         <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
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
         <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
         </div>
      </div>
   </div>
</div>

@endsection