<?php
session_start();
include("php/conn.php");
$id = $_GET['id'];

$sql = "SELECT * FROM competitors WHERE CO_ID = $id LIMIT 1";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $CO_ID = $row['CO_ID'];
    $CO_NAME = $row['CO_NAME'];
    $CO_CONTACT = $row['CO_CONTACT'];
    $CO_EMAIL = $row['CO_EMAIL'];
    $CO_NUMBER = $row['CO_NUMBER'];
    $CO_IMAGE = $row['CO_IMAGE'];
}
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
                            <h4 class="content-title mb-0 my-auto">Competitor</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">

                                <div class="main-profile-overview">
                                    <div class="row">
                                        <div class="col-4 d-flex align-items-center justify-content-center">
                                            <div class="main-img-user profile-user ">
                                                <img alt="" src="assets/img/faces/<?= $CO_IMAGE ?>">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <table class="table table-bordered mg-b-0 text-md-nowrap">
                                                <tr>
                                                    <th>Name</th>
                                                    <td><?= $CO_NAME ?></td>
                                                </tr>
                                                <tr>
                                                    <th>User Name</th>
                                                    <td><?= $CO_NAME ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Contact Number</th>
                                                    <td><?= $CO_CONTACT ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td><?= $CO_EMAIL ?></td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Performance</h4>
                                <div class="row">

                                    <?php
                                    $sql = "SELECT * FROM  performance_video WHERE P_COMPETITOR_ID = $id LIMIT 3";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <div class="col-4">
                                            <iframe width="100%" height="200" src="<?= $row['P_VIDEO_EMBERED_LINK'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <p><?= $row['P_DESCRIPTION'] ?></p>
                                            <div class="static-rate fs-30 mt-3">
                                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a data-effect="effect-scale" data-toggle="modal" href="#modaldemo<?= $row['P_ID'] ?>"><i class="fa fa-comment text-primary" aria-hidden="true"></i></a>
                                                <!-- Modal effects -->
                                                <div class="modal" id="modaldemo<?= $row['P_ID'] ?>">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content modal-content-demo">
                                                            <div class="modal-header">
                                                                <h6 class="modal-title">Post a Comment</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="php/comment.php" method="POST">
                                                                    <input placeholder="Enter your name" type="hidden" name="ID" value="<?= $row['P_ID'] ?>">
                                                                    <input placeholder="Enter your name" type="hidden" name="CO_ID" value="<?= $CO_ID ?>">
                                                                    <div class="form-group">
                                                                        <input class="form-control" placeholder="Enter your name" type="text" name="Name">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input class="form-control" placeholder="Enter your contact number" type="text" name="Contact">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <textarea class="form-control" placeholder="Comment" name="Comment" rows="5"></textarea>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn ripple btn-primary" type="submit">POST</button></form>
                                                                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal effects-->


                                            </div>
                                            <hr>
                                            <?php
                                            $P_IDD = $row['P_ID'];
                                            $sql2 = "SELECT * FROM  reviews WHERE R_P_ID = $P_IDD LIMIT 5";
                                            $result2 = $conn->query($sql2);
                                            while ($row2 = $result2->fetch_assoc()) {
                                            ?>
                                                <h6><?= $row2['R_NAME'] ?></h6>
                                                <p style="font-size: 11px;"><?= $row2['R_COMMENT'] ?></p>
                                                <hr>
                                            <?php } ?>
                                        </div>



                                    <?php } ?>

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