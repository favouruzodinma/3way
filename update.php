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
            <a href="index.html" class="logo"><img src="images/dash-logo.png" alt="logo"></a>
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
            <div class="dashboard-heading mb-5">
                <h3 class="fs-22 font-weight-semi-bold">Edit Profile Information</h3>
            </div>
            <ul class="nav nav-tabs generic-tab pb-30px" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="edit-profile-tab" data-toggle="tab" href="#edit-profile" role="tab" aria-controls="edit-profile" aria-selected="false">
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="true">
                      Change Password
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" id="change-email-tab" data-toggle="tab" href="#change-email" role="tab" aria-controls="change-email" aria-selected="false">
                        Change Email
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" id="withdraw-tab" data-toggle="tab" href="#withdraw" role="tab" aria-controls="withdraw" aria-selected="false">
                        Withdraw
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false">
                        Account
                    </a>
                </li> -->
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
                    <div class="setting-body">
                        <h3 class="fs-17 font-weight-semi-bold pb-4">Edit Profile</h3>
                        <div class="media media-card align-items-center">
                            <div class="media-img media-img-lg mr-4 bg-gray">
                                <img class="mr-3" src="images/avatar.png" alt="avatar image">
                            </div>
                            <div class="media-body">
                                <div class="file-upload-wrap file-upload-wrap-2">
                                    <input type="file" name="files[]" class="multi file-upload-input with-preview" multiple>
                                    <span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload a Photo</span>
                                </div><!-- file-upload-wrap -->
                                <p class="fs-14">Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p>
                            </div>
                        </div><!-- end media -->
                        <form method="post" class="row pt-40px">
                            <div class="input-box col-lg-6">
                                <label class="label-text">First Name</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" value="Alex">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">Last Name</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" value="Smith">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="email" name="email" value="alexsmith@gmail.com">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">Phone Number</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" value="(91) 7547 622250">
                                    <span class="la la-phone input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                           
                            <div class="input-box col-lg-12 py-2">
                                <button class="btn theme-btn">Save Changes</button>
                            </div><!-- end input-box -->
                        </form>
                    </div><!-- end setting-body -->
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                    <div class="setting-body">
                        <h3 class="fs-17 font-weight-semi-bold pb-4">Change Password</h3>
                        <form method="post" class="row">
                            <div class="input-box col-lg-4">
                                <label class="label-text">Old Password</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" placeholder="Old Password">
                                    <span class="la la-lock input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">New Password</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" placeholder="New Password">
                                    <span class="la la-lock input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">Confirm New Password</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" placeholder="Confirm New Password">
                                    <span class="la la-lock input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-12 py-2">
                                <button class="btn theme-btn">Change Password</button>
                            </div><!-- end input-box -->
                        </form>
               
                    </div><!-- end setting-body -->
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="change-email" role="tabpanel" aria-labelledby="change-email-tab">
                    <div class="setting-body">
                        <h3 class="fs-17 font-weight-semi-bold pb-4">Change Email</h3>
                        <form method="post" class="row">
                            <div class="input-box col-lg-4">
                                <label class="label-text">Old Email</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" placeholder="Old Email">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">New Email</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" placeholder="New Email">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">Confirm New Email</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" placeholder="Confirm New Email">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-12 py-2">
                                <button class="btn theme-btn">Change Email</button>
                            </div><!-- end input-box -->
                        </form>
                    </div><!-- end setting-body -->
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="withdraw" role="tabpanel" aria-labelledby="withdraw-tab">
                    <div class="setting-body">
                        <h3 class="fs-17 font-weight-semi-bold pb-4">Select a Withdraw Method</h3>
                        <form method="post" class="row mb-40px">
                            <div class="col-lg-2 responsive-column-half">
                                <div class="custom-control custom-radio mb-3 pl-0">
                                    <input type="radio" class="custom-control-input" id="bankTransfer" name="radio-stacked" required>
                                    <label class="custom-control-label custom--control-label custom--control-label-boxed" for="bankTransfer">
                                        <span class="font-weight-semi-bold text-black d-block">Bank Transfer</span>
                                        <span class="d-block fs-14 lh-18">Min withdraw $50.00</span>
                                    </label>
                                </div>
                            </div><!-- end col-lg-2 -->
                            <div class="col-lg-2 responsive-column-half">
                                <div class="custom-control custom-radio mb-3 pl-0">
                                    <input type="radio" class="custom-control-input" id="eCheck" name="radio-stacked" required>
                                    <label class="custom-control-label custom--control-label custom--control-label-boxed" for="eCheck">
                                        <span class="font-weight-semi-bold text-black d-block">E-Check</span>
                                        <span class="d-block fs-14 lh-18">Min withdraw $50.00</span>
                                    </label>
                                </div>
                            </div><!-- end col-lg-2 -->
                            <div class="col-lg-2 responsive-column-half">
                                <div class="custom-control custom-radio mb-3 pl-0">
                                    <input type="radio" class="custom-control-input" id="payoneer" name="radio-stacked" required>
                                    <label class="custom-control-label custom--control-label custom--control-label-boxed" for="payoneer">
                                        <span class="font-weight-semi-bold text-black d-block">Payoneer</span>
                                        <span class="d-block fs-14 lh-18">Min withdraw $50.00</span>
                                    </label>
                                </div>
                            </div><!-- end col-lg-2 -->
                            <div class="col-lg-2 responsive-column-half">
                                <div class="custom-control custom-radio mb-3 pl-0">
                                    <input type="radio" class="custom-control-input" id="PayPal" name="radio-stacked" required>
                                    <label class="custom-control-label custom--control-label custom--control-label-boxed" for="PayPal">
                                        <span class="font-weight-semi-bold text-black d-block">PayPal</span>
                                        <span class="d-block fs-14 lh-18">Min withdraw $50.00</span>
                                    </label>
                                </div>
                            </div><!-- end col-lg-2 -->
                            <div class="col-lg-2 responsive-column-half">
                                <div class="custom-control custom-radio mb-3 pl-0">
                                    <input type="radio" class="custom-control-input" id="skrill" name="radio-stacked" required>
                                    <label class="custom-control-label custom--control-label custom--control-label-boxed" for="skrill">
                                        <span class="font-weight-semi-bold text-black d-block">Skrill</span>
                                        <span class="d-block fs-14 lh-18">Min withdraw $50.00</span>
                                    </label>
                                </div>
                            </div><!-- end col-lg-2 -->
                            <div class="col-lg-2 responsive-column-half">
                                <div class="custom-control custom-radio mb-3 pl-0">
                                    <input type="radio" class="custom-control-input" id="stripe" name="radio-stacked" required>
                                    <label class="custom-control-label custom--control-label custom--control-label-boxed" for="stripe">
                                        <span class="font-weight-semi-bold text-black d-block">Stripe</span>
                                        <span class="d-block fs-14 lh-18">Min withdraw $50.00</span>
                                    </label>
                                </div>
                            </div><!-- end col-lg-2 -->
                        </form>
                        <form method="post" class="row">
                            <h3 class="fs-17 font-weight-semi-bold pb-4 col-lg-12">Account info</h3>
                            <div class="input-box col-lg-4">
                                <label class="label-text">Account Name</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" value="Alex Smith">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">Account Number</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" value="3275476222500">
                                    <span class="la la-pencil input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">Bank Name</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" value="South State Bank">
                                    <span class="la la-bank input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">IBAN</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" value="3030">
                                    <span class="la la-pencil input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">BIC/SWIFT</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="text" value="CDDHDBBL">
                                    <span class="la la-pencil input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-12 py-2">
                                <button class="btn theme-btn">Save withdraw account</button>
                            </div><!-- end input-box -->
                        </form>
                    </div><!-- end setting-body -->
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                    <div class="setting-body">
                        <h3 class="fs-17 font-weight-semi-bold pb-4">My Account</h3>
                        <form method="post" class="mb-40px">
                            <div class="custom-control-wrap d-flex flex-wrap align-items-center">
                                <div class="custom-control custom-radio pl-0 flex-shrink-0 mr-3 mb-2">
                                    <input type="radio" class="custom-control-input" id="deactivateAccount" name="radio-stacked" required>
                                    <label class="custom-control-label custom--control-label custom--control-label-boxed" for="deactivateAccount">
                                        <span class="font-weight-semi-bold text-black">Deactivate Account</span>
                                    </label>
                                </div>
                                <button class="btn theme-btn mb-2">Deactivate</button>
                            </div><!-- end custom-control-wrap -->
                        </form>
                        <div class="section-block"></div>
                        <div class="danger-zone pt-40px">
                            <h4 class="fs-17 font-weight-semi-bold text-danger">Delete Account Permanently</h4>
                            <p class="pt-1 pb-4"><span class="text-warning">Warning: </span>Once you delete your account, there is no going back. Please be certain.</p>
                            <button class="btn theme-btn" data-toggle="modal" data-target="#deleteModal">Delete my account</button>
                        </div>
                    </div><!-- end setting-body -->
                </div><!-- end tab-pane -->
            </div><!-- end tab-content -->
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
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
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
<script src="js/emojionearea.min.js"></script>
<script src="js/animated-skills.js"></script>
<script src="js/jquery.MultiFile.min.js"></script>
<script src="js/jquery-te-1.4.0.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>