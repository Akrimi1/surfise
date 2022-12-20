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
                  <option value="{{$vendor->country}}">{{$vendor->country}}</option>
               @foreach ($countries as $country)
                 <option value="{{$country->name}} - {{$country->code}}" >{{$country->name}} - {{$country->code}}</option>
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
               value="{{$vendor->country}}"
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
         <label class="col-sm-2 col-sm-2 control-label">Street Address</label>
         <div class="col-sm-10">
            <input
               type="text"
               class="form-control"
               placeholder="Street Address"
               name="streetAddress"
               value="{{ $vendor->streetAddress }}"
               />
         </div>
      </div>

      <!---Info-->
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label">Email</label>
               <div class="col-sm-10">
                  <input
                     type="text"
                     class="form-control"
                     placeholder="Email"
                     name="email"
                     value="{{ $vendor->email }}"
                     />
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label">Phone Number</label>
               <div class="col-sm-10">
                  <input
                     type="text"
                     class="form-control"
                     placeholder="Phone Number"
                     name="phone"
                     value="{{ $vendor->phone }}"
                     />
               </div>
               <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label">Website</label>
               <div class="col-sm-10">
                  <input
                     type="text"
                     class="form-control"
                     placeholder="Website Number"
                     name="website"
                     value="{{ $vendor->website }}"
                     />
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label">Working Hours</label>
               <div class="col-sm-10">
               <label class="control-label">{{ $vendor->workingHours }}</label>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"></label>
              

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
      <button class="btn btn-primary " type="submit">Update Vendor</button>
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