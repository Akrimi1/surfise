   <form method="post" action="{{ route('subcategories.update', $subcat->id) }}">
        @method('PATCH') 
            @csrf
   <div class="row mt">
   <div class="col-lg-12">
      <div class="form-panel">
         <div class="form-group">
            <label>Change Subcategory</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" placeholder="Category Name" name="subcategory" value="{{ $subcat->subcategory }}"/>
            </div>
</div>
            <div class="modal-footer justify-content-between">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button class="btn btn-info float-right" type="submit">Update Subcategory</button>
            </div>
            </form>
         </div>
      </div>

   </div>
   </form> 