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
   </div>
</section>
<section class="content">
   <div class="container-fluid">
      <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title"> Quick Add Product</h3>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Product type</label>
                     <select class="form-control select2" style="width: 100%;">
                        <option>Accessory</option>
                        <option>Equipment</option>
                        <option>Product</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Add to category</label>
                     <select name="category" class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                     </select>
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
                     <select name="subcategory" class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                     </select>
                  </div>
               </div>
            </div>
            <hr/>
            <div class="from-group float-right" >
               <button class="btn btn-success">Add +</button>
            </div>
         </div>
      </div>
      <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title"> Add New Product</h3>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Product type</label>
                     <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label>select Category</label>
                     <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label>select subcategory</label>
                     <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Multiple</label>
                     <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                     <button class="btn btn-primary" >add category</button>
                  </div>
                  <div class="form-group">
                     <button class="btn btn-primary" >Add Subcategory</button>
                  </div>
               </div>
            </div>
            
         </div>         
   </div>
   </div>
</section>
@endsection
