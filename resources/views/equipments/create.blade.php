<div class="card-body">
      {!! Form::open(['route' => 'equipments.store']) !!}
      <div class="row">
      <div class="form-group row ">
        <div class="col-9">
            {!! Form::text('idCategory', null,  ['class' => 'form-control','placeholder'=>  "tst"]) !!}
            {!! Form::text('idVendor', null,  ['class' => 'form-control','placeholder'=>  "test"]) !!}
            {!! Form::text('ref', null,  ['class' => 'form-control','placeholder'=>  "tets"]) !!}
            {!! Form::text('name', null,  ['class' => 'form-control','placeholder'=>  "tettst"]) !!}
            {!! Form::text('type', null,  ['class' => 'form-control','placeholder'=>  "test"]) !!}
            {!! Form::text('description', null,  ['class' => 'form-control','placeholder'=>  "testets"]) !!}
            {!! Form::text('details', null,  ['class' => 'form-control','placeholder'=>  "fff"]) !!}
            <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Save</button>
        <div class="form-text text-muted">
            
        </div>
  </div>
</div>
      </div>
      {!! Form::close() !!}
      <div class="clearfix"></div>
</div>