@extends('layouts.admin')
@section('content')
<section class="wrapper">
   <h3><i class="fa fa-angle-right"></i> subcategories management</h3>
   <!-- BASIC FORM ELELEMNTS -->
   <form method="post" action="{{ route('subcategories.update', $subcat->id) }}">
        @method('PATCH') 
            @csrf
   <div class="row mt">
   <div class="col-lg-12">
      <div class="form-panel">
         <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label"
               >subcategory</label
               >
            <div class="col-sm-10">
               <input
                  type="text"
                  class="form-control"
                  placeholder="Category Name"
                  name="subcategory"
                  value="{{ $subcat->subcategory }}"
                  />
            </div>
            <div>
               <button class="btn btn-primary " type="submit">Update subcategories</button>
            </div>
            </form>
         </div>
      </div>
      <!-- col-lg-12-->
   </div>
   </form> 
</section>
@endsection