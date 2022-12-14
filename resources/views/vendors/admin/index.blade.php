@extends('layouts.admin')
@section('content')

<section class="wrapper">
          <h3><i class="fa fa-angle-right"></i> Vendors management</h3>

          <!-- row -->
          <div class="row mt">
            <div class="col-md-12">
              <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                <div class="row">
                  <div class="col-md-6">
               <div class="col-md-6">
               <a class="btn btn-primary "  href="/vendors/admin/create" >Add Vendors</a>  
                  </div>
               </div>
               </div>
                  <hr />
                  <thead>
                    <tr>
                      <th>vendor name</th>
                      <th class="hidden-phone">Description</th>
                      <th>Country</th>
                      <th>State</th>
                      <th>Longitude</th>
                      <th>Latitude</th>
                      <th></th>
                    </tr>
                  </thead>
                  @foreach($vendors as $vendor)
                  
                  <tbody>
                    <tr>
                      <td>
                      {{$vendor->vendor_name}}
                    
                      </td>
                      <td class="hidden-phone">{{$vendor->description}}</td>
                      <td>{{$vendor->country}}</td>
                      <td>
                      {{$vendor->state}}
                      </td>
                      <td>
                      {{$vendor->longitude}}
                      </td>
                      <td>
                      {{$vendor->latitude}}
                      </td>
                      <td>
                        <button class="btn btn-primary btn-xs">
                          <i class="fa fa-pencil"></i>
                        </button>
                        <button class="btn btn-danger btn-xs">
                          <i class="fa fa-trash-o"></i>
                        </button>
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