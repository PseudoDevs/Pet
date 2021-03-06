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
                            <h1>Users</h1>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 mt-2">
                        <div class="card">
                            <div class="header">
                                <h2> Users List </h2>
                                <ul class="header-dropdown dropdown">
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User Name</th>
                                                <th>Full Name</th>
                                                <th>Email Address</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($users_list as $users_lists) : ?>
                                                <?php if($users_lists['role'] == 'User' && $users_lists['status'] == 'Active') : ?>
                                            <tr>
                                                <td><?= $users_lists['id']; ?></td>
                                                <td><?= $users_lists['username']; ?></td>
                                                <td><?= $users_lists['fullname']; ?></td>
                                                <td><?= $users_lists['email']; ?></td>
                                                <td>
                                                    <a href="/ban-account/<?= $users_lists['id']; ?>" class="btn btn-danger btn-sm">Ban Account</a>
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
                                <h2> Users List </h2>
                                <ul class="header-dropdown dropdown">
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User Name</th>
                                                <th>Full Name</th>
                                                <th>Email Address</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($users_list as $users_lists) : ?>
                                                <?php if($users_lists['role'] == 'User' && $users_lists['status'] == 'Banned') : ?>
                                            <tr>
                                                <td><?= $users_lists['id']; ?></td>
                                                <td><?= $users_lists['username']; ?></td>
                                                <td><?= $users_lists['fullname']; ?></td>
                                                <td><?= $users_lists['email']; ?></td>
                                                <td>
                                                    <a href="/activate-account/<?= $users_lists['id']; ?>" class="btn btn-success btn-sm">Activate Account</a>
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