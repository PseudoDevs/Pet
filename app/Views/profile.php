<?php 

echo view('home_layouts/header');

?>



<style type="text/css">
.badge-warning {
    background-color: #f39c12;
    color: white;
}

.badge-info {
    background-color: #2980b9;
    color: white;
}



.badge-danger {
    background-color: #c0392b;
    color: white;
}

.badge-success {
    background-color: #27ae60;
    color: white;
}
</style>

<!--wrapper start-->
<div class="wrapper">

    <!--== Start Header Wrapper ==-->
    <?php echo view('home_layouts/navigation'); ?>
    <!--== End Header Wrapper ==-->

    <main class="main-content">

        <!--== Start Page Header Area Wrapper ==-->
        <div class="page-header-area" data-bg-img="https://cdn.cbeditz.com/cbeditz/preview/simple-red-gradient-background-download-1-11614352992huqkzfx4ql.jpg">
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content">
                            <h2 class="title text-white">Profile</h2>
                            <nav class="breadcrumb-area">
                                <ul class="breadcrumb">
                                    <li><a href="/" class="text-white">Home</a></li>
                                    <li class="breadcrumb-sep">//</li>
                                    <li>Profile</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--== Start My Account Wrapper ==-->
        <section class="my-account-area">
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="myaccount-page-wrapper">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <nav>
                                        <div class="myaccount-tab-menu nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="dashboad-tab" data-bs-toggle="tab"
                                                data-bs-target="#dashboad" type="button" role="tab"
                                                aria-controls="dashboad" aria-selected="true">Dashboard</button>
                                            <button class="nav-link" id="orders-tab" data-bs-toggle="tab"
                                                data-bs-target="#orders" type="button" role="tab" aria-controls="orders"
                                                aria-selected="false"> Orders</button>
                                            <button class="nav-link" id="account-info-tab" data-bs-toggle="tab"
                                                data-bs-target="#account-info" type="button" role="tab"
                                                aria-controls="account-info" aria-selected="false">Account
                                                Details</button>
                                            <a href="/logout" class="nav-link">Logout</a>
                                        </div>
                                    </nav>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="dashboad" role="tabpanel"
                                            aria-labelledby="dashboad-tab">
                                            <div class="myaccount-content">
                                                <h3>Dashboard</h3>
                                                <div class="welcome">
                                                    <p>Hello,
                                                        <strong><?= session()->get('firstname') . " " . session()->get('lastname') ?></strong>
                                                        (If Not
                                                        <strong><?= session()->get('firstname') . " " . session()->get('lastname') ?>
                                                            !</strong><a href="/authLogout" class="logout">
                                                            Logout</a>)</p>
                                                </div>
                                                <p>From your account dashboard. you can easily check & view your
                                                    recent orders and
                                                    edit your password and account details.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="orders" role="tabpanel"
                                            aria-labelledby="orders-tab">
                                            <div class="myaccount-content">
                                                <h3>Orders : Once your order is on Processing</h3>
                                                <p>Once the order status is processing your order is already successful
                                                    and ready to pick up in your time and date schedule. Please present
                                                    the Screen shot of this to the Shop. You only have 7 days delay to
                                                    pickup the item after that the order will automatically rejected.
                                                    The payment is non-refundable. Thank you!</p>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Order #</th>
                                                                <th>Date</th>
                                                                <th>Product</th>
                                                                <th>Status</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        <?php foreach ($order_lists as $key => $order_list) :?>
                                                            <tr>
                                                                <td><?= $order_list['o_id'] ?></td>
                                                                <td><?= $order_list['created_at'] ?></td>
                                                                <td><?= $order_list['p_name'] ?></td>
                                                                <td>
                                                                <?= $order_list['o_status'] ?>

                                                                    <!-- <span class="badge badge-pill badge-warning p-2">

                                                                    </span>

                                                                    <span class="badge badge-pill badge-info p-2">

                                                                    </span>

                                                                    <span class="badge badge-pill badge-success p-2">

                                                                    </span>

                                                                    <span class="badge badge-pill badge-danger p-2">

                                                                    </span> -->



                                                                </td>
                                                                <td>₱ <?= $order_list['p_price'] * $order_list['o_quantity'] . '.00' ?>
                                                                </td>

                                                            </tr>
                                                            <?php endforeach; ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-info" role="tabpanel"
                                            aria-labelledby="account-info-tab">
                                            <div class="myaccount-content">
                                                <h3>Account Details</h3>
                                                <div class="account-details-form">
                                                    <?php if(session()->get('error')): ?>
                                                    <div class="alert alert-danger mb-5" role="alert">
                                                        <?= session()->get('error') ?>
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php if(session()->get('success')): ?>
                                                    <div class="alert alert-success mb-5" role="alert">
                                                        <?= session()->get('success') ?>
                                                    </div>
                                                    <?php endif; ?>
                                                    <?= form_open('/updateProfile'); ?>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="single-input-item">
                                                                <label for="first-name" class="required">                                                                    Name</label>
                                                                <input type="text" name="fullname" id="first-name"
                                                                    value="<?= session()->get('fullname'); ?>" />
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="last-name">Last
                                                                    Name</label>
                                                                <input type="text" name="lastname" id="last-name"
                                                                    value="<?= session()->get('lastname'); ?>" />
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="email" name="email_add">Email Addres</label>
                                                        <input type="email" id="email" name="email"
                                                            value="<?= session()->get('email'); ?>" />
                                                    </div>
                                                    <fieldset>
                                                        <legend>Password change</legend>
                                                        <!-- <div class="single-input-item">
                                                                    <label for="current-pwd">Current Password</label>
                                                                    <input type="password" name="password" id="password" />
                                                                </div> -->
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="new-pwd">New Password</label>
                                                                    <input type="password" id="new-pwd"
                                                                        name="new-pwd" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="confirm-pwd">Confirm
                                                                        Password</label>
                                                                    <input type="password" id="confirm-pwd"
                                                                        name="confirm-pwd" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="single-input-item">
                                                        <button type="submit" class="check-btn sqr-btn" readonly>Save
                                                            Changes</button>
                                                    </div>
                                                    <?= form_close(); ?>
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
        <!--== End My Account Wrapper ==-->
    </main>

    <!--== Start Footer Main ==-->

    <?php echo view('home_layouts/footer'); ?>

    <!--== End Footer Main ==-->


    <!--== Scroll Top Button ==-->
    <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

    <!--== Start Aside Cart ==-->
    <aside class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h1 class="d-none" id="offcanvasRightLabel">Shopping Cart</h1>
            <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">Shopping Cart <i
                    class="fa fa-chevron-right"></i></button>
        </div>
        <div class="offcanvas-body">
            <ul class="aside-cart-product-list">
                <li class="aside-product-list-item">
                    <a href="#/" class="remove">×</a>
                    <a href="single-product.html">
                        <img src="assets/img/shop/product-mini/1.webp" width="90" height="110" alt="Image-HasTech">
                        <span class="product-title">Leather Mens Slipper</span>
                    </a>
                    <span class="product-price">1 × £69.99</span>
                </li>
                <li class="aside-product-list-item">
                    <a href="#/" class="remove">×</a>
                    <a href="single-product.html">
                        <img src="assets/img/shop/product-mini/2.webp" width="90" height="110" alt="Image-HasTech">
                        <span class="product-title">Quickiin Mens shoes</span>
                    </a>
                    <span class="product-price">1 × £20.00</span>
                </li>
            </ul>
            <p class="cart-total"><span>Subtotal:</span><span class="amount">£89.99</span></p>
            <a class="btn-total" href="shop-cart.html">View cart</a>
            <a class="btn-total" href="shop-checkout.html">Checkout</a>
            <a class="d-block text-end lh-1" href="shop-checkout.html"><img src="assets/img/photos/paypal.webp"
                    width="133" height="26" alt="Has-image"></a>
        </div>
    </aside>
    <!--== End Aside Cart ==-->
</div>

<!--=======================Javascript============================-->

<!--=== jQuery Modernizr Min Js ===-->
<script src="home_layouts/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="home_layouts/js/jquery-main.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="home_layouts/js/jquery-migrate.js"></script>
<!--=== jQuery Popper Min Js ===-->
<script src="home_layouts/js/popper.min.js"></script>
<!--=== jQuery Bootstrap Min Js ===-->
<script src="home_layouts/js/bootstrap.min.js"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="home_layouts/js/swiper.min.js"></script>
<!--=== jQuery Fancybox Min Js ===-->
<script src="home_layouts/js/fancybox.min.js"></script>
<!--=== jQuery Countdown Min Js ===-->
<script src="home_layouts/js/countdown.js"></script>
<!--=== jQuery Isotope Min Js ===-->
<script src="home_layouts/js/isotope.pkgd.min.js"></script>
<!--=== jQuery Range Slider Min Js ===-->
<script src="home_layouts/js/ion.rangeSlider.min.js"></script>

<!--=== jQuery Custom Js ===-->
<script src="home_layouts/js/custom.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $(".check-btn").prop('disabled', true);

    if ($('#password').focus()) {
        $(".check-btn").prop('disabled', false);
    } else {
        $(".check-btn").prop('disabled', true);
    }
});
</script>

</body>

</html>