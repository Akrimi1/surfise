@extends('layouts.admin')
@section('title', 'Create Equipment')
@section('content')
<script src="{{ asset('/backend/plugins/jquery/jquery.min.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  

<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Edit Product Page</h1>
         </div>
      </div>
   </div>
</section>
<section class="content">
   <div class="container-fluid">
      
      <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title"> Edit Product</h3>
         </div>
         <div calss="row">
            <!--<button class="btn btn-info float-right m-2" data-toggle="modal" data-target="#modal-vendors">Add Product to Existing Business</button>-->
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
                     <option value="" selected></option>
                     @foreach($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->category }}</option>
                        @endforeach
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
                     <option value="" selected></option>
                     @foreach($categories as $c)
                   @foreach($c->subcategories as $subcat)
                        <option value="{{ $subcat->id }}">{{ $subcat->subcategory }}</option>
                      @endforeach
                        @endforeach
                     </select></div>
                     <div class="col-md-2 p-0">
                     <a href="" data-toggle="modal" id="addsubCat" data-target="#modal-subcategory" class="nav-link"><i class="fa-solid fa-circle-plus"></i></a>
</div>
</div>
                  </div>
               </div>
               
               <div class="col-md-3">
               <div class="form-group">
                     <label></label>
                     <input name="brand_name" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                     <label>Brand Name</label>
                     <input name="brand_name" value="{{ $vendor->brand_name }}" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputFile">Upload logo</label>
                     <div class="input-group">
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" name="logo" id="exampleInputFile">
                           <label class="custom-file-label" for="exampleInputFile">Upload logo</label>
                        </div>
                        <div class="input-group-append">
                        </div>
                     </div>
                  </div>
                  
               </div>
               
               <div class="col-md-3">
                  <div class="form-group">
                     <label>Website</label>
                     <input type="text" class="form-control" value="{{ $vendor->website }}" name="website">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputFile">Upload Other Images</label>
                     <div class="input-group">
                        <div class="custom-file">
                           <input type="file" name="equip_images[]" class="custom-file-input" multiple />
                           <label class="custom-file-label" for="exampleInputFile">Upload Other Images</label>
                        </div>
                        <div class="input-group-append">
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
                        </div>
                     </div>
                  </div>
                  
               </div>
               <div class="col-md-3"></div>
               <div class="col-md-3"></div>
               <div class="col-md-6">
                     <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows=5 placeholder="Enter Description">{{ $vendor->description }}</textarea>
                     </div>
                  </div>
                  
               
            </div>
<hr/>
            <div class="row float-right">
               <div class="from-group" >
                  <button class="btn btn-success">Update </button>
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