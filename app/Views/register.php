<?php 

echo view('home_layouts/header');

?>


<!--wrapper start-->
<div class="wrapper">

    <!--== Start Preloader Content ==-->
    <!-- <div class="preloader-wrap">
    <div class="preloader">
      <div class="dog-head"></div>
      <div class="dog-body"></div>
    </div>
  </div> -->
    <!--== End Preloader Content ==-->

    <!--== Start Header Wrapper ==-->
    <?php echo view('home_layouts/navigation'); ?>
    <!--== End Header Wrapper ==-->

    <main class="main-content">

        <!--== Start Page Header Area Wrapper ==-->
        <div class="page-header-area" data-bg-img="assets/img/photos/bg1.webp">
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content">
                            <h2 class="title">Login</h2>
                            <nav class="breadcrumb-area">
                                <ul class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-sep">//</li>
                                    <li>Login</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Page Header Area Wrapper ==-->


        <!--== Start My Account Area Wrapper ==-->
        <section class="account-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="login-form-content vh-75">
                            <?php if(session()->get('error')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= session()->get('error') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <?php endif;?>

                            <?php if(session()->get('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?= session()->get('success') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <?php endif;?>

                            <?= form_open('/authRegister'); ?>
                            <?= csrf_field(); ?>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="user-fullname">Fullname<span class="required">*</span></label>
                                        <input id="user-fullname" name="user-fullname" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="user-name">Username <span
                                                class="required">*</span></label>
                                        <input id="user-name" name="user-name" class="form-control" type="text" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="user-email">Email Address <span class="required">*</span></label>
                                        <input id="user-email" name="user-email" class="form-control" type="email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="user-pass">Password <span class="required">*</span></label>
                                        <input id="user-pass" name="user-pass" class="form-control" type="password" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="user-confirm-pass">Confirm Password <span class="required">*</span></label>
                                        <input id="user-confirm-pass" name="user-confirm-pass" class="form-control" type="password" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn-login">Create Account</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group account-info-group mb--0">
                                        <span> Already have an Accoount? <a class="lost-password text-danger" href="/login">Login</a></span>
                                    </div>
                                </div>
                            </div>
                            <?php form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End My Account Area Wrapper ==-->
    </main>

    <style>
    footer {
        position: fixed;
        height: 100px;
        bottom: 0;
        width: 100%;
    }
    </style>
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
                    <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="/home-products">Products</a>
                    </li>
                    <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="/home-adoption">Adoption</a>
                    </li>
                    <li class="offcanvas-nav-parent"><a class="offcanvas-nav-item" href="/home-services">Services</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!--== End Aside Menu ==-->
</div>



<?php 

echo view('home_layouts/footer');

?>