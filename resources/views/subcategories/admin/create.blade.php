@extends('layouts.admin')
@section('content')
<section class="wrapper">
   <h3><i class="fa fa-angle-right"></i> Subcategories management</h3>
   <!-- BASIC FORM ELELEMNTS -->
   {!! Form::open(['route'=>'subcategories.store', 'files' => true]) !!}
   <div class="row mt">
   <div class="col-lg-12">
   <div class="form-panel form-horizontal style-form">
      <div class="form-group">
         <label class="col-sm-2 col-sm-2 control-label"
            >category</label
            >
         <div class="col-sm-10">
            <select class="form-control"  
               name="idCategory">
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
               <option>6</option>
               <option>7</option>
               <option>8</option>
               <option>9</option>
               <option>10</option>
               <option>11</option>
               <option>12</option>
               <option>13</option>
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
                  placeholder="Sub Category Name"
                  name="subcategory"
                  />
            </div>
            <div>
               <button class="btn btn-primary " type="submit">Add sub categories</button>
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