<?php include('include/dashboard-header.php')?>
<!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    <?php include('include/dashboard-sidebar.php') ?><!-- end off-canvas-menu -->
    <div class="dashboard-content-wrap">
        <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
            <i class="la la-bars mr-1"></i> Dashboard Nav
        </div>
        <div class="container-fluid">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-5">
                <div class="media media-card align-items-center">
                    <div class="media-img media--img media-img-md rounded-full">
                        <img class="rounded-full" src="images/small-avatar-1.jpg" alt="Student thumbnail image">
                    </div>
                    <div class="media-body">
                        <h2 class="section__title fs-30">Howdy, Tim Buchalka</h2>
                        <div class="rating-wrap d-flex align-items-center pt-2">
                            <div class="review-stars">
                                <span class="rating-number">5.5</span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                            </div>
                            <span class="rating-total pl-1">(20,230)</span>
                        </div><!-- end rating-wrap -->
                    </div><!-- end media-body -->
                </div><!-- end media -->
                <div class="file-upload-wrap file-upload-wrap-2 file--upload-wrap">
                    <input type="file" name="files[]" class="multi file-upload-input">
                    <span class="file-upload-text"><i class="la la-upload mr-2"></i>Upload a course</span>
                </div><!-- file-upload-wrap -->
            </div><!-- end breadcrumb-content -->
            <div class="section-block mb-5"></div>
            <div class="dashboard-heading mb-5">
                <h3 class="fs-22 font-weight-semi-bold">My Profile</h3>
            </div>
            <div class="profile-detail mb-5">
                <ul class="generic-list-item generic-list-item-flash">
                    <li><span class="profile-name">Registration Date:</span><span class="profile-desc">Sat 20 Apr 2019, 03:50:30 AM</span></li>
                    <li><span class="profile-name">First Name:</span><span class="profile-desc">Alex</span></li>
                    <li><span class="profile-name">Last Name:</span><span class="profile-desc">Smith</span></li>
                    <li><span class="profile-name">User Name:</span><span class="profile-desc">alex-admin</span></li>
                    <li><span class="profile-name">Email:</span><span class="profile-desc">alexsmith@gmail.com</span></li>
                    <li><span class="profile-name">Phone Number:</span><span class="profile-desc">(91) 7547 622250</span></li>
                    <li>
                        <span class="profile-name">Bio:</span>
                        <span class="profile-desc">Hello! I am a Alex Smith, Washington area graphic designer with over 6 years of graphic design experience. I specialize in designing infographics, icons, brochures, and flyers.</span>
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