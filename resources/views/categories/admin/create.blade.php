@extends('layouts.admin')
@section('content')
<section class="wrapper">
   <h3><i class="fa fa-angle-right"></i> Categories management</h3>
   <!-- BASIC FORM ELELEMNTS -->
   <div class="row mt">
      <div class="col-lg-12">
         <div class="form-panel form-horizontal style-form">
            {!! Form::open(['route'=>'categories.store', 'files' => true]) !!}
            <div class="row">
               <div class="col-md-6">
                  <div class="col-md-6">
                     <a class="btn btn-primary "  href="{{ url('/categories/admin') }}" >Back to list</a>  
                  </div>
               </div>
            </div>
            <hr />
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >Select type</label>
               <div class="col-sm-10">
                  <select class="form-control" name="type" data-role="tagsinput">
                     <option value="Equipments">Equipments</option>
                     <option value="Products">Products</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >Category</label
                  >
               <div class="col-sm-10">
                  <input
                     type="text"
                     class="form-control"
                     placeholder="category"
                     name="category"
                     />
               </div>
            </div>
            <div>
               <button class="btn btn-primary " type="submit">Add Categories</button>
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