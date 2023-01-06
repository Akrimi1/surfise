@extends('layouts.admin')
@section('title', '')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('content')
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>My team - {{ $user->name }}</h1>
            <span>Member Since {{  $user->created_at->format('Y-m-d') }}</span>
         </div>
      </div>
   </div>
</section>
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">


                  </h3>
                  <div class="card-tools">
                     <div class="input-group input-group-sm" style="width: 150px;">
                        <select class="form-control" name="filter" id="searchFilter">
                           <option selected>Filter</option>
                           <option value="da">Date Added</option>
                           <option value="ad">Added By</option>
                           <option value="bc">By Category</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="card-body p-0">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="row p-3">
                              <div class="col-md-3">
                           <!--when click on the link it will be changed to "-->
                           <label>{{ $user->name }} {{ $number = $equipments->count() }} @if($number>1) Products @else Product @endif</label>
               </div>
                        <div class="col-md-4 ">
                           <div class="input-group input-group-sm">
                           <input type="text" name="search" class="form-control float-right" placeholder="Search">
                           <div class="input-group-append">
                              <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                              </button>
                           </div>
                        </div>
                        
               </div>
               

                     </div>
                        </div>
                        <div class="card-body pt-1">
                     <table class="table table-hover ">
                        <thead>
                           <tr>
                              
                           </tr>
                        </thead>
                        <tbody>
                         
                              
                           @foreach($equipments as $equip)
                           <tr data-widget="expandable-table" aria-expanded="false">
                              <td width="20%">@if($equip->category){{ $equip->category->category }} - {{ $equip->subcategory->subcategory }}@endif</td>
                              @if($equip->product_name != null)
                                 <td width="20%">{{ $equip->product_name }}</td>
                              @endif
                              @if($equip->brand_name != null)
                                 <td width="20%">{{$equip->brand_name}}</td>
                              @endif
                              <td width="20%">{{ Str::limit($equip->description,50, "...(show more)") }}</td>
                              <td width="20%">@if(!$equip->images->isEmpty())<img src=" {{ asset('images/equipments/'.$equip->images[0]->path) }} --}}" class="img-thumbnail" alt="">@endif</td>
                              
                             
                              <td width="20%" class="col-md-1">
                                 <div class="col-md-12">
                                    <div class="row">
                                       <div class="col-md-1">
                                         <a class="btn btn-primary btn-xs" href=""> <i class="fa fa-pencil"></i> </a>
                                       </div>
                                       <div class="col-md-1">
                                          <form class="col-md-2" method="post" action="{{ route('equipments.destroy', $equip->id) }}">
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
                           <tr class="expandable-body d-none">
                            <td colspan="5">
                            <p style="display: none;">
                            {{ $equip->description }}                           
                         </p>
                            </td>
</tr>
                           @endforeach   
                                 
                        </tbody>
                     </table>
                     
                  </div>
                  <div class="float-right">
                     {{-- @if($subcategories->count()>=50) --}}
                        {{-- {{ $subcategories->links() }} --}}
                        {{-- @endif --}}
                  </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection