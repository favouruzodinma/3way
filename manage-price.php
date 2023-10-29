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
                    <span class="file-upload-text"><i class="la la-plus mr-2"></i>New Price</span>
                </div><!-- file-upload-wrap -->
            </div><!-- end breadcrumb-content -->
            <div class="statement-table-item mb-4">
                <h3 class="fs-18 font-weight-semi-bold">Manage Price</h3>
                <div class="table-responsive pt-4">
                    <table class="table generic-table">
                        <thead>
                        <tr>
                            <th scope="col">Amount</th>
                            <th scope="col">Withdraw Method</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Approved at</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <ul class="generic-list-item">
                                    <li>$79.00</li>
                                    <li>$55.00</li>
                                </ul>
                            </th>
                            <td>
                                <ul class="generic-list-item">
                                    <li>Bank Transfer</li>
                                    <li>Paypal</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>July 12, 2019 12:20pm</li>
                                    <li>July 6, 2019 11:20am</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>July 12, 2019 12:20pm</li>
                                    <li>July 6, 2019 11:20am</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <ul class="generic-list-item">
                                    <li>$79.00</li>
                                    <li>$55.00</li>
                                </ul>
                            </th>
                            <td>
                                <ul class="generic-list-item">
                                    <li>Bank Transfer</li>
                                    <li>Paypal</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>July 12, 2019 12:20pm</li>
                                    <li>July 6, 2019 11:20am</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>July 12, 2019 12:20pm</li>
                                    <li>July 6, 2019 11:20am</li>
                                </ul>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div><!-- end statement-table-item -->
            <div class="statement-table-item mb-4">
                <h3 class="fs-18 font-weight-semi-bold">Rejected Withdrawals</h3>
                <div class="table-responsive pt-4">
                    <table class="table generic-table">
                        <thead>
                        <tr>
                            <th scope="col">Amount</th>
                            <th scope="col">Withdraw Method</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Approved at</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <ul class="generic-list-item">
                                    <li>$79.00</li>
                                    <li>$55.00</li>
                                </ul>
                            </th>
                            <td>
                                <ul class="generic-list-item">
                                    <li>Bank Transfer</li>
                                    <li>Paypal</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>July 12, 2019 12:20pm</li>
                                    <li>July 6, 2019 11:20am</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>July 12, 2019 12:20pm</li>
                                    <li>July 6, 2019 11:20am</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <ul class="generic-list-item">
                                    <li>$79.00</li>
                                    <li>$55.00</li>
                                </ul>
                            </th>
                            <td>
                                <ul class="generic-list-item">
                                    <li>Bank Transfer</li>
                                    <li>Paypal</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>July 12, 2019 12:20pm</li>
                                    <li>July 6, 2019 11:20am</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>July 12, 2019 12:20pm</li>
                                    <li>July 6, 2019 11:20am</li>
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