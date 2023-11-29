<?php include('include/dashboard-header.php') ?>

<!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    <?php include('include/dashboard-sidebar.php') ?>
    <div class="dashboard-content-wrap">
        <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
            <i class="la la-bars mr-1"></i> Dashboard Nav
        </div>
        <div class="container-fluid">
            <div class="dashboard-heading mb-5">
                <h3 class="fs-22 font-weight-semi-bold">Track Piecel</h3>
            </div>
            <div class="review-wrap">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="sidebar">
                            <div class="card card-item">
                                <div class="card-body">
                                    <h3 class="card-title fs-18 pb-2">Search With Piecel ID</h3>
                                    <div class="divider"><span></span></div>
                                    <form method="post">
                                        <div class="form-group">
                                            <input class="form-control form--control pl-3" type="text" name="search" placeholder="Enter Tracking number Eg:(AWB-100000001)" required>
                                        </div>
                                        <button type="submit" class="btn theme-btn w-100">
                                            <i class="la la-search mr-2"></i>Search Now
                                        </button>
                                    </form>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end sidebar -->
                    </div><!-- end col-lg-4 -->
                </div><!-- end row -->
            </div>

            </div><!-- end review-wrap -->
            <br>
            <br>
            <br>
            <br>
            <br>

            <?php include('include/dashboard-footer.php') ?><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->



<!-- template js files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/fancybox.js"></script>
<script src="js/datedropper.min.js"></script>
<script src="js/emojionearea.min.js"></script>
<script src="js/animated-skills.js"></script>
<script src="js/jquery.MultiFile.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/aduca-demo/aduca/dashboard-reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Oct 2021 14:36:14 GMT -->
</html>