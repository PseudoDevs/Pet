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
                            <h1>Adoptions</h1>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 mt-2">
                        <div class="card">
                            <div class="header">
                                <h2> Adoption List </h2>
                                <ul class="header-dropdown dropdown">
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                                        <thead>
                                            <tr>
                                                <th>Pet Name</th>
                                                <th>Pet Thumbnail</th>
                                                <th>Pet Description</th>
                                                <th>Pet Breed</th>
                                                <th>Pet Age</th>
                                                <th>Pet Location</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Dalamation</td>
                                                <td>3 yrs old</td>
                                                <td> Manila, Philippines</td>
                                                <td>
                                                    <a href="/edit-product/" class="btn btn-success btn-sm">Edit</a>
                                                    <a href="/delete-product/" class="btn btn-danger btn-sm">Delete</a>
                                                    <a href="/view-product/" class="btn btn-secondary btn-sm">View</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 mt-2">
                        <div class="card">
                            <div class="header">
                                <h2> Adoption Request </h2>
                                <ul class="header-dropdown dropdown">
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                                        <thead>
                                            <tr>
                                                <th>Pet Name</th>
                                                <th>Pet Thumbnail</th>
                                                <th>Pet Description</th>
                                                <th>Pet Breed</th>
                                                <th>Pet Age</th>
                                                <th>Pet Location</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Dalamation</td>
                                                <td>3 yrs old</td>
                                                <td> Manila, Philippines</td>
                                                <td>
                                                    <a href="/accept-adoption/" class="btn btn-success btn-sm">Accept Request</a>
                                                    <a href="/decline-adoption/" class="btn btn-danger btn-sm">Decline Request</a>
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


?>