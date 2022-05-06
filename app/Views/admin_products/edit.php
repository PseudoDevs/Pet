 <!-- Vertically centered -->
 <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editProducts" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
         <?= form_open_multipart('/edit-product'); ?>
         <input type="hidden" id="productIdEdit" name="p_idEdit">
             <div class="modal-header">
                 <h5 class="modal-title" id="editProduct">Edit Product</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                         aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body">
             <label for="basic-url">Product Name</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="p_name" name="p_name" aria-describedby="basic-addon2">
                                </div>
                                <label for="basic-url">Product Description</label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control" rows="5" id="p_desc" name="p_desc" aria-describedby="basic-addon2"></textarea>
                                </div>
                                <label for="basic-url">Product Price</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" id="p_price" name="p_price" aria-describedby="basic-addon2">
                                </div>
                                <label for="basic-url">Product Stocks</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="p_stocks" name="p_stocks" aria-describedby="basic-addon2">
                                </div>
                                <label for="basic-url">Product Thumbnail</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="p_thumbnail" name="p_thumbnail" aria-describedby="basic-addon2">
                                </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-default">Update</button>
             </div>
             <?= form_close(); ?>
         </div>
     </div>
 </div>