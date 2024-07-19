<nav class="navbar nav-header navbar-expand-lg pt-4 pb-4 pr-5 pl-5 mb-5">
        <a class="navbar-brand d-flex" href="./">  <?= $siteTitle ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item <?php if($page == 'home') echo 'active' ?>">
                    <a class="nav-link" href="./">Home </a>
                </li>
                <li class="nav-item <?php if($page == 'products') echo 'active' ?>">
                    <a class="nav-link" href="./?page=products">Products</a>
                </li>
                <li class="nav-item <?php if($page == 'price') echo 'active' ?>">
                    <a class="nav-link" href="./?page=price">Price</a>
                </li>
                <li class="nav-item <?php if($page == 'about') echo 'active' ?>">
                    <a class="nav-link" href="./?page=about">About Us</a>
                </li>

            </ul>
            
                <a type="button" href="./?page=cart" class="btn my-sm-0 pr-3 cart-btn">Cart <i class="fal fa-shopping-cart"></i></a>
        </div>

            <!-- Ionic Icons -->
            <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    </nav>

    