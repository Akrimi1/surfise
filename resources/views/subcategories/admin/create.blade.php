@push('subcat-ajax')
<script>
   $(document).ready(function(){
      $('#categoryType').change(function(e){
        
         e.preventDefault();
         $('#category').empty();
         var type = $('#categoryType').find(":selected").val();

        
         $.ajax(
         {
            url: "/categorySelect",
            type: "GET",
         
            data: { type: type},
            success: function (result) {
             
               for (var i = 0; i < result.length; i++) {
                 
                  var select = document.getElementById("category");
                  var option = document.createElement("option");
                  option.text = result[i].category;
                  option.value = result[i].id;
                  select.add(option);
               }
          
            
            }
         });     
      });
   });
        
</script>
@endpush


   <!-- BASIC FORM ELELEMNTS -->
   <div class="row mt">
      <div class="col-lg-12">
         <div class="form-panel form-horizontal style-form">
            {!! Form::open(['route'=>'subcategories.store', 'files' => true]) !!}
            
            <div class="form-group">
               <label>Category Type</label >
               <div class="col-sm-10">
                  <input type="text" class="form-control" id=categoryType name="type" value readonly/>
               </div>
            </div>
            <div class="form-group">
               <label>Category</label>
               <div class="col-sm-10">
               <input type="hidden" class="form-control" id="idCategory" value name="idCategory"/>

               <input type="text" class="form-control" id=category  value readonly/>
               
               </div>
            </div>
            <div class="form-group">
               <label>Subcategory</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="subcategory" id="subcategoryy" name="subcategory"/>
               </div>
            </div>
            <div class="modal-footer justify-content-between">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button class="btn btn-info float-right" type="submit">Add Subcategories</button>
            </div>
            {!!Form::close()!!}
         </div>
      </div>
      <!-- col-lg-12-->
   </div>
   <!-- /row -->
   <!-- INLINE FORM ELELEMNTS -->
   <!-- /row -->
</section>
<script>
          $(document).ready(function(){
            $('a#addsubCat').click(function(){   
               var current_cat = document.getElementById('category');
               var current_cattype = document.getElementById('categoryType');
               var current_catid = document.getElementById('idCategory');
               var categories = $('#categories').find(":selected").text();
               var categories_val = $('#categories').find(":selected").val();
               var business_type = $('#business_type').find(":selected").text();
               current_cat.value = categories;
               current_cattype.value = business_type;
               current_catid.value = categories_val;
            });
         })
      </script>
