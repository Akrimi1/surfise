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
            
            <hr />
            <div class="form-group">
               <label>Category Type</label >
               <div class="col-sm-10">
                  <select class="form-control" id="categoryType" name="categoryType">
                     <option value="Equipments">Equipments</option>
                     <option value="Products">Products</option>
                     <option value="Restaurants">Restaurants</option>
                     <option value="Services">Services</option>
                     <option value="Clubs/Gyms">Clubs/Gyms</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label>Category</label>
               <div class="col-sm-10">
               <select class="form-control" id="category" name="idCategory">
              <option>subcategory</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label>Subcategory</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control"placeholder="subcategory"name="subcategory"/>
               </div>
            </div>
            <div>
               <button class="btn btn-primary " type="submit">Add Subcategories</button>
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
