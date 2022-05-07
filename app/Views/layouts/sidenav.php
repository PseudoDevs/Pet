<?php 

if(session()->get('isLoggedIn') != true) {
    echo "<script>window.location.href='/login'</script>";
 }
 

?>
<div id="body" class="theme-timber">

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
                            <li class="hidden-xs"><a href="javascript:void(0);" id="btnFullscreen" class="icon-menu"><i
                                        class="fa fa-arrows-alt"></i></a></li>
                            <li><a href="/authLogout" class="right_note icon-menu" title="Right Menu">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main left sidebar menu -->
        <div id="left-sidebar" class="sidebar">
            <a href="#" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
            <div class="navbar-brand">
                <a href="/"><img src="assets/img/pet-shop.png" alt="Seymoure's Logo"
                        class="img-fluid logo"><span>Seymoure's Dashboard</span></a>
                <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i
                        class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
            </div>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <div class="user_div">
                        <img src="admin_assets/images/user.png" class="user-photo" alt="User Profile Picture">
                    </div>
                    <div class="dropdown">
                        <span><?= session()->get('role'); ?></span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name"
                            data-toggle="dropdown"><strong><?= session()->get('fullname'); ?></strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                            <li><a href="/profile"><i class="fa fa-user"></i>My Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="/authLogout"><i class="fa fa-power-off"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>


                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <?php if(session()->get('role') == 'Admin'): ?>
                    <ul id="main-menu" class="metismenu animation-li-delay">
                        <li class="header">Main</li>
                        <li><a href="/admin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

                        <li class="header">Dashboard Apps</li>
                        <li><a href="/sales"><i class="fa fa-folder"></i> <span>Sales</span></a></li>
                        <li><a href="/product"><i class="fa fa-address-book"></i> <span>Products</span></a></li>
                        <li>
                            <a href="#uiElements" class="has-arrow"><i
                                    class="fa fa-github-alt"></i><span>Adoptions</span></a>
                            <ul>
                                <li><a href="/adoptions">Manage Adoptions</a></li>
                                <li><a href="/approved-adoptions">Approved Adoptions</a></li>
                            </ul>
                        </li>
                        <li><a href="/services"><i class="fa fa-share-alt-square"></i> <span>Services</span></a></li>
                        <li><a href="/payments"><i class="fa fa-share-alt-square"></i> <span>Payments</span></a></li>
                        <li><a href="/accounts"><i class="fa fa-tasks"></i> <span>User Accounts</span></a></li>
                    </ul>
                    <?php elseif(session()->get('role') == 'User'): ?>
                    <ul id="main-menu" class="metismenu animation-li-delay">
                        <li class="header">Main</li>
                        <li><a href="/admin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

                        <li class="header">Dashboard Apps</li>
                        <li>
                            <a href="#uiElements" class="has-arrow"><i
                                    class="fa fa-github-alt"></i><span>Adoptions</span></a>
                            <ul>
                                <li><a href="/user-adoptions">Manage Adoptions</a></li>
                                <li><a href="/add-adoptions">Create Adoptions</a></li>
                            </ul>
                        </li>
                        <li><a href="/accounts"><i class="fa fa-tasks"></i> <span>My Account</span></a></li>
                    </ul>
                    <?php endif; ?>
                </nav>
            </div>
        </div>