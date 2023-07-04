<div class="main-header nav nav-item hor-header">
    <div class="container">
        <div class="main-header-left ">
            <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
            <a class="header-brand" href="index.html">
                <img src="assets/img/brand/logo-white.png" class="desktop-dark">
                <img src="assets/img/brand/logo.png" class="desktop-logo">
                <img src="assets/img/brand/favicon.png" class="desktop-logo-1">
                <img src="assets/img/brand/favicon-white.png" class="desktop-logo-dark">
            </a>
            <div class="main-header-center  ml-4">
                <form action="php/search.php" method="post"><input class="form-control" name="search" placeholder="Search..." type="search"><button type="submit" class="btn"><i class="fe fe-search"></i></button></form>
            </div>
        </div><!-- search -->
        <div class="main-header-right">
            <div class="nav nav-item  navbar-nav-right ml-auto">

                <div class="dropdown main-profile-menu nav nav-item nav-link">
                    <a class="profile-user d-flex" href="#"><img alt="" src="assets/img/faces/6.jpg"></a>
                    <?php if (isset($_SESSION['NAME'])) { ?>
                        <div class="dropdown-menu">
                            <div class="main-header-profile bg-primary p-3">
                                <div class="d-flex wd-100p">
                                    <div class="main-img-user"><img alt="" src="assets/img/faces/6.jpg" class=""></div>
                                    <div class="ml-3 my-auto">
                                        <h6><?= $_SESSION['NAME'] ?></h6><span>Premium Member</span>
                                    </div>
                                </div>
                            </div>
                            <a class="dropdown-item" href="/final/IT21189876/User_Account.php"><i class="bx bx-user-circle"></i>Profile</a>
                            <a class="dropdown-item" href="php/logout.php"><i class="bx bx-log-out"></i> Sign Out</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>