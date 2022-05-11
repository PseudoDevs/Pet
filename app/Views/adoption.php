<?php 

echo view('home_layouts/header');

?>


<!--wrapper start-->
<div class="wrapper">

    <!--== Start Header Wrapper ==-->
    <?php echo view('home_layouts/navigation'); ?>
    <!--== End Header Wrapper ==-->

    <main class="main-content">

        <!--== Start Page Header Area Wrapper ==-->
        <div class="page-header-area" data-bg-img="https://www.teahub.io/photos/full/209-2096079_pattern.jpg">
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content">
                            <h2 class="title text-white">Adoption</h2>
                            <nav class="breadcrumb-area">
                                <ul class="breadcrumb">
                                    <li><a href="/" class="text-white">Home</a></li>
                                    <li class="breadcrumb-sep text-white">//</li>
                                    <li class="text-white">Adoption</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Page Header Area Wrapper ==-->



        <section class="product-area">
            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-grid" role="tabpanel"
                                    aria-labelledby="nav-grid-tab">
                                    <div class="row">
                                        <?php foreach($home_adoptions as $home_adoption): ?>
                                          <?php if($home_adoption['status'] == 'Approved'): ?>
                                        <div class="col-sm-6 col-xl-4">
                                            <!--== Start Product Item ==-->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <a href="#">
                                                        <img src="uploads/<?= $home_adoption['pet_thumbnail']; ?>" width="270"
                                                            height="270" alt="<?= $home_adoption['pet_name']; ?>">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h4 class="title"><a href="#"><?= $home_adoption['pet_name']; ?></a></h4>
                                                    <div class="prices">
                                                        <span class="price">₱<?= $home_adoption['pet_price']; ?></span>
                                                    </div>
                                                </div>
                                                <div class="product-action">
                                                    <button type="button" class="btn-product-quick-view"
                                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="pe-7s-look"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!--== End prPduct Item ==-->
                                        </div>
                                          <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
</div>
</div>
</section>

</main>
<!--== Start Footer Area Wrapper ==-->
<footer class="footer-area">
    <!--== Start Footer Bottom ==-->
    <div class="footer-bottom">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom-content">
                        <p class="copyright">© <?= date('Y'); ?> Pet Shop. Made with <i class="fa fa-heart"></i><a
                                target="_blank" href="#">.</a></p>
                        <div class="payment">
                            <!-- <a href="account.html"><img src="assets/img/photos/payment.webp" width="192" height="21" alt="Payment Logo"></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Footer Bottom ==-->
</footer>
<!--== End Footer Area Wrapper ==-->

<!--== Scroll Top Button ==-->
<div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

<!--== Start Product Quick View Modal ==-->
<aside class="product-cart-view-modal modal fade" id="action-QuickViewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="product-quick-view-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <span class="pe-7s-close"></span>
                    </button>
                    <div class="container pt--0 pb--0">
                        <div class="row">
                            <div class="col-lg-6">
                                <!--== Start Product Thumbnail Area ==-->
                                <div class="product-single-thumb">
                                    <img src="assets/img/shop/quick-view1.webp" width="544" height="560"
                                        alt="Image-HasTech">
                                </div>
                                <!--== End Product Thumbnail Area ==-->
                            </div>
                            <div class="col-lg-6">
                                <!--== Start Product Info Area ==-->
                                <div class="product-single-info">
                                    <h3 class="main-title">Pangalan ng Aso</h3>
                                    <div class="prices">
                                        <span class="price">Price: ₱ 300.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor
                                        incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nol
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate</p>
                                    <div class="product-single-meta">
                                        <ul>
                                            <li><span>Pet Age:</span> 3 yrs old</li>
                                            <li><span>Pet Breed:</span> Dalmatian</li>
                                            <li><span>Owner Name:</span>
                                                <a href="#">Ako basta</a>
                                            </li>
                                            <li><span>Location:</span>
                                                <a href="#">Manila, Philippines</a>,
                                            </li>
                                            <li><span>Number:</span>
                                                <a href="#">09123456789</a>,
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-quick-action">

                                    </div>
                                </div>
                                <!--== End Product Info Area ==-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!--== End Product Quick View Modal ==-->

<!--== Start Aside Menu ==-->
<aside class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h1 class="d-none" id="offcanvasExampleLabel">Aside Menu</h1>
        <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">menu <i
                class="fa fa-chevron-left"></i></button>
    </div>
    <div class="offcanvas-body">
        <nav id="offcanvasNav" class="offcanvas-menu-nav">
            <ul>
                <li class="offcanvas-nav-parent">
                    <a class="offcanvas-nav-item" href="javascript:void(0)">Home</a>
                </li>

                <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="/home-about">About</a></li>
                <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="/home-products">Products</a></li>
                <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="/home-adoption">Adoption</a></li>
                <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="/home-services">Services</a></li>
            </ul>
        </nav>
    </div>
</aside>
<!--== End Aside Menu ==-->
</div>











<?php 

echo view('home_layouts/footer');

?>