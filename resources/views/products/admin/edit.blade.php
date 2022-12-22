@extends('layouts.admin')
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
       
        <form method="post" class="form-horizontal style-form" action="{{ route('products.update', $product->id) }}">
        @method('PATCH') 
            @csrf
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
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
            >old Vendor</label
            >
         <div class="col-sm-10">
            <input
               type="text"
               class="form-control"
               placeholder="idVendor"
               readonly
               value="{{ $v->vendor_name }}"
               />
         </div>
      </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >category</label
                  >
               <div class="col-sm-10">
                  <select class="form-control"  
                     id="category"
                     name="idCategory">
                     @foreach($categories as $c)
                     <option value="{{ $c->id }}">{{ $c->category }}</option>
                     <option style="display:none">{{ $c->id }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <div class="form-group">
         <label class="col-sm-2 col-sm-2 control-label"
            >old category</label
            >
         <div class="col-sm-10">
            <input
               type="text"
               class="form-control"
               readonly
               value="{{ $c->category }}"
               />
         </div>
      </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >SubCategory</label
                  >
               <div class="col-sm-10">
                  <select class="form-control"  
                     name="subcategory"
                     id="subcategory">
                     <option value="{{ $subSelected }}" selected>{{ $subSelected->subcategory }}</option> 
                     @foreach($subCat as $s)
                        @while($s->subcategory != $subSelected->subcategory)
                        <option value="{{ $s->subcategory }}">{{  $s->subcategory }}</option> 
                        @endwhile
                     @endforeach            
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
               placeholder="Referance"
               name="ref"
               value="{{ $equip->ref }}"
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
               value="{{ $equip->name }}"
               />
         </div>
      </div>
      <div class="form-group">
         <label class="col-sm-2 col-sm-2 control-label">Type</label>
         <div class="col-sm-10">
            <input
               type="text"
               class="form-control"
               placeholder="type"
               name="type"
               value="{{ $equip->type }}"
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
               >{{ $equip->description }}</textarea>
         </div>
      </div>
      <div class="form-group">
         <label class="col-sm-2 col-sm-2 control-label"
            >Details</label
            >
         <div class="col-sm-10">
            <textarea
               id="Details"
               placeholder="your Details"
               class="box form-control"
               cols="30"
               rows="10"
               name="details"
               >{{ $equip->details }}</textarea>
         </div>
      </div>
      <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >Rating Stars</label
                  >
               <div class="col-sm-10">
                  <select class="form-control"  
                     name="rating">
                     <option value="{{ $equip->rating }}" selected>{{ $equip->rating }}</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                  </select>
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
                     <input type="file" name="equip_image[]" class="default" multiple />
                  </span>
                  <a
                     href="advanced_form_components.html#"
                     class="btn btn-theme04 fileupload-exists"
                     data-dismiss="fileupload"
                     ><i class="fa fa-trash-o"></i> Remove</a
                     >
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
                  <input type="file" name="equip_video[]" class="default" multiple/>
                  </span>
                  <a
                     href="advanced_form_components.html#"
                     class="btn btn-theme04 fileupload-exists"
                     data-dismiss="fileupload"
                     ><i class="fa fa-trash-o"></i> Remove</a
                     >
               </div>
            </div>
         </div>
      </div>
      <div>
      <button class="btn btn-primary " type="submit">Update equipments</button>
      </div>           
</form>
   </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
        <!-- INLINE FORM ELELEMNTS -->
        
            
        <!-- /row -->
        
      </section>
      @endsection