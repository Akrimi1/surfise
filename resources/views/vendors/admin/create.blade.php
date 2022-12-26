@extends('layouts.admin')
@section('title', 'Create Equipment')
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
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Add Business type</label>
                     <select name="vendor_type" class="form-control select2" style="width: 100%;">
                        <option>Accessory</option>
                        <option>Equipment</option>
                        <option>Product</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Select Category</label>
                     <select name="category" class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label>Select Subcategory</label>
                     <select name="subcategory" class="form-control select2" style="width: 100%;">
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                     </select>
                  </div>
               </div>
            </div>
            <hr/>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Business name</label>
                     <input name="product_name" Placeholder="Enter Product Name" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                     <label>Address</label>
                     <input name="address" Placeholder="Enter Address" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                     <label>Country</label>
                     <select name="country" class="form-control select2" style="width: 100%;">
                        <option>Alaska</option>
                        <option>California</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Website</label>
                     <input class="form-control" type="text" name="website" Placeholder="Website">
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Zip Code</label>
                           <input class="form-control" type="text" name="zipconde" Placeholder="Zip code">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>State</label>
                           <input class="form-control" type="text" name="state" Placeholder="State">
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Phone</label>
                     <input class="form-control" type="text" name="phone" Placeholder="Phone">
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <label>Description</label>
                     <textarea class="form-control"></textarea>
                  </div>
               </div>
               
<div class="card-body">
<div id="actions" class="row">
<div class="col-lg-6">
<div class="btn-group w-100">
<span class="btn btn-success col fileinput-button dz-clickable">
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
<div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress=""></div>
</div>
</div>
</div>
</div>
<div class="table table-striped files" id="previews">

</div>
</div>



            </div>
            <hr/>
            <div class="from-group float-right" >
               <button class="btn btn-success">Add +</button>
            </div>
         </div>
      </div>
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
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="save" class="btn btn-primary">Save changes</button>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   jQuery(document).ready(function(){
      $('#save').click(function(e){
        
         e.preventDefault();
         var workingDay=[];
         var workingFrom = [];
         var workingTo = [];
         var i=0;
         //$('#subcategory').empty();
         var days = $('select[name^="input_4"]').find(":selected").val();
         jQuery(".gf-day-dropdown select[name^='input_4']").each(function() {
            workingDay[i] = this.value
            i++
           
         });
         i = 0
         jQuery(".gf-start-time-dropdown select[name^='input_4']").each(function() {
            workingFrom[i] = this.value
            i++
         });
         i = 0
         jQuery(".gf-end-time-dropdown select[name^='input_4']").each(function() {
            workingTo[i] = this.value
            i++
         });
        var wd = document.getElementById("workingDays").value = workingDay
        var wf = document.getElementById("workingFrom").value = workingFrom+","
        var wt = document.getElementById("workingTo").value = workingTo
        $('#exampleModal').modal('toggle');           
        
      });
   }); 
</script>
{!!Form::close()!!}
<!-- /row -->
</section>
@endsection