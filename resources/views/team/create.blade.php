@extends('layouts.admin')
@section('title', 'Create Team')
@section('content')
<section class="content-header">
   <div class="container-fluid">
            <h1>Add Team Member</h1>
   </div>
</section>

<section class="content">
   <div class="container-fluid">
      <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title"> Add Team Member</h3>
         </div>
         <div class="card-body">
            <div class="row">
          <div class="col-md-3"></div>
               <div class="form-panel form-horizontal style-form col-10 col-md-8 col-lg-6">
               {!! Form::open(['route'=>'team.store', 'files' => true])  !!}
                  <div class="form-group">
                     <label>Name</label>
                     <input type="text" class="form-control" placeholder="Name" name="name" />
                  </div>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="text" class="form-control" placeholder="Email" name="email" />
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="password" />
                  </div>
                  <button class="btn btn-info float-right"  type="submit">Add Team member</button>
               </div>
               </div>
               {!!Form::close()!!}
            
      </div>
   </div>
</section>
      
@endsection

