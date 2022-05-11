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
                            <h2 class="title text-white">Products</h2>
                            <nav class="breadcrumb-area">
                                <ul class="breadcrumb">
                                    <li><a href="/" class="text-white">Home</a></li>
                                    <li class="breadcrumb-sep text-white">//</li>
                                    <li class="text-white">Products</li>
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
                                        <?php foreach($home_products as $product): ?>
                                        <div class="col-sm-6 col-xl-4">
                                            <!--== Start Product Item ==-->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <a href="#">
                                                        <img src="uploads/<?= $product['p_thumbnail']; ?>" width="270"
                                                            height="270" alt="<?= $product['p_name']; ?>">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h4 class="title"><a href="#"><?= $product['p_name']; ?></a></h4>
                                                    <div class="prices">
                                                        <span class="price">₱<?= $product['p_price']; ?></span>
                                                    </div>
                                                </div>
                                                <div class="product-action">
                                                    <button type="button" data-id="<?= $product['id']; ?>" class="btn-product-quick-view"
                                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="pe-7s-look"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!--== End prPduct Item ==-->
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <?= $pager->links() ?>
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
                                    <img src="https://www.arraymedical.com/wp-content/uploads/2018/12/product-image-placeholder.jpg" class="p_thumb" width="544" height="560"
                                        alt="Image-HasTech">
                                </div>
                                <!--== End Product Thumbnail Area ==-->
                            </div>
                            <div class="col-lg-6">
                                <!--== Start Product Info Area ==-->
                                <div class="product-single-info">
                                    <h3 class="main-title"></h3>
                                    <div class="prices">
                                        <span class="price">Price: <span class="p_pricing"></span></span>
                                    </div>
                                    <p class="product_desc"></p>
                                    <div class="product-single-meta">
                                        <ul>
                                        </ul>
                                    </div>
                                    <div class="product-quick-action">
                                    <div class="pro-qty">
                          <input type="text" title="Quantity" value="01">
                        </div>
                                    <button type="button" class="btn-product-cart" >
                        Add To Cart
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

<script>

    $('.btn-product-quick-view').click(function(e){
        e.preventDefault();
        var id = $(this).data('id');
        $.get('/product-details/'+ id, function(data) {
            const dataParser = JSON.parse(data);
            $(".main-title").text(dataParser.p_name);
            $(".product_desc").text(dataParser.p_description);
            $(".p_thumb").attr("src", "uploads/"+dataParser.p_thumbnail);
            $(".p_pricing").text("₱" + dataParser.p_price + ".00");
            
        });
    });


</script>