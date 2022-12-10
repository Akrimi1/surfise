@extends('layouts.admin')
@section('content')
<section class="wrapper">
   <h3><i class="fa fa-angle-right"></i> categories management</h3>
   <!-- BASIC FORM ELELEMNTS -->
   {!! Form::open(['route'=>'categories.store', 'files' => true]) !!}
   <div class="row mt">
   <div class="col-lg-12">
      <div class="form-panel">
         <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label"
               >select subcategories</label>
            <div class="col-sm-10">
               <select  data-role="tagsinput">
                  <option value="equipments">equipments</option>
                  <option value="produits">produits</option>
               </select>
            </div>
         </div>
         <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label"
               >category</label
               >
            <div class="col-sm-10">
               <input
                  type="text"
                  class="form-control"
                  placeholder="Category Name"
                  name="category"
                  />
            </div>
            <div>
               <button class="btn btn-primary " type="submit">Add categories</button>
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