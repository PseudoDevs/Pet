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
                            <h1>Add New Adoption</h1>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Pet Information</h2>
                            </div>
                            <div class="body">
                            <?= form_open_multipart('/add-new-pet'); ?>
                                <label for="basic-url">Pet Name</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="pet_name" aria-describedby="basic-addon2">
                                </div>
                                <label for="basic-url">Pet Description</label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control" rows="5" name="pet_desc" aria-describedby="basic-addon2"></textarea>
                                </div>
                                <label for="basic-url">Pet Price</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" name="pet_price" aria-describedby="basic-addon2">
                                </div>
                                <label for="basic-url">Pet Breed</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="pet_breed" aria-describedby="basic-addon2">
                                </div>
                                <label for="basic-url">Pet Owner</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="pet_owner" aria-describedby="basic-addon2">
                                </div>
                                <label for="basic-url">Pet Thumbnail</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="pet_thumbnail" aria-describedby="basic-addon2">
                                </div>
                                <label for="basic-url">Location</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="pet_location" aria-describedby="basic-addon2">
                                </div>
                                <label for="basic-url">Contact Number</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="pet_contact" aria-describedby="basic-addon2">
                                </div>
                                <label for="basic-url">Facebook URL</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="pet_owner_url" aria-describedby="basic-addon2">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Add Pet</button>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                    
                </div>

<?php 

echo view('layouts/footer');


?>