
@extends('layouts.admin')
@section('content')
<section class="wrapper">
   <h3><i class="fa fa-angle-right"></i> Equipment management</h3>
   <!-- BASIC FORM ELELEMNTS -->
   
   <div class="row mt">
      <div class="col-lg-12">
         <div class="form-panel form-horizontal style-form">
         {!! Form::open(['route'=>'equipments.store', 'files' => true])  !!}
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >Vendor</label
                  >
               <div class="col-sm-10">
                  <select class="form-control"  
                     name="idVendor">
                     <option>1</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >Rating Stars</label
                  >
               <div class="col-sm-10">
                  <select class="form-control"  
                     name="rating">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                     <option>5</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >category</label
                  >
               <div class="col-sm-10">
                  <select class="form-control"  
                     name="idCategory">
                     <option>1</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label"
                  >Sub Category</label>
               <div class="col-sm-10">
                  <input name='tags' value='' class="form-control" autofocus>
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
               <label class="col-sm-2 col-sm-2 control-label">Type</label>
               <div class="col-sm-10">
                  <input
                     type="text"
                     class="form-control"
                     placeholder="type"
                     name="type"
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
                        <input type="file" name="equip_image[]" class="default" multiple />
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
                        <input type="file" name="equip_video[]" class="default" multiple/>
                        </span>
                        
                     </div>
                  </div>
               </div>
            </div>
            <div>
               <button class="btn btn-primary " type="submit">Add equipments</button>
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