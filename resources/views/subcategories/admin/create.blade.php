@extends('layouts.admin')
@section('content')
<section class="wrapper">
   <h3><i class="fa fa-angle-right"></i> Subcategories management</h3>
   <!-- BASIC FORM ELELEMNTS -->
   <div class="row mt">
      <div class="col-lg-12">
         <div class="form-panel form-horizontal style-form">
            {!! Form::open(['route'=>'subcategories.store', 'files' => true]) !!}
            <div class="row">
               <div class="col-md-6">
                  <div class="col-md-6">
                     <a class="btn btn-primary "  href="{{ url('/subcategories/admin') }}" >Back to list</a>  
                  </div>
               </div>
            </div>
            <hr />
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >category</label
                  >
               <div class="col-sm-10">
               <select class="form-control" name="idCategory">
               @foreach ($categeries as $cat)
                 <option value="{{$cat->id}}" >{{$cat->category}}</option>
                  @endforeach
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 col-sm-2 control-label"
                  >subcategory</label
                  >
               <div class="col-sm-10">
                  <input
                     type="text"
                     class="form-control"
                     placeholder="subcategory"
                     name="subcategory"
                     />
               </div>
            </div>
            <div>
               <button class="btn btn-primary " type="submit">Add Subcategories</button>
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