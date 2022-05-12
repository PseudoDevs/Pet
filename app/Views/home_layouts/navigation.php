<header class="header-area transparent">
    <div class="container">
        <div class="row no-gutter align-items-center position-relative">
            <div class="col-12">
                <div class="header-align">
                    <div class="header-align-start">
                        <div class="header-logo-area">
                            <a href="/">
                                <img class="logo-main" src="assets/img/pet-shop.png" width="80" height="50"
                                    alt="Logo" />
                            </a>
                        </div>
                    </div>
                    <div class="header-align-center">
                        <div class="header-navigation-area position-relative">
                            <ul class="main-menu nav">

                                <?php if(session()->get('isLoggedIn') == true): ?>
                                <li><a href="/"><span>Home</span></a></li>
                                <li><a href="/home-about"><span>About</span></a></li>
                                <li><a href="/home-products"><span>Products</span></a></li>
                                <li><a href="/home-adoption"><span>Adoption</span></a></li>
                                <li><a href="/home-services"><span>Services</span></a></li>
                                <li><a href="/home-cart"><span>My Cart</span></a></li>
                                <li><a href="/home-profile"><span>My Profile</span></a></li>
                                <?php else: ?>
                                <li><a href="/"><span>Home</span></a></li>
                                <li><a href="/home-about"><span>About</span></a></li>
                                <li><a href="/home-products"><span>Products</span></a></li>
                                <li><a href="/home-adoption"><span>Adoption</span></a></li>
                                <li><a href="/home-services"><span>Services</span></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="header-align-end">
                        <div class="header-action-area">
                            <div class="shopping-account">
                                <?php if(session()->get('isLoggedIn') == true): ?>
                                <a class="shopping-account-btn" href="/authLogout">
                                    <i class="pe-7s-power icon"></i>
                                </a>
                                <?php else: ?>
                                <a class="shopping-account-btn" href="/login">
                                    <i class="pe-7s-users icon"></i>
                                </a>
                                <?php endif; ?>
                            </div>
                            <button class="btn-menu" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                                <i class="pe-7s-menu"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>