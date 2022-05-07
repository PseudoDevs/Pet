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
                    <h1>Pending Pets</h1>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 mt-2">
                <div class="card">
                    <div class="header">
                        <h2> Approved Pet List </h2>
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
                                        <th>Pet Price</th>
                                        <th>Pet Breed</th>
                                        <th>Pet Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($adoptions as $adoption): ?>
                                        <?php if($adoption['status'] == 'Approved'): ?>
                                    <tr>
                                        <td><?= $adoption['pet_name'] ?></td>
                                        <td>₱ <?= $adoption['pet_price'] ?></td>
                                        <td><?= $adoption['pet_breed'] ?></td>
                                        <td><span class="badge badge-success"><?= $adoption['status'] ?></span></td>
                                    </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
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
                        <h2> Pending Pet List </h2>
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
                                        <th>Pet Price</th>
                                        <th>Pet Breed</th>
                                        <th>Pet Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($adoptions as $adoption): ?>
                                        <?php if($adoption['status'] == 'Pending'): ?>
                                    <tr>
                                        <td><?= $adoption['pet_name'] ?></td>
                                        <td>₱ <?= $adoption['pet_price'] ?></td>
                                        <td><?= $adoption['pet_breed'] ?></td>
                                        <td><span class="badge badge-warning"><?= $adoption['status'] ?></span></td>
                                    </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
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
                        <h2> Declined Pet List </h2>
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
                                        <th>Pet Price</th>
                                        <th>Pet Breed</th>
                                        <th>Pet Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($adoptions as $adoption): ?>
                                        <?php if($adoption['status'] == 'Declined'): ?>
                                    <tr>
                                        <td><?= $adoption['pet_name'] ?></td>
                                        <td>₱ <?= $adoption['pet_price'] ?></td>
                                        <td><?= $adoption['pet_breed'] ?></td>
                                        <td><span class="badge badge-danger"><?= $adoption['status'] ?></span></td>
                                    </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
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