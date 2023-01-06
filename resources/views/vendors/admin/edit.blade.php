@extends('layouts.admin')
@section('title', 'Create Equipment')
@section('content')
<script src="{{ asset('/backend/plugins/jquery/jquery.min.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Create Profile Page</h1>
         </div>
      </div>
   </div>
</section>
<section class="content">
   <div class="container-fluid">
      <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title"> Profile page</h3>
         </div>
         <div class="card-body">
            {!! Form::open(['route'=>'vendors.store', 'files' => true]) !!}
            <div class="row">
               <div class="col-md-3">
                  <div class="form-group">
                     <label>Add Business type</label>
                     <select name="vendor_type" id="business_type" class="form-control select2" style="width: 100%;">
                        <option value="{{ $vendor->vendor_type }}" selected>{{ $vendor->vendor_type }}</option>
                        @foreach($business_types as $pt)
                        <option value="{{ $pt->product_type }}">{{ $pt->product_type }}</option>
                        @endforeach
                     </select>
                  </div>
                  
               </div>
               <div class="col-md-3">
                  <div class="form-group">
                     <label>Business name</label>
                     <input name="business_name" Placeholder="Enter Product Name" value="{{ $vendor->business_name }}" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                     <label>Address</label>
                     <input name="address" Placeholder="Enter Address" value="{{ $vendor->address }}" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                     <label>Country</label>
                     <select name="country" class="form-control select2" style="width: 100%;">
                        <option value="{{ $vendor->country}}" selected>{{ $vendor->country}}</option>
                        @foreach($countries as $c)
                        <option value="{{ $c->name }}">{{ $c->name }} - {{ $c->code }}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group">
                     <label>Website</label>
                     <input class="form-control" type="text" value="{{ $vendor->website }}" name="website" Placeholder="Website">
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Zip Code</label>
                           <input class="form-control" type="text" value="{{ $vendor->zipcode }}" name="zipconde" Placeholder="Zip code">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>State</label>
                           <input class="form-control" type="text" value="{{ $vendor->state }}" name="state" Placeholder="State">
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Phone</label>
                     <input class="form-control" type="text" value="{{ $vendor->phone }}" name="phone" Placeholder="Phone">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Description</label>
                     <textarea name="description"  class="form-control"> {{ $vendor->description }}</textarea>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Working hours</label>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                     Workng Hours
                     </button>
                     <div class="row">
                        <span></span>
                     </div>

                     <input type="hidden" id="workingDays" name="workingDays" value=""/>
                     <input type="hidden" id="workingFrom" name="workingFrom" value=""/>
                     <input type="hidden" id="workingTo" name="workingTo" value=""/>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-3">
                  <div class="form-group">
                     <label for="exampleInputFile">Upload logo</label>
                     <div class="input-group">
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" name="vendor_logo" id="exampleInputFile">
                           <label class="custom-file-label" for="exampleInputFile">Upload Logo</label>
                        </div>
                        <div class="input-group-append">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group">
                     <label for="exampleInputFile">Upload Other Images</label>
                     <div class="input-group">
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" name="vendor_images[]" id="exampleInputFile" multiple>
                           <label class="custom-file-label" for="exampleInputFile">Upload Other Images</label>
                        </div>
                        <div class="input-group-append">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <hr/>
            <div class="row float-right">
               <div class="from-group" >
                  <button class="btn btn-success">Add +</button>
               </div>
            </div>
         </div>
         {!!Form::close()!!}
      </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
         <h1 class="modal-title" id="exampleModalLabel">
         Work Hours
         </h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            @include('vendors/admin.workingHour_modal')
            </div>
   </div>
   </div>
</div>

<script type="text/javascript">
   $(document).ready(function(){
      $('#save').click(function(e){
        
         e.preventDefault();
         var workingDay=[];
         var workingFrom = [];
         var workingTo = [];
         var i=0;
         //$('#subcategory').empty();
         var days = $('select[name^="input_4"]').find(":selected").val();
         $(".gf-day-dropdown select[name^='input_4']").each(function() {
            workingDay[i] = this.value
            i++
           
         });
         i = 0
         $(".gf-start-time-dropdown select[name^='input_4']").each(function() {
            workingFrom[i] = this.value
            i++
         });
         i = 0
         $(".gf-end-time-dropdown select[name^='input_4']").each(function() {
            workingTo[i] = this.value
            i++
         });
        var wd = document.getElementById("workingDays").value = workingDay
        var wf = document.getElementById("workingFrom").value = workingFrom+","
        var wt = document.getElementById("workingTo").value = workingTo
          
        
      });
   }); 
</script>
{!!Form::close()!!}
</section>
@endsection