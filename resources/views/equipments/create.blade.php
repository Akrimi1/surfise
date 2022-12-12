@extends('layouts.admin')
@section('content')

<section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Equipment management</h3>
        <!-- BASIC FORM ELELEMNTS -->
       {!! Form::open(['route'=>'equipments.store', 'files' => true]) !!}
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
               <option></option>
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
      <label class="col-sm-2 col-sm-2 control-label"
            >Sub Category</label>
            <div class="col-sm-10">
      <select multiple data-role="tagsinput">
         <option value="Amsterdam">Amsterdam</option>
         <option value="Washington">Washington</option>
         <option value="Sydney">Sydney</option>
         <option value="Beijing">Beijing</option>
         <option value="Cairo">Cairo</option>
      </select>
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
               value="test"
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
               value="test"
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
               value="test"
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
               
               > value="test"</textarea>
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
               > value="test"</textarea>
         </div>
      </div>
       
      <div class="form-group last">
         <label class="control-label col-md-3">Image Upload</label>
         <div class="col-md-9">
            <div
               class="fileupload fileupload-new"
               data-provides="fileupload"
               >
               <div
                  class="fileupload-new thumbnail"
                  style="width: 200px; height: 150px"
                  >
                  <img
                     src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image"
                     alt=""
                     />
               </div>
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
               <div
                  class="fileupload-new thumbnail"
                  style="width: 200px; height: 150px"
                  >
                  <img
                     src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image"
                     alt=""
                     />
               </div>
               
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
      @endsection