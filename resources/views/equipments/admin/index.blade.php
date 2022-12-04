@extends('layouts.admin')
@section('content')

<section class="wrapper">
          <h3><i class="fa fa-angle-right"></i> Basic Table Examples</h3>

          <!-- row -->
          <div class="row mt">
            <div class="col-md-12">
              <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                  <h4><i class="fa fa-angle-right"></i> Advanced Table</h4>
                  <hr />
                  <thead>
                    <tr>
                      <th>Equipment image</th>
                      <th class="hidden-phone">Referance</th>
                      <th>Name</th>
                      <th>Type</th>
                      <th>Description</th>
                      <th>Details</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td  class="text-center">
                            <img class="img-responsive" src="https://unsplash.it/164/90"/>
                        </td>
                      <td>
                        <a href="basic_table.html#">Company Ltd</a>
                      </td>
                      <td class="hidden-phone">Lorem Ipsum dolor</td>
                      <td>12000.00$</td>
                      <td>
                        <span class="label label-info label-mini">Due</span>
                      </td>
                      <td>
                        <button class="btn btn-success btn-xs">
                          <i class="fa fa-check"></i>
                        </button>
                        <button class="btn btn-primary btn-xs">
                          <i class="fa fa-pencil"></i>
                        </button>
                        <button class="btn btn-danger btn-xs">
                          <i class="fa fa-trash-o"></i>
                        </button>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /content-panel -->
            </div>
            <!-- /col-md-12 -->
          </div>
          <!-- /row -->
        </section>
        @endsection