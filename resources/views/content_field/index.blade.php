@extends('layouts.admin')
@section('title', 'Create Equipment')

@section('content')
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Add Content Fields Page</h1>
         </div>
      </div>
   </div>
</section>
<section class="content">
   <div class="container-fluid">
      <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title"> Add Content Field</h3>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="form-panel form-horizontal style-form">
                  {!! Form::open(['route'=>'categories.store', 'files' => true]) !!}
                  <div class="form-group">
                     <label>Select Primary Field of Business</label>
                     <select class="form-control select2" name="type">
                        <?php $exist=false ?>
                        @if($existant_cat != null)
                        <option selected>{{ $existant_cat->type }}</option>
                        <?php $exist=true ?>
                        @endif
                        @foreach($product_types as $pt)
                        @if($exist == true)
                        @if($pt->product_type != $existant_cat->type)
                        <option value="{{ $pt->product_type }}">{{ $pt->product_type }}</option>
                        @endif
                        @else
                        <option value="{{ $pt->product_type }}">{{ $pt->product_type }}</option>
                        @endif
                        @endforeach
                     </select>
                  </div>
                  <div class="form-group">
                     <label>Category</label>
                     <input type="text" class="form-control" placeholder="category" name="category" />
                  </div>
                  <div class="form-group">
                     <label>SubCategory</label>
                     <input type="text" class="form-control" placeholder="subcategory" name="subcategory" />
                  </div>
                  <button class="btn btn-info float-right" type="submit">Add +</button>
               </div>
               {!!Form::close()!!}
               <div class="col-md-1"></div>
               <div class="col-md-8">
                  <div class="row">
                     <div class="col-md-12"><label>Search Content Fields</label></div>
                     <div class="col-md-4">
                        <select class="form-control select2" id="type" name="business_type">
                           @foreach($categories as $cat)
                           <option>{{ $cat->type }}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="col-md-4">
                        <select class="form-control select2" id="category" name="category">
                           @foreach($categories as $cat)
                           <option>{{ $cat->category }}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="col-md-4">
                        <select class="form-control select2" id="subcat" name="subcategory">
                           @foreach($subcategories as $subcat)
                           <option>{{ $subcat->subcategory }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
               <div class="card-body table-responsive p-0 pt-1">
                  <table class="table table-hover text-nowrap">
                     <thead>
                        <tr>
                           <th>Business Type</th>                           
                           <th>Categories</th>
                           
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($categories as $cat)
                        <tr>
                           <td>{{ $cat->type }}</td>
                              <td>
                              
                             <a title="Show Subcategories" href="{{ route('categories.show', $cat->id) }}" >
                             {{ $cat->category }}
                                  </td>

                           <td class="col-md-1">
                              <div class="col-md-12">
                                 <div class="row">
                                   
                                       <form class="col-md-2" method="post" action="{{ route('categories.destroy', $cat->id) }}">
                                          @csrf
                                          @method('DELETE')
                                          <button class="btn btn-danger btn-xs">
                                          <i class="fa fa-trash"></i>
                                          </button>
                                       </form>
                                   
                                 </div>
                              </div>
                           </td>
                        </tr>
                       @endforeach
                     </tbody>
                  </table>
   
             

               </div>
               <div class="float-right">
                  @if($subcategories->count()>=50)
               {{ $subcategories->links() }}
               @endif
</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection