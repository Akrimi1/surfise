@extends('layouts.admin')
@section('content')
<section class="wrapper">
   <h3><i class="fa fa-angle-right"></i> Products management</h3>
   <!-- row -->
   <div class="row mt">
      <div class="col-md-12">
         <div class="content-panel">
         <table class="table table-striped table-advance table-hover">
            <div class="row">
                  <div class="col-md-6">
               <div class="col-md-6">
               <a class="btn btn-primary "  href="{{ url('/products/admin/create') }}" >Add Products</a>  
                  </div>
               </div>
               </div>
               <hr />
               <thead>
                  <tr>
                     <th>Products image</th>
                     <th>Reference</th>
                     <th>Name</th>
                     <th>Category</th>
                     <th></th>
                  </tr>
               </thead>
               @foreach($products as $product)
               <tbody>
                  <tr>
                     <td class="col-md-1">
                     <img src="{{ asset('images/products/' . $product->imagespord[0]->path)}}" class="thumbnail" width="100%" />
                     </td>
                     <td>
                        {{$product->reference}}
                     </td>
                     <td class="hidden-phone">{{$product->name}}</td>
                    
                     <td>{{$product->category->category}}</td>
                     <td class="col-md-1">
                        <div class="col-md-12">
                           <div class="row">
                              <div class="col-md-1">
                                 
                                 <a class="btn btn-primary btn-xs" href="{{ route('products.edit', $product->id)}}"> <i class="fa fa-pencil"></i> </a>
</div>
<div class="col-md-1">
                                 <form class="col-md-2" method="post" action="{{ route('products.destroy', $product->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash-o"></i>
                                    </button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </td>
                  </tr>
               </tbody>
               @endforeach
               
            </table>
         </div>
         <!-- /content-panel -->
      </div>
      <!-- /col-md-12 -->
   </div>
   <!-- /row -->
</section>
@endsection