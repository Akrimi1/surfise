@extends('layouts.admin')
@section('title', 'Create Restaurant')

@section('content')
<section class="wrapper">
   <h3><i class="fa fa-angle-right"></i> Create Restaurants</h3>
   <!-- BASIC FORM ELELEMNTS -->
   <div class="row mt">
      <div class="col-lg-12">
         <div class="form-panel form-horizontal style-form">
         {!! Form::open(['route'=>'restaurants.store', 'files' => true])  !!}
            <div class="row">
               <div class="col-md-6">
                  <div class="col-md-6">
                     <a class="btn btn-primary "  href="{{ url('/restaurants/admin') }}" >Back to list</a>  
                  </div>
               </div>
            </div>
            <hr />
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >Restaurant name</label
                  >
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
               <label class="col-sm-2 col-sm-2 control-label">Website</label>
               <div class="col-sm-10">
                  <input
                     type="text"
                     class="form-control"
                     placeholder="Website"
                     name="website"
                     />
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label">Working Hours</label>
               <div class="col-sm-10">
                  <div class="row">
                     <div class="col-sm-3">
                  <input type="text" class="form-control" placeholder="From 11:30" name="fromHour" />
                  
               </div>
               <div class="col-sm-2">
               <select class="form-control" name="fromAP">
                     <option value="AM" selected>AM</option>
                     <option value="PM">PM<option>
                  </select>
                  </div>
               <div class="col-sm-3">
                  <input type="text" class="form-control" placeholder="To 11:30" name="toHour" />
               </div>
               <div class="col-sm-2">
               <select class="form-control" name="toAP">
                     <option value="AM">AM</option>
                     <option value="PM" selected>PM<option>
                  </select>
                  </div>
               </div>
               </div>
            </div>
            <div class="form-group last">
               <label class="control-label col-md-3">Restaurant logo Upload</label>
               <div class="col-md-9">
                  <div
                     class="fileupload fileupload-new"
                     data-provides="fileupload"
                     >
                     <div>
                        <span class="btn btn-theme02 btn-file">
                        <span class="fileupload-new"
                           ><i class="fa fa-paperclip"></i> Select
                        restaurant logo</span
                           >
                        <span class="fileupload-exists"
                           ><i class="fa fa-undo"></i> Change</span
                           >
                        <input type="file" name="logo" class="default" />
                        </span>
                     </div>
                  </div>
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
                        <input type="file" name="restaurant_image[]" class="default" multiple />
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
                        <input type="file" name="restaurant_video[]" class="default" multiple/>
                        </span>
                     </div>
                  </div>
               </div>
            </div>

            
            <div>
               <button class="btn btn-primary " type="submit">Add Restaurant</button>
            </div>
         </div>
      </div>
   </div>
   <!-- col-lg-12-->
   </div>
   <!-- /row -->
   <!-- INLINE FORM ELELEMNTS -->
   {!!Form::close()!!}
   <!-- /row -->
</section>
@endsection