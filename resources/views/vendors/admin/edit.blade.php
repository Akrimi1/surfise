@extends('layouts.admin')
@section('content')
<section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Create Vendor</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <form method="post" action="{{ route('vendors.update', $vendor->id) }}">
        @method('PATCH') 
            @csrf
        <div class="row mt">
          <div class="col-lg-12">
          <div class="form-panel form-horizontal style-form">
          
          <div class="row">
                  <div class="col-md-6">
               <div class="col-md-6">
               <a class="btn btn-primary "  href="/vendors/admin" >Back to list</a>  
                  </div>
               </div>
               </div>
               <hr />
              <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >Vendor name</label
                  >
                  <div class="col-sm-10">
                  <input
                     type="text"
                     class="form-control"
                     placeholder="vendor name"
                     name="vendor_name"
                     value="{{ $vendor->vendor_name }}"
                     />
               </div>
            </div>
            <div class="form-group">
         <label class="col-sm-2 col-sm-2 control-label"
            >Description</label
            >
         <div class="col-sm-10">
            <textarea
               id="description"
               placeholder="your Description"
               class="box form-control"
               cols="30"
               rows="10"
               name="description"
               >{{ $vendor->description }}</textarea>
         </div>
      </div>



      <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >Change Country:</label
                  >
               <div class="col-sm-10">
               <select class="form-control" name="country">
               @foreach ($countries as $country)
                 <option value="{{$country->name}}" >{{$country->name}} - {{$country->code}}</option>
                  @endforeach
                  </select>
               </div>
            </div> 

<div class="form-group">
         <label class="col-sm-2 col-sm-2 control-label">Country</label>
         <div class="col-sm-10">
            <input
               type="text"
               class="form-control"
               placeholder="country"
               name="oldcountry"
               readonly
               value="{{ $vendor->country }}"
               />
         </div>
      </div>


      <div class="form-group">
         <label class="col-sm-2 col-sm-2 control-label">State</label>
         <div class="col-sm-10">
            <input
               type="text"
               class="form-control"
               placeholder="State"
               name="state"
               value="{{ $vendor->state }}"
               />
         </div>
      </div>
      <div class="form-group">
         <label class="col-sm-2 col-sm-2 control-label">Longitude</label>
         <div class="col-sm-10">
            <input
               type="text"
               class="form-control"
               placeholder="Longitude"
               name="longitude"
               value="{{ $vendor->longitude }}"
               />
         </div>
      </div>
      <div class="form-group">
         <label class="col-sm-2 col-sm-2 control-label">Latitude</label>
         <div class="col-sm-10">
            <input
               type="text"
               class="form-control"
               placeholder="Latitude"
               name="latitude"
               value="{{ $vendor->latitude }}"
               />
         </div>
      </div>
     <!-- <div class="form-group last">
               <label class="control-label col-md-3">Image Vendor Upload</label>
               <div class="col-md-9">
                  <div
                     class="fileupload fileupload-new"
                     data-provides="fileupload"
                     >
                     <div>
                        <span class="btn btn-theme02 btn-file">
                        <span class="fileupload-new"
                           ><i class="fa fa-paperclip"></i> Select
                        image vendor</span
                           >
                        <span class="fileupload-exists"
                           ><i class="fa fa-undo"></i> Change</span
                           >
                        <input type="file" name="vendor_image[]" class="default" multiple />
                        </span>
                       
                     </div>
                  </div>
               </div>
            </div> 
            <div class="form-group last">
               <label class="control-label col-md-3">Logo Upload</label>
               <div class="col-md-9">
                  <div
                     class="fileupload fileupload-new"
                     data-provides="fileupload"
                     >
                     <div>
                        <span class="btn btn-theme02 btn-file">
                        <span class="fileupload-new"
                           ><i class="fa fa-paperclip"></i> Select
                        Logo</span
                           >
                        <span class="fileupload-exists"
                           ><i class="fa fa-undo"></i> Change</span
                           >
                        <input type="file" name="vendor_logo[]" class="default" multiple/>
                        </span>
                        
                     </div>
                  </div>
               </div>
            </div>-->
         <div>
      <button class="btn btn-primary " type="submit">Add vendors</button>
      </div>
     
      </div>
    
            


            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
        <!-- INLINE FORM ELELEMNTS -->
        </from>
     
        <!-- /row -->
      </section>
      @endsection