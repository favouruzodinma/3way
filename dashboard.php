<!DOCTYPE html>
<html lang="en">

<?php
include('dash-head.php');
?>
<body>


<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<?php 
include('dash-header.php');
?>
<!--======================================
        END HEADER AREA
======================================-->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    <div class="off-canvas-menu dashboard-off-canvas-menu off--canvas-menu custom-scrollbar-styled pt-20px">
        <div class="off-canvas-menu-close dashboard-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <div class="logo-box px-4">
            <a href="dashboard" class="logo"><img src="images/dash-logo.png" alt="logo"></a>
        </div>
      
        <?php
include('sidebar.php');
?>

    </div><!-- end off-canvas-menu -->
    <div class="dashboard-content-wrap">
        <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
            <i class="la la-bars mr-1"></i> Dashboard Nav
        </div>
        <div class="container-fluid">
           
        <?php
include('breadcrumb.php');
?>


            <div class="section-block mb-5"></div>
           
            <div class="profile-detail mb-5">
                <ul class="generic-list-item generic-list-item-flash">
                    <li><span class="profile-name">Registration Date:</span><span class="profile-desc">Sat 20 Apr 2019, 03:50:30 AM</span></li>
                    <li><span class="profile-name">First Name:</span><span class="profile-desc"><?php echo $fn;  ?></span></li>
                    <li><span class="profile-name">Middle Name:</span><span class="profile-desc"><?php echo $mn;  ?></span></li>
                    <li><span class="profile-name">Surname:</span><span class="profile-desc"><?php echo $ln;  ?></span></li>
                    <li><span class="profile-name">Email:</span><span class="profile-desc"><?php echo $email;  ?></span></li>
                    <li><span class="profile-name">Phone Number:</span><span class="profile-desc"><?php echo $phone;  ?></span></li>
                    <li><span class="profile-name">Faculty:</span><span class="profile-desc"><?php echo $fal;  ?></span></li>
                    <li><span class="profile-name">Department:</span><span class="profile-desc"><?php echo $dpt;  ?></span></li>
                    <li><span class="profile-name">Payment Status:</span>
                    <?php
            if($fee== 'not paid'){
                    ?>
                    <span class="profile-desc" style="color:red;"><?php echo $fee;  ?></span>
                    <?php
            }else{
                    ?>
                    <span class="profile-desc" style="color:green;"><?php echo $fee;  ?></span>
                    <?php
            }
                    ?>
                </li>

                
                </ul>
            </div>
            <div class="row align-items-center dashboard-copyright-content pb-4">
                <div class="col-lg-6">
                    <p class="copy-desc">&copy; 2021 Aduca. All Rights Reserved. by <a href="https://techydevs.com/">TechyDevs</a></p>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 justify-content-end">
                        <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    </ul>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
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

<!-- Modal -->
<div class="modal fade modal-container" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="la la-exclamation-circle fs-60 text-warning"></span>
                <h4 class="modal-title fs-19 font-weight-semi-bold pt-2 pb-1" id="deleteModalTitle">Your account will be deleted permanently!</h4>
                <p>Are you sure you want to delete your account?</p>
                <div class="btn-box pt-4">
                    <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Ok, Delete</button>
                </div>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

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

<!-- Mirrored from techydevs.com/demos/themes/html/aduca-demo/aduca/dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Oct 2021 14:36:13 GMT -->
</html>