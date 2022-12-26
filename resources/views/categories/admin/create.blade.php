



   <!-- BASIC FORM ELELEMNTS -->
   <div class="row mt">
      <div class="col-lg-12">
         <div class="form-panel form-horizontal style-form">
            {!! Form::open(['route'=>'categories.store', 'files' => true]) !!}
            
            <div class="form-group">
               <label>Select type</label>
               <div class="col-sm-10">
                  <select class="form-control" name="type" data-role="tagsinput">
                     <option value="Equipments">Equipments</option>
                     <option value="Products">Products</option>
                     <option value="Restaurants">Restaurants</option>
                     <option value="Services">Services</option>
                     <option value="Clubs/Gyms">Clubs/Gyms</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label>Category</label
                  >
               <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="category"name="category"
                     />
               </div>
            </div>
            <div>
               <button class="btn btn-primary " type="submit">Add Categories</button>
            </div>
            {!!Form::close()!!}
         </div>
      </div>
      <!-- col-lg-12-->
