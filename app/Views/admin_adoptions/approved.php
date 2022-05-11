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
                                                <th>Pet Breed</th>
                                                <th>Pet Age</th>
                                                <th>Pet Location</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($adoption_list as $adoption): ?>
                                                <?php if($adoption['status'] == 'Approved'): ?>
                                                <tr>
                                                    <td><?= $adoption['pet_name']; ?></td>
                                                    <td><img height="100" width="100" src="/uploads/<?= $adoption['pet_thumbnail']; ?>" class="img-fluid"/></td>
                                                    <td><?= $adoption['pet_breed']; ?></td>
                                                    <td><?= $adoption['pet_age']; ?></td>
                                                    <td><?= $adoption['pet_location']; ?></td>
                                                    <td>
                                                        <a href="/view-adoption/<?= $adoption['id']; ?>" class="btn btn-success btn-sm">View</a>
                                                        <a href="/delete-adoption/<?= $adoption['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                                    </td>
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
                                <h2> Adoption Requests </h2>
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
                                                <th>Pet Breed</th>
                                                <th>Pet Age</th>
                                                <th>Pet Location</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($adoption_list as $adoption): ?>
                                                <?php if($adoption['status'] == 'Pending'): ?>
                                                <tr>
                                                    <td><?= $adoption['pet_name']; ?></td>
                                                    <td><img height="100" width="100" src="/uploads/<?= $adoption['pet_thumbnail']; ?>" class="img-fluid"/></td>
                                                    <td><?= $adoption['pet_breed']; ?></td>
                                                    <td><?= $adoption['pet_age']; ?></td>
                                                    <td><?= $adoption['pet_location']; ?></td>
                                                    <td>
                                                        <a href="/accept-adoption/<?= $adoption['id']; ?>" class="btn btn-success btn-sm">Accept Request</a>
                                                        <a href="/decline-adoption/<?= $adoption['id']; ?>" class="btn btn-danger btn-sm">Decline Request</a>
                                                    </td>
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