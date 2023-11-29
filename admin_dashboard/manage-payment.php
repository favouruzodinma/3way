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
    <!-- end off-canvas-menu -->
    <div class="dashboard-content-wrap">
        <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
            <i class="la la-bars mr-1"></i> Dashboard Nav
        </div>
        <div class="container-fluid">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-5">
                <div class="media media-card align-items-center">

                </div><!-- end media -->
                <div class="file-upload-wrap file-upload-wrap-2 file--upload-wrap">
                    <input type="file" name="files[]" class="multi file-upload-input">
                    <span class="file-upload-text"><i class="la la-plus mr-2"></i>Add Account</span>
                </div><!-- file-upload-wrap -->
            </div><!-- end breadcrumb-content -->
            <div class="statement-table-item mb-4">
                <h3 class="fs-18 font-weight-semi-bold">Completed Withdrawals</h3>
                <div class="table-responsive pt-4">
                    <table class="table generic-table">
                        <thead>
                        <tr>
                            <th scope="col">Account Number</th>
                            <th scope="col">Account Name</th>
                            <th scope="col">Bank Nmae</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <ul class="generic-list-item">
                                    <li>2206112866</li>
                                </ul>
                            </th>
                            <td>
                                <ul class="generic-list-item">
                                    <li>United Bank of Africa</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>Favour Nzube Uzodinma</li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">
                                <ul class="generic-list-item">
                                    <li>2032909568</li>
                                </ul>
                            </th>
                            <td>
                                <ul class="generic-list-item">
                                    <li>Kuda Bank</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>Favour Nzube Uzodinma</li>
                                </ul>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div><!-- end statement-table-item -->
            <?php include('include/dashboard-footer.php') ?>
            <!-- end row -->
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
<script src="js/emojionearea.min.js"></script>
<script src="js/animated-skills.js"></script>
<script src="js/jquery.MultiFile.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/aduca-demo/aduca/dashboard-withdraw.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Oct 2021 14:36:14 GMT -->
</html>