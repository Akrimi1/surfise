@extends('layouts.admin')
@section('title', 'Team Management')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('content')
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Team </h1>
         </div>
      </div>
   </div>
</section>
<section class="content">
   <div class="container-fluid">  
   <div class="card-body table-responsive p-0 pt-1">
                  <table class="table table-hover text-nowrap">
                     <thead>
                        <tr>
                           <th>name</th>                           
                           <th>Email</th>
                           
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($team as $user)
                        <tr>
                           <td>{{ $user->name }}</td>
                              <td>
                              {{ $user->email }}
                                  </td>

                           <td class="col-md-1">
                           <td class="col-md-1">
                              <div class="col-md-12">
                                 <div class="row">
                                    <div class="col-md-5">
                                      <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-editsub"><i class="fa fa-pencil"></i></a>
                                    </div>
                                   <div class="col-md-1">
                                       <form class="col-md-2" action="{{ route('team.destroy', $user->id) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button class="btn btn-danger btn-xs">
                                          <i class="fa fa-trash"></i>
                                          </button>
                                       </form>
                                    </div>
                                    </div>
                              </div>
                           </td>
                        </tr>
                       @endforeach
                     </tbody>
                  </table>
               </div>
   </div>              
</section>
@endsection