<?php 

echo view('home_layouts/header');

?>

<style>
.btn_choose_sent input {
    -webkit-appearance: none;
    display: block;
    margin: 10px;
    width: 18px;
    height: 18px;
    border-radius: 12px;
    cursor: pointer;
    vertical-align: middle;
    box-shadow: hsla(0, 0%, 100%, .15) 0 1px 1px, inset hsla(0, 0%, 0%, .5) 0 0 0 1px;
    background-color: hsla(0, 0%, 0%, .2);
    background-image: -webkit-radial-gradient(#fff 0%, #fff 15%, #fff 28%, #fff 70%);
    background-repeat: no-repeat;
    -webkit-transition: background-position .15s cubic-bezier(.8, 0, 1, 1),
        -webkit-transform .25s cubic-bezier(.8, 0, 1, 1);
    outline: none;
}

.btn_choose_sent input:checked {
    -webkit-transition: background-position .2s .15s cubic-bezier(0, 0, .2, 1),
        -webkit-transform .25s cubic-bezier(0, 0, .2, 1);
}

.btn_choose_sent input:active {
    -webkit-transform: scale(1.5);
    -webkit-transition: -webkit-transform .1s cubic-bezier(0, 0, .2, 1);
}



/* The up/down direction logic */

.btn_choose_sent input,
.btn_choose_sent input:active {
    background-position: 0 24px;
}

.btn_choose_sent input:checked {
    background-position: 0 0;
}

.btn_choose_sent input:checked~input,
.btn_choose_sent input:checked~input:active {
    background-position: 0 -24px;
}

.btn_choose_sent {
    background: #ef2d2d;
    color: #fff;
    box-shadow: 0 10px 20px rgba(125, 147, 178, .3);
    border: none;
    border-radius: 3px;
    font-size: 16px;
    line-height: 10px;
    padding: 16px 20px 16px 38px;
    text-align: center;
    display: inline-block;
    text-decoration: none;
    margin-right: 30px;
    transition: all .3s;
    height: auto;
    cursor: pointer;
    position: relative;
    outline: none;
}

.btn_choose_sent input {
    position: absolute;
    left: 0;
    right: 0;
    z-index: 99;
    top: 2px;
}

.btn_choose_sent input:after {
    position: absolute;
    content: '';
    width: 15rem;
    left: 0;
    right: 0;
    /* background: red; */
    /* z-index: -1; */
    height: 40px;
    top: -10px;
}

.bg_btn_chose_1 {
    background-color: #ef2d2d !important;
}

/*-=p=--=*/




.btn_choose_sent_check_b {
    background: #EF2D56;
    color: #fff;
    box-shadow: 0 10px 20px rgba(125, 147, 178, .3);
    border: none;
    border-radius: 3px;
    font-size: 16px;
    line-height: 10px;
    padding: 16px 20px 16px 46px;
    text-align: center;
    display: inline-block;
    text-decoration: none;
    margin-right: 30px;
    transition: all .3s;
    height: auto;
    cursor: pointer;
    position: relative;
    outline: none;
}

.dropify-message {
    font-size: 2px;
}

.quantity {
    position: relative;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type=number] {
    -moz-appearance: textfield;
}

.product-quantity input {
    width: 45px;
    height: 42px;
    line-height: 1.65;
    float: left;
    display: block;
    padding: 0;
    margin: 0;
    padding-left: 20px;
    border: 1px solid #eee;
}

.product-quantity input:focus {
    outline: 0;
}

.quantity-nav {
    float: left;
    position: relative;
    height: 42px;
}

.quantity-button {
    position: relative;
    cursor: pointer;
    border-left: 1px solid #eee;
    width: 20px;
    text-align: center;
    color: #333;
    font-size: 13px;
    font-family: "Trebuchet MS", Helvetica, sans-serif !important;
    line-height: 1.7;
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}

.quantity-button.quantity-up {
    position: absolute;
    height: 50%;
    top: 0;
    border-bottom: 1px solid #eee;
}

.quantity-button.quantity-down {
    position: absolute;
    bottom: -1px;
    height: 50%;
}
</style>
<!--wrapper start-->
<div class="wrapper">



    <!--== Start Header Wrapper ==-->
    <?php echo view('home_layouts/navigation'); ?>
    <!--== End Header Wrapper ==-->

    <main class="main-content">

        <!--== Start Page Header Area Wrapper ==-->
        <div class="page-header-area"
            data-bg-img="https://cdn.cbeditz.com/cbeditz/preview/simple-red-gradient-background-download-1-11614352992huqkzfx4ql.jpg">
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content">
                            <h2 class="title text-white">Cart</h2>
                            <nav class="breadcrumb-area">
                                <ul class="breadcrumb">
                                    <li><a href="/" class="text-white">Home</a></li>
                                    <li class="breadcrumb-sep">//</li>
                                    <li>Cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--== Start Blog Area Wrapper ==-->
        <section class="shopping-cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shopping-cart-form table-responsive">
                            <p><b>Note: </b>Once the order status is processing your order is already successful and
                                ready to pick up in your time and date schedule. Please present the Screen shot of this
                                to the Shop. You only have 7 days delay to pickup the item after that the order will
                                automatically rejected. The payment is non-refundable. Thank you!</p>
                            <table class="table text-center" id="cartTable">
                                <thead>
                                    <tr>
                                        <th class="product-select">&nbsp;</th>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="tbody-item">
                                        <td class="product-select">
                                            <input type="checkbox" id="select" data-id="" data-pro="" name="select">
                                        </td>
                                        <td class="product-remove">
                                            <a href="" class="remove" data-id="" id="removeTr">×</a>
                                        </td>
                                        <input type="hidden" id="cart_id" value="">
                                        <td class="product-thumbnail">
                                            <div class="thumb">
                                                <a href="single-product.html">
                                                    <img src="../uploads/" width="75" height="75" alt="Image-HasTech">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a class="title" id="product_name"></a>
                                        </td>
                                        <td class="product-price">
                                            <span class="price" id="p_price" data-price="">₱ </span>
                                        </td>
                                        <td class="product-quantity">
                                            <input type="text" class="quantity" value="" id="setQuantity"
                                                title="Quantity">

                                        </td>
                                        <td class="product-subtotal">
                                            <span class="price" id="totalPrice">0.00</span>
                                        </td>
                                    </tr>

                                    <tr class="tbody-item-actions">
                                        <td colspan="7">
                                            <button type="button" class="btn-update-cart disabled" disabled
                                                id="update_cart">Update cart</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </section>
        <!--== End Blog Area Wrapper ==-->
    </main>




    <!--== Start Footer Area Wrapper ==-->
    <?php echo view('home_layouts/footer'); ?>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.25.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
    integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="../js/plugins-init/dropify-init.js"></script>


<script>
$(function() {
    $('[data-toggle="tooltip"]').tooltip();
});

var num = null;
$("#time-select").on("click", "button", function() {
    console.log($(this).text());
    $(this).addClass('active').siblings().removeClass('active');
});

// $('#submitCart').submit(function() {
//     $('#checkOutBtn').prop('disabled', true);
// });
</script>


<script>
$('#cartTable').on('click', '#removeTr', function() {
    const id = $(this).data('id');
    // $(this).clos.remove();
    $.post("/deleteCart", {
            cart_id: id,
        },
        function(data, status) {
            location.href = "/cart";
        });

});
</script>


<script>
$("#cartTable").find('tr').each(function() {
    $("#cartTable").find('tr').each(function() {
        var currentRow = $(this);
        var v_total = currentRow.find("#p_price").data('price');
        var v_quantity = currentRow.find("#setQuantity").val();

        const totalPrice = v_total * v_quantity;
        currentRow.find("#totalPrice").text("₱ " + totalPrice);
    });
});


$('#cartTable').on('change', '#setQuantity', function() {

    $("#cartTable").find('tr').each(function() {
        var currentRow = $(this);
        var v_total = currentRow.find("#p_price").data('price');
        var v_quantity = currentRow.find("#setQuantity").val();

        const totalPrice = v_total * v_quantity;
        currentRow.find("#totalPrice").text("₱ " + totalPrice);
    });
    $('#update_cart').removeClass('disabled').prop("disabled", false);


});

var data = [];
var getname = [];
$('#update_cart').click(function() {

    data.length = 0;
    $('#cartTable tr').each(function() {

        var cart_id = $(this).find('#cart_id').val();
        var quantity = $(this).find('#setQuantity').val();
        var postdata = {
            id: cart_id,
            quantity: quantity,
        };
        data.push(postdata);

        data.slice(1);


    });
    $.post("/updateCart", {
            data: data.filter(Boolean),
        },
        function(data, status) {
            // alert("Data: " + data + "\nStatus: " + status);
            location.href = "/cart";
            getListCheckOut()
        });
})

$('#checkOutBtn').click(function(e) {
    e.preventDefault();
    var form_data = new FormData($('#submitCart')[0]);
    const date = $('input[name=date_pickup]').val()
    const time = $('input[name="time"]:checked').val()


    var selected = [];
    var idSelected = [];
    selected.splice(0, selected.length)
    $('#cartTable input[name="select"]:checked').each(function() {
        var postdata = {
            fid: $(this).data('id'),
            pickup_date: date,
            time: time,
            order_status: "Pending"
        };
        var postdata2 = {
            id: $(this).data('id'),
            status: 1

        };
        idSelected.push(postdata2);
        selected.push(postdata);
    });


    $.post("/insertCart", {
            data: selected.filter(Boolean),
        },
        function(data, status) {
            $.ajax({
                url: '/uploadRefCheckout',
                type: "post",
                data: form_data,
                processData: false,
                contentType: false,
                success: function(data) {
                    var obj = jQuery.parseJSON(data);
                    var finald = [];
                    finald.slice(0, finald.length);
                    $('#cartTable input[name="select"]:checked').each(function() {
                        var finaldata = {
                            fid: $(this).data('id'),
                            reference_app: obj.reference_app,
                            reference_sms: obj.reference_sms,
                            reference_input: obj.reference_input
                        };
                        finald.push(finaldata);
                    });

                    $.post("/insertToGcashTable", {
                            data: finald,
                        },
                        function(data, status) {
                            //alert("Data: " + data + "\nStatus: " + status);
                        });




                }
            });

        });

    $.post("/updateCardtoCheckout", {
            data: idSelected.filter(Boolean),
        },
        function(data, status) {
            // alert("Data: " + data + "\nStatus: " + status);
            location.href = "/cart";
        });

});


$('#cartTable').on('click', '#select', function() {
    getListCheckOut();
});


function getListCheckOut() {
    getname.splice(0, getname.length)
    $('#listcheckoutitem').empty()
    $('#cartTable input[name="select"]:checked').each(function() {
        var getPrice = $(this).closest('tr').find('#p_price').data('price');
        var getQuantity = $(this).closest('tr').find('#setQuantity').val();
        var postdata = {
            product_name: $(this).data('pro'),
            totalPrice: getPrice * getQuantity
        };
        getname.push(postdata);
    });

    $.each(getname, function(index, value) {
        $('#listcheckoutitem').append('<tr class="order-total"><th></th><th>Product Name: ' + value
            .product_name + ' </th><td><span class="amount">₱ ' + value.totalPrice + '</span></td></tr>');
    });

    //             $.each(getname, function(index, value) {
    //                 var total = 0;
    //                  console.log(total + value.totalPrice);
    // // for (var i = 0; i < index.length; i++) {
    // //     console.log(value.totalPrice + );
    // // }

    //             });

    var total = 0;
    for (var i = 0; i < getname.length; i++) {
        total += getname[i].totalPrice;
    }
    $('.totalCartPrice').html("<h2>TOTAL : </h2>" + "<h2 class='display-4 font-weight-bold'>₱" + total + "</h2>");




}
</script>


<script>
$(document).ready(function() {


    if ($('input[name=date_pickup]').val() == "") {
        $('input[name=time]').attr('disabled', true);
    }


    $('input[name=date_pickup]').on('change', function() {

        $('input[name=time]').attr('disabled', false);

        var thisS = $(this);
        $.get("/checkTime", function(data, status) {
            var obj = jQuery.parseJSON(data);
            console.log(data);

            for (var i = 0; i < obj.length; i++) {
                if (obj[i].pickup_date == thisS.val()) {

                    if (obj[i].total <= 5) {
                        $('input[name=time][value="' + obj[i].time + '"]').attr('disabled',
                            true)
                    }
                }

            }
        });
    });



})
</script>

</body>

</html>