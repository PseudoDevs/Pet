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
                            <h1>Products</h1>
                        </div>
                    </div>
                </div>

                <a href="/add-product" class="btn btn-primary">Add Product</a>

                <div class="row clearfix">
                    <div class="col-lg-12 mt-2">
                        <div class="card">
                            <div class="header">
                                <h2> Products List </h2>
                                <ul class="header-dropdown dropdown">
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Product Thumbnail</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>₱ 521.00</td>
                                                <td>
                                                    <button type="button" data-toggle="modal" data-target="#edit" class="btn btn-success btn-sm">Edit</button>
                                                    <button type="button" data-toggle="modal" data-target="#delete" class="btn btn-danger btn-sm">Delete</button>
                                                    <button type="button" data-toggle="modal" data-target="#view" class="btn btn-secondary btn-sm">View</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<?php 

echo view('layouts/footer');
echo view('admin_products/delete');
echo view('admin_products/edit');
echo view('admin_products/view');

?>