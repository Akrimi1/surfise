@extends('layouts.admin')
@section('title', 'Create Equipment')
@section('content')
<script src="{{ asset('/backend/plugins/dropzone/min/dropzone.min.js') }}"></script>
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
<<<<<<< HEAD
                     <select name="idCategory" class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
=======
                     <select name="idCategory"  id="category" class="form-control select2" style="width: 100%;">
                     @foreach($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->category }}</option>
                        
                     @endforeach
>>>>>>> 61d9beda7cc1c2fc9f9a50a9aaaadf622c6f0722
                     </select>
                     <a href="" class="nav-link" >Add Category</a>
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
<<<<<<< HEAD
                     <select name="idSubcategory" class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
=======
                     <select name="idSubCategory"  id="subcategory" class="form-control select2" style="width: 100%;">
                        <option selected="selected"></option>
>>>>>>> 61d9beda7cc1c2fc9f9a50a9aaaadf622c6f0722
                     </select>
                     <a href="" class="nav-link" >Add Subcategory</a>
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
<<<<<<< HEAD
                     <label>Select Category</label>
                     <select name="idCategory" class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
=======
                     <label>Add to category</label>
                     <select name="idCategory" class="form-control select2" style="width: 100%;">
                     @foreach($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->category }}</option>
                     @endforeach
>>>>>>> 61d9beda7cc1c2fc9f9a50a9aaaadf622c6f0722
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
<<<<<<< HEAD
                  <div class="form-group">
                     <label>Select Subcategory</label>
                     <select name="idSubcategory" class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
=======
               <div class="form-group">
                     <label>Subcategory</label>
                     <select name="idSubCategory" class="form-control select2" style="width: 100%;">
                        <option selected="selected"></option>
>>>>>>> 61d9beda7cc1c2fc9f9a50a9aaaadf622c6f0722
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
                  <div class="from-group">
                     <label>upload logo</label>
                     <button class="btn btn-success col fileinput-button">
                     <i class="fas fa-plus"></i>
                     <span>Add files</span>
                     </span>
                     </button>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Website</label>
                     <input type="text" class="form-control" name="website">
                  </div>
               </div>
               <div class="col-md-12 pt-3">
                  <div class="form-group">
                     <label>Description</label>
<<<<<<< HEAD
                     <textarea name="description" class="form-control" rows="4" placeholder="Enter ..."></textarea>
=======
                     <textarea class="form-control" name="description" rows="4" placeholder="Enter ..."></textarea>
>>>>>>> 61d9beda7cc1c2fc9f9a50a9aaaadf622c6f0722
                  </div>
               </div>
               <div class="card-body">
                  <div id="actions" class="row">
                     <div class="col-lg-6">
                        <div class="btn-group w-100">
                           <span class="btn btn-success col fileinput-button">
                           <i class="fas fa-plus"></i>
                           <span>Add files</span>
                           </span>
                           <button type="submit" class="btn btn-primary col start">
                           <i class="fas fa-upload"></i>
                           <span>Start upload</span>
                           </button>
                           <button type="reset" class="btn btn-warning col cancel">
                           <i class="fas fa-times-circle"></i>
                           <span>Cancel upload</span>
                           </button>
                        </div>
                     </div>
                     <div class="col-lg-6 d-flex align-items-center">
                        <div class="fileupload-process w-100">
                           <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                              <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="table table-striped files" id="previews">
                     <div id="template" class="row mt-2">
                        <div class="col-auto">
                           <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                        </div>
                        <div class="col d-flex align-items-center">
                           <p class="mb-0">
                              <span class="lead" data-dz-name></span>
                              (<span data-dz-size></span>)
                           </p>
                           <strong class="error text-danger" data-dz-errormessage></strong>
                        </div>
                        <div class="col-4 d-flex align-items-center">
                           <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                              <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                           </div>
                        </div>
                        <div class="col-auto d-flex align-items-center">
                           <div class="btn-group">
                              <button class="btn btn-primary start">
                              <i class="fas fa-upload"></i>
                              <span>Start</span>
                              </button>
                              <button data-dz-remove class="btn btn-warning cancel">
                              <i class="fas fa-times-circle"></i>
                              <span>Cancel</span>
                              </button>
                              <button data-dz-remove class="btn btn-danger delete">
                              <i class="fas fa-trash"></i>
                              <span>Delete</span>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div>
               <button class="btn btn-primary " type="submit">Create new Product</button>
            </div>
            {!!Form::close()!!}
         </div>
      </div>
   </div>
   </div>
</section>
<script>
   ///DropzoneJS Demo Code Start
   Dropzone.autoDiscover = false
         
         ///Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
         var previewNode = document.querySelector("#template")
         previewNode.id = ""
         var previewTemplate = previewNode.parentNode.innerHTML
         previewNode.parentNode.removeChild(previewNode)
         
         var myDropzone = new Dropzone(document.body, { ///                                              Make the whole body a dropzone
           url: "/target-url", ///Set the url
           thumbnailWidth: 80,
           thumbnailHeight: 80,
           parallelUploads: 20,
           previewTemplate: previewTemplate,
           autoQueue: false, ///Make sure the files aren't queued until manually added
           previewsContainer: "#previews", ///Define the container to display the previews
           clickable: ".fileinput-button" ///Define the element that should be used as click trigger to select files.
         })
         
         myDropzone.on("addedfile", function(file) {
           ////Hookup the start button
           file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
         })
         
         ///Update the total progress bar
         myDropzone.on("totaluploadprogress", function(progress) {
           document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
         })
         
         myDropzone.on("sending", function(file) {
           ///Show the total progress bar when upload starts
           document.querySelector("#total-progress").style.opacity = "1"
           //And disable the start button
           file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
         })
         
         //Hide the total progress bar when nothing's uploading anymore
         myDropzone.on("queuecomplete", function(progress) {
           document.querySelector("#total-progress").style.opacity = "0"
         })
         
         //Setup the buttons for all transfers
         //The "add files" button doesn't need to be setup because the config
         //`clickable` has already been specified.
         document.querySelector("#actions .start").onclick = function() {
           myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
         }
         document.querySelector("#actions .cancel").onclick = function() {
           myDropzone.removeAllFiles(true)
         }
         //DropzoneJS Demo Code End
</script>
@endsection