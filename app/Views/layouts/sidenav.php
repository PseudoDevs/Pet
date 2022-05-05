
<div id="body" class="theme-timber">

<!-- Theme Setting -->
<!-- <div class="themesetting">
    <a href="javascript:void(0);" class="theme_btn"><i class="fa fa-gear fa-spin"></i></a>
    <ul class="list-group">
        <li class="list-group-item">
            <ul class="choose-skin list-unstyled mb-0">
                <li data-theme="green"><div class="green"></div></li>
                <li data-theme="orange"><div class="orange"></div></li>
                <li data-theme="blush"><div class="blush"></div></li>
                <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                <li data-theme="timber"><div class="timber"></div></li>
                <li data-theme="blue"><div class="blue"></div></li>
                <li data-theme="amethyst"><div class="amethyst"></div></li>
            </ul>
        </li>
        <li class="list-group-item d-flex align-items-center justify-content-between">
            <span>Light Sidebar</span>
            <label class="switch sidebar_light">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </li>
        <li class="list-group-item d-flex align-items-center justify-content-between">
            <span>Gradient</span>
            <label class="switch gradient_mode">
                <input type="checkbox" checked="">
                <span class="slider round"></span>
            </label>
        </li>
        <li class="list-group-item d-flex align-items-center justify-content-between">
            <span>Dark Mode</span>
            <label class="switch dark_mode">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </li>
        <li class="list-group-item d-flex align-items-center justify-content-between">
            <span>RTL version</span>
            <label class="switch rtl_mode">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </li>
    </ul>
    <hr>
    <div>
        <a href="javascript:void(0);" class="btn btn-dark btn-block" target="_blank">Buy this item</a>
        <a href="javascript:void(0);" target="_blank" class="btn btn-primary theme-bg gradient btn-block">View Portfolio</a>
    </div>
</div> -->

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    <!-- Page top navbar -->
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="/">
                        <img src="admin_assets/images/icon.svg" alt="Mooli Logo" class="img-fluid logo">
                    </a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-align-left"></i></button>
                </div>
            </div>
            <div class="navbar-right">
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                        <li class="hidden-xs"><a href="javascript:void(0);" id="btnFullscreen" class="icon-menu"><i class="fa fa-arrows-alt"></i></a></li>
                            <li><a href="javascript:void(0);" class="right_note icon-menu" title="Right Menu">Logout</a></li>
                        </ul>
                    </div>
                </div>
        </div>
    </nav>

    <!-- Main left sidebar menu -->
    <div id="left-sidebar" class="sidebar">
        <a href="#" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
        <div class="navbar-brand">
            <a href="/"><img src="assets/img/pet-shop.png" alt="Seymoure's Logo" class="img-fluid logo"><span>Seymoure's Dashboard</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="admin_assets/images/user.png" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>Administrator</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Alan Green</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                        <li><a href="/profile"><i class="fa fa-user"></i>My Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-power-off"></i>Logout</a></li>
                    </ul>
                </div>
            </div>  
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu animation-li-delay">
                    <li class="header">Main</li>
                    <li><a href="/admin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

                    <li class="header">Dashboard Apps</li>
                    <li><a href="/sales"><i class="fa fa-folder"></i> <span>Sales</span></a></li>
                    <li><a href="/product"><i class="fa fa-address-book"></i> <span>Products</span></a></li>
                    <li><a href="/adoptions"><i class="fa fa-globe"></i> <span>Adoptions</span></a></li>
                    <li><a href="/services"><i class="fa fa-share-alt-square"></i> <span>Services</span></a></li>
                    <li><a href="/payments"><i class="fa fa-share-alt-square"></i> <span>Payments</span></a></li>
                    <li><a href="/accounts"><i class="fa fa-tasks"></i> <span>User Accounts</span></a></li>
                </ul>
            </nav>     
        </div>
    </div>