 <!-- Vertically centered -->
 <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="viewProducts" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <input type="hidden" id="productIdView" name="p_idView">
             <div class="modal-header">
                 <h5 class="modal-title" id="viewProduct">View Product</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                         aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body">
                 <label for="basic-url">Product Name</label>
                 <div class="input-group mb-3">
                     <input type="text" class="form-control" id="p_name_view" name="p_name" aria-describedby="basic-addon2" value="">
                 </div>
                 <label for="basic-url">Product Description</label>
                 <div class="input-group mb-3">
                     <textarea class="form-control" rows="5" id="p_desc_view" name="p_desc" aria-describedby="basic-addon2" value=""></textarea>
                 </div>
                 <label for="basic-url">Product Price</label>
                 <div class="input-group mb-3">
                     <input type="number" class="form-control" id="p_price_view" name="p_price" aria-describedby="basic-addon2" value="">
                 </div>
                 <label for="basic-url">Product Stocks</label>
                 <div class="input-group mb-3">
                     <input type="text" class="form-control" id="p_stocks_view" name="p_stocks" aria-describedby="basic-addon2" value="">
                 </div>
                 <label for="basic-url">Product Thumbnail</label>
                 <div class="input-group mb-3">
                     <img src="" id="p_thumbnail_view" name="p_thumbnail_view" class="img-fluid" aria-describedby="basic-addon2">
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>