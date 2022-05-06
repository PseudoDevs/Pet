<?php 

echo view('layouts/header');
echo view('layouts/sidenav');

?>

<div id="main-content">
            <div class="container-fluid">
                <!-- Page header section  -->
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <h1>Add New Product</h1>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Product Information</h2>
                            </div>
                            <div class="body">
                            <?= form_open_multipart('/add-new-product'); ?>
                                <label for="basic-url">Product Name</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="p_name" aria-describedby="basic-addon2">
                                </div>
                                <label for="basic-url">Product Description</label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control" rows="5" name="p_desc" aria-describedby="basic-addon2"></textarea>
                                </div>
                                <label for="basic-url">Product Price</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" name="p_price" aria-describedby="basic-addon2">
                                </div>
                                <label for="basic-url">Product Stocks</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="p_stocks" aria-describedby="basic-addon2">
                                </div>
                                <label for="basic-url">Product Thumbnail</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="p_thumbnail" aria-describedby="basic-addon2">
                                </div>
                                <button type="submit" class="btn btn-primary">Add Product</button>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                    
                </div>

<?php 

echo view('layouts/footer');


?>