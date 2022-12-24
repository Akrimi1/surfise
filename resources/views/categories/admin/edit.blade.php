@extends('layouts.admin')
@section('title', 'Edit Admin Categories')
@section('content')
<section class="wrapper">
   <h3><i class="fa fa-angle-right"></i> categories management</h3>
   <!-- BASIC FORM ELELEMNTS -->
   <form method="post" action="{{ route('categories.update', $cat->id) }}">
        @method('PATCH') 
            @csrf
   <div class="row mt">
   <div class="col-lg-12">
      <div class="form-panel">
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
                  value="{{ $cat->category }}"
                  />
            </div>
            <div>
               <button class="btn btn-primary " type="submit">Update categories</button>
            </div>
            {!!Form::close()!!}
         </div>
      </div>
      <!-- col-lg-12-->
   </div>
   </form> 
</section>
@endsection