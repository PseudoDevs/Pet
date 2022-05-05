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
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area">
      <div class="swiper home-slider-container default-slider-container">
        <div class="swiper-wrapper home-slider-wrapper slider-default">
          <div class="swiper-slide">
            <div class="slider-content-area" data-bg-img="assets/img/slider/slider-bg.webp">
              <div class="container">
                <div class="slider-container">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-sm-6 col-md-6">
                      <div class="slider-content">
                        <div class="content">
                          <div class="sub-title-box">
                            <h5 class="sub-title">Hello There,</h5>
                          </div>
                          <div class="title-box">
                            <h2 class="title">Find The Right Pet For You.</h2>
                          </div>
                          <div class="btn-box">
                            <a class="btn-theme text-dark" href="#">View Pets</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="slider-thumb mousemove">
                        <div class="thumb">
                          <img src="assets/img/slider/slider-01.webp" width="585" height="579" alt="Image-HasTech">
                          <div class="shape-one"></div>
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
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Product Category Area Wrapper ==-->
    <section class="product-area product-category-area bg-color-f2">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title shape-center text-center">
              <h5 class="sub-title">NEW PETS LIST FOR</h5>
              <h2 class="title">ADOPTION</h2>
            </div>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-gutter-43">
          <div class="col">
            <!--== Start Product Category Item ==-->
            <div class="product-category-item">
              <div class="thumb">
                <a href="#"><img src="assets/img/shop/category/1.webp" width="200" height="200" alt="Image-HasTech"></a>
              </div>
              <div class="content">
                <h3 class="title"><a href="#">Cats</a></h3>
              </div>
            </div>
            <!--== End Product Category Item ==-->
          </div>
          <div class="col">
            <!--== Start Product Category Item ==-->
            <div class="product-category-item">
              <div class="thumb">
                <a href="#"><img src="assets/img/shop/category/2.webp" width="200" height="200" alt="Image-HasTech"></a>
              </div>
              <div class="content">
                <h3 class="title"><a href="#">Gold Fish</a></h3>
              </div>
            </div>
            <!--== End Product Category Item ==-->
          </div>
          <div class="col">
            <!--== Start Product Category Item ==-->
            <div class="product-category-item">
              <div class="thumb">
                <a href="#"><img src="assets/img/shop/category/3.webp" width="200" height="200" alt="Image-HasTech"></a>
              </div>
              <div class="content">
                <h3 class="title"><a href="#">Parrot</a></h3>
              </div>
            </div>
            <!--== End Product Category Item ==-->
          </div>
          <div class="col">
            <!--== Start Product Category Item ==-->
            <div class="product-category-item">
              <div class="thumb">
                <a href="#"><img src="assets/img/shop/category/4.webp" width="200" height="200" alt="Image-HasTech"></a>
              </div>
              <div class="content">
                <h3 class="title"><a href="#">Dog</a></h3>
              </div>
            </div>
            <!--== End Product Category Item ==-->
          </div>
          <div class="col">
            <!--== Start Product Category Item ==-->
            <div class="product-category-item">
              <div class="thumb">
                <a href="#"><img src="assets/img/shop/category/5.webp" width="200" height="200" alt="Image-HasTech"></a>
              </div>
              <div class="content">
                <h3 class="title"><a href="#">Rabbits</a></h3>
              </div>
            </div>
            <!--== End Product Category Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Category Area Wrapper ==-->

    <!--== Start About Area Wrapper ==-->
    <section class="about-area">
      <div class="container">
        <div class="about-item position-relative">
          <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
              <div class="about-content">
                <div class="section-title shape-left">
                  <h5 class="sub-title">Best PRODUCT</h5>
                  <h2 class="title">Best Pet Food</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                <p>Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidata non proident, sunt in culpa qui officia deserun mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error.</p>
                <a class="btn-theme" href="#">Shop Now</a>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
              <div class="about-thumb">
                <img src="assets/img/about/1.webp" width="569" height="577" alt="Image-HasTech">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End About Area Wrapper ==-->
  </main>

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
                <a href="account.html"><img src="assets/img/photos/payment.webp" width="192" height="21" alt="Payment Logo"></a>
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