<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
        <img style="width:30px;" src="<?= $siteLogo ?>" alt="">
        </div>
        <div class="sidebar-brand-text mx-1"> <?= $siteTitle ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item  <?php if($page == 'home') echo 'active' ?>">
        <a class="nav-link" href="./?page=home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>


    <?php
    $components = ["buttons", "card"];
    $utilities = ["utilities-color", "utilities-border", "utilities-animation","utilities-other"];
    $pages = ["login", "register", "forgot-password","404","blank"];
    ?>



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?php if(in_array($page, $components)) echo "active" ?>">
        <a class="nav-link  <?php if(!in_array($page, $components)) echo "collapsed" ?>" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse <?php if(in_array($page, $components)) echo "show" ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item <?php if ($page == 'buttons') echo 'active' ?>" href="./?page=buttons">Buttons</a>
                <a class="collapse-item <?php if ($page == 'card') echo 'active' ?>" href="./?page=card">Cards</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item <?php if(in_array($page, $utilities)) echo "active" ?>">
        <a class="nav-link <?php if(!in_array($page, $utilities)) echo "collapsed" ?>" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse <?php if(in_array($page, $utilities)) echo "show" ?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item <?php if ($page == 'utilities-color') echo 'active' ?>" href="./?page=utilities-color">Colors</a>
                <a class="collapse-item <?php if ($page == 'utilities-border') echo 'active' ?>" href="./?page=utilities-border">Borders</a>
                <a class="collapse-item <?php if ($page == 'utilities-animation') echo 'active' ?>" href="./?page=utilities-animation">Animations</a>
                <a class="collapse-item <?php if ($page == 'utilities-other') echo 'active' ?>" href="./?page=utilities-other">Other</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?php if(in_array($page, $pages)) echo "active" ?>">
        <a class="nav-link <?php if(!in_array($page, $pages)) echo "collapsed" ?>" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse <?php if(in_array($page, $pages)) echo "show" ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item <?php if ($page == 'login') echo 'active' ?>" href="./?page=login">Login</a>
                <a class="collapse-item <?php if ($page == 'register') echo 'active' ?>" href="./?page=register">Register</a>
                <a class="collapse-item <?php if ($page == 'forgot-password') echo 'active' ?>" href="./?page=forgot-password">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item <?php if ($page == '404') echo 'active' ?>" href="./?page=404">404 Page</a>
                <a class="collapse-item <?php if ($page == 'blank') echo 'active' ?>" href="./?page=blank">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item <?php if($page == 'charts') echo 'active' ?>">
        <a class="nav-link" href="./?page=charts">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item <?php if($page == 'tables') echo 'active' ?>">
        <a class="nav-link" href="./?page=tables">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->