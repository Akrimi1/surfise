@extends('layouts.admin')
@section('title', 'Create Vendor')
@section('content')
<section class="wrapper">
   <h3><i class="fa fa-angle-right"></i> Create Vendor</h3>
   <!-- BASIC FORM ELELEMNTS -->
   <div class="row mt">
      <div class="col-lg-12">
         <div class="form-panel form-horizontal style-form">
            {!! Form::open(['route'=>'vendors.store', 'files' => true]) !!}
            <div class="row">
               <div class="col-md-6">
                  <div class="col-md-6">
                     <a class="btn btn-primary "  href="{{ url('/vendors/admin') }}" >Back to list</a>  
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
                     />
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >Vendor profession</label
                  >
               <div class="col-sm-10">
                  <input
                     type="text"
                     class="form-control"
                     placeholder="Body Composition Expert"
                     name="profession"
                     />
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >Certification</label
                  >
               <div class="col-sm-10">
                  <input
                     type="text"
                     class="form-control"
                     placeholder=""
                     name="certification"
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
                     ></textarea>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >Select Country:</label
                  >
               <div class="col-sm-10">
                  <select class="form-control" name="country">
                     <option value="United States - US" selected>United States - US</option>
                     @foreach ($countries as $country)
                     <option value="{{$country->name}} - {{ $country->code }}" >{{$country->name}} - {{$country->code}}</option>
                     @endforeach
                  </select>
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
               <label class="control-label col-md-3">Vendor Image Upload</label>
               <div class="col-md-9">
                  <div
                     class="fileupload fileupload-new"
                     data-provides="fileupload"
                     >
                     <div>
                        <span class="btn btn-theme02 btn-file">
                        <span class="fileupload-new"
                           ><i class="fa fa-paperclip"></i> Select
                        vendor image</span
                           >
                        <span class="fileupload-exists"
                           ><i class="fa fa-undo"></i> Change</span
                           >
                        <input type="file" name="vendor_image" class="default" />
                        </span>
                     </div>
                  </div>
               </div>
            </div>
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
   {!!Form::close()!!}
   <!-- /row -->
</section>
@endsection