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
                            <h1>Hi, Welcome back!</h1>
                        </div>
                    </div>
                </div><div class="row clearfix">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body top_counter">
                                <div class="icon bg-warning text-white"><i class="fa fa-area-chart"></i> </div>
                                <div class="content">
                                    <span>Sales Today</span>
                                    <h5 class="number mb-0">₱ 53,251</h5>
                                </div>
                            </div>                        
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body top_counter">
                                <div class="icon bg-success text-white"><i class="fa fa-tag"></i> </div>
                                <div class="content">
                                    <span>Total Products</span>
                                    <h5 class="number mb-0">62</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body top_counter">
                                <div class="icon bg-info text-white"><i class="fa fa-shopping-cart"></i> </div>
                                <div class="content">
                                    <span>Total Sales</span>
                                    <h5 class="number mb-0">₱ 3,205</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body top_counter">
                                <div class="icon bg-danger text-white"><i class="fa fa-adn"></i> </div>
                                <div class="content">
                                    <span>Total Adoption</span>
                                    <h5 class="number mb-0">3,217</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



<?php 

echo view('layouts/footer');


?>