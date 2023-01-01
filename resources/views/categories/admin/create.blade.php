<div class="row mt">
      <div class="col-lg-12">
         <div class="form-panel form-horizontal style-form">
            {!! Form::open(['route'=>'categories.store', 'files' => true]) !!}
            
            <div class="form-group">
               <label>Select type</label>
               <div class="col-sm-10">
                  <input class="form-control" name="type" id="type" value="" readonly>                  
               </div>
            </div>
            <div class="form-group">
               <label>Category</label
                  >
               <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="category" name="category"
                     />
               </div>
            </div>
            <div class="modal-footer justify-content-between">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button class="btn btn-info float-right" type="submit">Add Categories</button>
            </div>
            {!!Form::close()!!}
         </div>
      </div>
      <!-- col-lg-12-->
      <script>
          $(document).ready(function(){
            $('a#addCat').click(function(){   
               var current_catType = document.getElementById('type');
         var business_type = $('#business_type').find(":selected").text();
               current_catType.value = business_type
            });
         })
      </script>
      
