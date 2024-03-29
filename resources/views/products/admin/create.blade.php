@extends('layouts.admin')
@section('title', 'Create Product')
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
<section class="wrapper">
   <h3><i class="fa fa-angle-right"></i> Products management</h3>
   <!-- BASIC FORM ELELEMNTS -->
   <div class="row mt">
      <div class="col-lg-12">
         <div class="form-panel form-horizontal style-form">
            {!! Form::open(['route'=>'products.store', 'files' => true])  !!}
            <div class="row">
               <div class="col-md-6">
                  <div class="col-md-6">
                     <a class="btn btn-primary "  href="{{url('/products/admin') }}" >Back to list</a>  
                  </div>
               </div>
            </div>
            <hr />
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >Vendor</label
                  >
               <div class="col-sm-10">
                  <select class="form-control"  
                     name="idVendor">
                     @foreach($vendors as $v)
                     <option value="{{ $v->id }}">{{ $v->vendor_name }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >category</label
                  >
               <div class="col-sm-10">
                  <select class="form-control"  
                     name="idCategory"
                     id="category">
                     <option selected></option>
                     @foreach($categories as $c)
                     <option value="{{ $c->id }}">{{ $c->category }}</option>
                     <option style="display:none">{{ $c->id }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >SubCategory</label
                  >
               <div class="col-sm-10">
                  <select class="form-control"  
                     name="idSubCategory"
                     id="subcategory">
                            <option selected></option>        
                  </select>
                  <div class="alert"></div>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >Reference</label
                  >
               <div class="col-sm-10">
                  <input
                     type="text"
                     class="form-control"
                     placeholder="Reference"
                     name="reference"
                     />
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label">Name</label>
               <div class="col-sm-10">
                  <input
                     type="text"
                     class="form-control"
                     placeholder="name"
                     name="name"
                     />
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >Description</label
                  >
               <div class="col-sm-10">
                  <textarea
                     id="Description"
                     placeholder="your Description"
                     class="box form-control"
                     cols="30"
                     rows="10"
                     name="description"
                     > </textarea>
               </div>
            </div>
            <div class="form-group last">
               <label class="control-label col-md-3">Image Upload</label>
               <div class="col-md-9">
                  <div
                     class="fileupload fileupload-new"
                     data-provides="fileupload"
                     >
                     <div>
                        <span class="btn btn-theme02 btn-file">
                        <span class="fileupload-new"
                           ><i class="fa fa-paperclip"></i> Select
                        image</span
                           >
                        <span class="fileupload-exists"
                           ><i class="fa fa-undo"></i> Change</span
                           >
                        <input type="file" name="product_image[]" class="default" multiple />
                        </span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="form-group last">
               <label class="control-label col-md-3">Video Upload</label>
               <div class="col-md-9">
                  <div
                     class="fileupload fileupload-new"
                     data-provides="fileupload"
                     >
                     <div>
                        <span class="btn btn-theme02 btn-file">
                        <span class="fileupload-new"
                           ><i class="fa fa-paperclip"></i> Select
                        Video</span
                           >
                        <span class="fileupload-exists"
                           ><i class="fa fa-undo"></i> Change</span
                           >
                        <input type="file" name="product_video[]" class="default" multiple/>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >Rating Stars</label
                  >
               <div class="col-sm-10">
                  <select class="form-control"  
                     name="rating">
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                  </select>
               </div>
            </div>
            <div>
               <button class="btn btn-primary " type="submit">Add Products</button>
            </div>
            {!!Form::close()!!}
         </div>
      </div>
      <!-- col-lg-12-->
   </div>
   <!-- /row -->
   <!-- INLINE FORM ELELEMNTS -->
   <!-- /row -->
</section>
<script>
   // The DOM element you wish to replace with Tagify
   var input = document.querySelector('input[name=tags]');
   
   // initialize Tagify on the above input node reference
   new Tagify(input)
</script>
@endsection