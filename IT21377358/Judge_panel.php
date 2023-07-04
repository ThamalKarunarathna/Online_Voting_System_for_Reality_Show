<?php

session_start();

include("php/conn.php");


?>

<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from codeigniter.spruko.com/valex/ltr/public/pages/horizontal-light by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jul 2021 14:27:02 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="dashboard, admin, bootstrap admin template, codeigniter, php, php framework, codeigniter 4, php mvc, php codeigniter, best php framework, codeigniter admin, codeigniter dashboard, admin panel template, bootstrap 4 admin template, bootstrap dashboard template" />

    <!-- Title -->
    <title> BRIO </title>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon" />

    <!-- Bootstrap css-->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Icons css -->
    <link href="assets/css/icons.css" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />

    <!-- Style css -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-dark.css" rel="stylesheet">


    <!-- Maps css -->
    <link href="assets/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">


    <!-- Skinmodes css -->
    <link href="assets/css/skin-modes.css" rel="stylesheet" />

    <!-- Animations css -->
    <link href="assets/css/animate.css" rel="stylesheet">

    <!---Switcher css-->
    <link href="assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="assets/switcher/demo.css" rel="stylesheet">
</head>

<body class="main-body">


    <!-- Loader -->
    <div id="global-loader">
        <img src="assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <!-- main-header -->
        <?php include("header.php") ?>
        <!-- /main-header -->
        <!--Horizontal-main -->
        <?php include("nav.php") ?>
        <!--Horizontal-main -->


        <!-- main-content opened -->
        <div class="main-content horizontal-content">
            <!-- container opened -->
            <div class="container">


                <div class="breadcrumb-header justify-content-between">
                    <div class="my-auto">
                        <div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">Panel of Judge</h4>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="panel panel-primary tabs-style-2">
                        <div class=" tab-menu-heading">
                            <div class="tabs-menu1">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs main-nav-line">
                                    <li>
                                        <a href="#tab4" class="nav-link active" data-toggle="tab">Judge 01 <br>
                                            <img src="assets/img/faces/1.jpg" alt="" style="padding:5px;">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab5" class="nav-link" data-toggle="tab">Judge 02 <br>
                                            <img src="assets/img/faces/2.jpg" alt="" style="padding:5px;">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab6" class="nav-link" data-toggle="tab">Judge 03 <br>
                                            <img src="assets/img/faces/3.jpg" alt="" style="padding:5px;">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body tabs-menu-body main-content-body-right border">
                            <div class="tab-content">


                                <div class="tab-pane active" id="tab4">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary">Trending Performance</h4>
                                                <?php
                                                $sql = "SELECT * FROM performance_video,competitors WHERE  performance_video.P_COMPETITOR_ID = competitors.CO_ID  AND competitors.CO_TEAM_ID = 1 LIMIT 1";
                                                $result = $conn->query($sql);
                                                while ($row = $result->fetch_assoc()) {
                                                ?>

                                                    <iframe width="100%" height="315" src="<?= $row["P_VIDEO_EMBERED_LINK"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <?php } ?>
                                                <div class="static-rate  fs-30 mt-3">
                                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary">Uploads</h4>
                                                <?php
                                                $sql = "SELECT * FROM performance_video,competitors WHERE  performance_video.P_COMPETITOR_ID = competitors.CO_ID  AND competitors.CO_TEAM_ID = 1 LIMIT 2";
                                                $result = $conn->query($sql);
                                                while ($row = $result->fetch_assoc()) {
                                                ?>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <iframe width="100%" height="156" src="<?= $row["P_VIDEO_EMBERED_LINK"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </div>
                                                        <div class="col-6">
                                                            <p><?= $row["P_DESCRIPTION"] ?></p>
                                                        </div>
                                                    </div>
                                                <?php } ?>


                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary">Team Members</h4>
                                                <div class="row">
                                                    <?php
                                                    $sql = "SELECT * FROM competitors WHERE competitors.CO_TEAM_ID = 1 ";
                                                    $result = $conn->query($sql);
                                                    while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                        <div class="col-2"><img src="assets/img/faces/<?= $row["CO_IMAGE"] ?>" alt=""></div>
                                                    <?php } ?>

                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>





                                <div class="tab-pane" id="tab5">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary">Trending Performance</h4>
                                                <?php
                                                $sql = "SELECT * FROM performance_video,competitors WHERE  performance_video.P_COMPETITOR_ID = competitors.CO_ID  AND competitors.CO_TEAM_ID = 2 LIMIT 1";
                                                $result = $conn->query($sql);
                                                while ($row = $result->fetch_assoc()) {
                                                ?>

                                                    <iframe width="100%" height="315" src="<?= $row["P_VIDEO_EMBERED_LINK"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <?php } ?>
                                                <div class="static-rate  fs-30 mt-3">
                                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary">Uploads</h4>
                                                <?php
                                                $sql = "SELECT * FROM performance_video,competitors WHERE  performance_video.P_COMPETITOR_ID = competitors.CO_ID  AND competitors.CO_TEAM_ID = 2 LIMIT 2";
                                                $result = $conn->query($sql);
                                                while ($row = $result->fetch_assoc()) {
                                                ?>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <iframe width="100%" height="156" src="<?= $row["P_VIDEO_EMBERED_LINK"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </div>
                                                        <div class="col-6">
                                                            <p><?= $row["P_DESCRIPTION"] ?></p>
                                                        </div>
                                                    </div>
                                                <?php } ?>


                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary">Team Members</h4>
                                                <div class="row">
                                                    <?php
                                                    $sql = "SELECT * FROM competitors WHERE competitors.CO_TEAM_ID = 2 ";
                                                    $result = $conn->query($sql);
                                                    while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                        <div class="col-2"><img src="assets/img/faces/<?= $row["CO_IMAGE"] ?>" alt=""></div>
                                                    <?php } ?>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>



                                <div class="tab-pane" id="tab6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary">Trending Performance</h4>
                                                <?php
                                                $sql = "SELECT * FROM performance_video,competitors WHERE  performance_video.P_COMPETITOR_ID = competitors.CO_ID  AND competitors.CO_TEAM_ID = 3 LIMIT 1";
                                                $result = $conn->query($sql);
                                                while ($row = $result->fetch_assoc()) {
                                                ?>

                                                    <iframe width="100%" height="315" src="<?= $row["P_VIDEO_EMBERED_LINK"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <?php } ?>
                                                <div class="static-rate  fs-30 mt-3">
                                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary">Uploads</h4>
                                                <?php
                                                $sql = "SELECT * FROM performance_video,competitors WHERE  performance_video.P_COMPETITOR_ID = competitors.CO_ID  AND competitors.CO_TEAM_ID = 3 LIMIT 2";
                                                $result = $conn->query($sql);
                                                while ($row = $result->fetch_assoc()) {
                                                ?>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <iframe width="100%" height="156" src="<?= $row["P_VIDEO_EMBERED_LINK"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </div>
                                                        <div class="col-6">
                                                            <p><?= $row["P_DESCRIPTION"] ?></p>
                                                        </div>
                                                    </div>
                                                <?php } ?>


                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary">Team Members</h4>
                                                <div class="row">
                                                    <?php
                                                    $sql = "SELECT * FROM competitors WHERE competitors.CO_TEAM_ID = 3 ";
                                                    $result = $conn->query($sql);
                                                    while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                        <div class="col-2"><img src="assets/img/faces/<?= $row["CO_IMAGE"] ?>" alt=""></div>
                                                    <?php } ?>

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
            <!-- Container closed -->
        </div>
        <!-- main-content closed -->



        <!-- Footer opened -->
        <?php include("footer.php"); ?>
        <!-- Footer closed -->
    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Ionicons js -->
    <script src="assets/plugins/ionicons/ionicons.js"></script>

    <!-- Moment js -->
    <script src="assets/plugins/moment/moment.js"></script>

    <!-- P-scroll js -->
    <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

    <!-- eva-icons js -->
    <script src="assets/js/eva-icons.min.js"></script>

    <!-- Rating js-->
    <script src="assets/plugins/rating/jquery.rating-stars.js"></script>
    <script src="assets/plugins/rating/jquery.barrating.js"></script>

    <!-- Horizontalmenu js-->
    <script src="assets/plugins/horizontal-menu/horizontal-menu-2/horizontal-menu.js"></script>

    <!-- Sticky js -->
    <script src="assets/js/sticky.js"></script>

    <!-- Right-sidebar js -->
    <script src="assets/plugins/sidebar/sidebar.js"></script>
    <script src="assets/plugins/sidebar/sidebar-custom.js"></script>


    <!--Internal  Chart.bundle js -->
    <script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>

    <!--Internal Sparkline js -->
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Raphael js -->
    <script src="assets/plugins/raphael/raphael.min.js"></script>

    <!--Internal Apexchart js-->
    <script src="assets/js/apexcharts.js"></script>

    <!-- Internal Map -->
    <script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <!--Internal  index js -->
    <script src="assets/js/index.js"></script>
    <script src="assets/js/jquery.vmap.sampledata.js"></script>


    <!-- custom js -->
    <script src="assets/js/custom.js"></script>

    <!-- Switcher js -->
    <script src="assets/switcher/js/switcher.js"></script>
</body>

<!-- Mirrored from codeigniter.spruko.com/valex/ltr/public/pages/horizontal-light by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jul 2021 14:27:03 GMT -->

</html>