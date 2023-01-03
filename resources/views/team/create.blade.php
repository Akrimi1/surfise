@extends('layouts.admin')
@section('title', 'Create Team')
@section('content')
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Create Team Page</h1>
         </div>
      </div>
   </div>
</section>
<section class="content">
   <div class="container-fluid">
     
         <div class="card card-default collapsed-card">
            {!! Form::open(['route'=>'team.store', 'files' => true])  !!}
            <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Name</label>
                     <input name="name" Placeholder="Name" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                     <label>Email</label>
                     <input name="email" Placeholder="email" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                     <label>password</label>
                     <input name="password" Placeholder="password" type="password" class="form-control">
                  </div>
               </div>
            </div>
            <hr/>
            <div class="from-group float-right" >
               <button type="submit" class="btn btn-success">Add Team member</button>
            </div>
         </div>
         {!!Form::close()!!}
      </div>              
</section>
      
@endsection