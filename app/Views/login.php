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
              <form action="#">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="username">Username or email address <span class="required">*</span></label>
                      <input id="username" class="form-control" type="email">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="password">Password <span class="required">*</span></label>
                      <input id="password" class="form-control" type="password">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <a class="btn-login" href="account.html">Login</a>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group account-info-group mb--0">
                      <a class="lost-password" href="account-register.html">Lost your password?</a>
                    </div>
                  </div>
                </div>
              </form>
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
              <p class="copyright">© <?= date('Y'); ?> Pet Shop. Made with <i class="fa fa-heart"></i><a target="_blank" href="#">.</a></p>
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

  <!--== Start Product Quick Wishlist Modal ==-->
  <aside class="product-action-modal modal fade" id="action-WishlistModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="product-action-view-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal">
              <i class="pe-7s-close"></i>
            </button>
            <div class="modal-action-messages">
              <i class="pe-7s-check"></i>  Added to wishlist successfully!
            </div>
            <div class="modal-action-product">
              <div class="thumb">
                <img src="assets/img/shop/modal1.webp" alt="Organic Food Juice" width="466" height="320">
              </div>
              <h4 class="product-name"><a href="single-product.html">Joust Duffle Bag</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <!--== End Product Quick Wishlist Modal ==-->

  <!--== Start Product Quick Add Cart Modal ==-->
  <aside class="product-action-modal modal fade" id="action-CartAddModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="product-action-view-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal">
              <i class="pe-7s-close"></i>
            </button>
            <div class="modal-action-messages">
              <i class="pe-7s-check"></i>  Added to cart successfully!
            </div>
            <div class="modal-action-product">
              <div class="thumb">
                <img src="assets/img/shop/modal1.webp" alt="Organic Food Juice" width="466" height="320">
              </div>
              <h4 class="product-name"><a href="single-product.html">Joust Duffle Bag</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <!--== End Product Quick Add Cart Modal ==-->

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
                    <img src="assets/img/shop/quick-view1.webp" width="544" height="560" alt="Image-HasTech">
                  </div>
                  <!--== End Product Thumbnail Area ==-->
                </div>
                <div class="col-lg-6">
                  <!--== Start Product Info Area ==-->
                  <div class="product-single-info">
                    <h3 class="main-title">Joust Duffle Bag</h3>
                    <div class="prices">
                      <span class="price">$20.19</span>
                    </div>
                    <div class="rating-box-wrap">
                      <div class="rating-box">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <div class="review-status">
                        <a href="javascript:void(0)">(5 Customer Review)</a>
                      </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nol exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                    <div class="product-single-meta">
                      <ul>
                        <li><span>SKU:</span> Ch-256xl</li>
                        <li><span>Categories:</span> 
                          <a href="#">Pet Food. eCommerce</a>
                        </li>
                        <li><span>Tags:</span> 
                          <a href="#">Petfood. Pet</a>,
                          <a href="#">Animal.</a>
                        </li>
                      </ul>
                    </div>
                    <div class="product-quick-action">
                      <div class="qty-wrap">
                        <div class="pro-qty">
                          <input type="text" title="Quantity" value="01">
                        </div>
                      </div>
                      <button type="button" class="btn-product-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                        Add To Cart
                      </button>
                        <button type="button" class="btn-product-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                          <i class="pe-7s-like"></i>
                        </button>
                      <button type="button" class="btn-product-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                        <i class="pe-7s-look"></i>
                      </button>
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

  <!--== Start Aside Cart ==-->
  <aside class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h1 class="d-none" id="offcanvasRightLabel">Shopping Cart</h1>
      <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">Shopping Cart <i class="fa fa-chevron-right"></i></button>
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
      <a class="d-block text-end lh-1" href="shop-checkout.html"><img src="assets/img/photos/paypal.webp" width="133" height="26" alt="Has-image"></a>
    </div>
  </aside>
  <!--== End Aside Cart ==-->

  <!--== Start Aside Menu ==-->
  <aside class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h1 class="d-none" id="offcanvasExampleLabel">Aside Menu</h1>
      <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">menu <i class="fa fa-chevron-left"></i></button>
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