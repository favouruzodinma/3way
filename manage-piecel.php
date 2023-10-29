<?php  include('include/dashboard-header.php') ?>
<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    <?php  include('include/dashboard-sidebar.php') ?>
    
    <div class="dashboard-content-wrap">
        <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
            <i class="la la-bars mr-1"></i> Dashboard Nav
        </div>
        <div class="container-fluid">
            <div class="dashboard-heading mb-5">
                <h3 class="fs-22 font-weight-semi-bold">Manage Piecel</h3>
            </div>
            <ul class="nav nav-tabs generic-tab pb-30px" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="earning-tab" data-toggle="tab" href="#earning" role="tab" aria-controls="earning" aria-selected="false">
                        Total earning
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="report-tab" data-toggle="tab" href="#report" role="tab" aria-controls="report" aria-selected="true">
                        Report
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="statements-tab" data-toggle="tab" href="#statements" role="tab" aria-controls="statements" aria-selected="false">
                        Statements
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="earning" role="tabpanel" aria-labelledby="earning-tab">
                    <div class="dashboard-heading mb-5">
                        <h3 class="fs-22 font-weight-semi-bold">Purchase History</h3>
                    </div>
                    <div class="table-responsive mb-5">
                    <table class="table generic-table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Item</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <ul class="generic-list-item">
                                    <li>#090909</li>
                                </ul>
                            </th>
                            <td>
                                <div class="media media-card align-items-center">
                                    <a href="course-details.html" class="media-img">
                                        <img class="mr-3" src="images/small-img.jpg" alt="Cart image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="fs-15"><a href="course-details.html">MERN Stack Master Course - Building your own Instagram</a></h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>$79.00</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>July 12, 2019</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li><span class="badge bg-success text-white p-1">Completed</span></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <ul class="generic-list-item">
                                    <li>#090909</li>
                                </ul>
                            </th>
                            <td>
                                <div class="media media-card align-items-center">
                                    <a href="course-details.html" class="media-img">
                                        <img class="mr-3" src="images/small-img.jpg" alt="Cart image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="fs-15"><a href="course-details.html">The Ultimate Text-To-Video Creation Course</a></h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>$79.00</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>July 12, 2019</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li><span class="badge bg-info text-white p-1">On Hold</span></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <ul class="generic-list-item">
                                    <li>#090909</li>
                                </ul>
                            </th>
                            <td>
                                <div class="media media-card align-items-center">
                                    <a href="course-details.html" class="media-img">
                                        <img class="mr-3" src="images/small-img.jpg" alt="Cart image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="fs-15"><a href="course-details.html">Ultimate Guide for the Next Generation of Affiliates</a></h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>$79.00</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>July 12, 2019</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li><span class="badge bg-danger text-white p-1">Cancelled</span></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <ul class="generic-list-item">
                                    <li>#090909</li>
                                </ul>
                            </th>
                            <td>
                                <div class="media media-card align-items-center">
                                    <a href="course-details.html" class="media-img">
                                        <img class="mr-3" src="images/small-img.jpg" alt="Cart image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="fs-15"><a href="course-details.html">Complete Ethical Hacking Course: Zero to Hero</a></h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>$79.00</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>July 12, 2019</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li><span class="badge bg-danger text-white p-1">Cancelled</span></li>
                                </ul>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- end row -->
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="report" role="tabpanel" aria-labelledby="report-tab">
                    <div class="dashboard-heading mb-5">
                        <h3 class="fs-22 font-weight-semi-bold">Purchase History</h3>
                    </div>
                    <div class="table-responsive mb-5">
                    <table class="table generic-table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Item</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <ul class="generic-list-item">
                                    <li>#090909</li>
                                </ul>
                            </th>
                            <td>
                                <div class="media media-card align-items-center">
                                    <a href="#" class="media-img">
                                        <img class="mr-3" src="images/small-img.jpg" alt="Cart image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="fs-15"><a href="#">MERN Stack Master Course - Building your own Instagram</a></h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>$79.00</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>July 12, 2019</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li><span class="badge bg-success text-white p-1">Completed</span></li>
                                </ul>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- end row -->
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="statements" role="tabpanel" aria-labelledby="statements-tab">
                     <div class="dashboard-heading mb-5">
                        <h3 class="fs-22 font-weight-semi-bold">Purchase History</h3>
                    </div>
                    <div class="table-responsive mb-5">
                    <table class="table generic-table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Item</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <ul class="generic-list-item">
                                    <li>#090909</li>
                                </ul>
                            </th>
                            <td>
                                <div class="media media-card align-items-center">
                                    <a href="#" class="media-img">
                                        <img class="mr-3" src="images/small-img.jpg" alt="Cart image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="fs-15"><a href="#">MERN Stack Master Course - Building your own Instagram</a></h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>$79.00</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li>July 12, 2019</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="generic-list-item">
                                    <li><span class="badge bg-info text-white p-1">On Hold</span></li>
                                </ul>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center py-3">
                                <nav aria-label="Page navigation example" class="pagination-box">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <p class="fs-14 pt-2">Showing 1-4 of 16 results</p>
                            </div>
                        </div><!-- end col-lg-12 -->
                    </div><!-- end row -->
                </div><!-- end tab-pane -->
            </div><!-- end tab-content -->
            
            <?php  include("include/dashboard-footer.php")?>
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

<!-- Modal -->
<div class="modal fade modal-container" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="la la-exclamation-circle fs-60 text-warning"></span>
                <h4 class="modal-title fs-19 font-weight-semi-bold pt-2 pb-1" id="logoutModalTitle">Are You Ready To Logout!</h4>
                <!-- <p>Are you sure you want to delete your account?</p> -->
                <div class="btn-box pt-4">
                    <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Logout</button>
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
<script src="js/chart.js"></script>
<script src="js/bar-chart.js"></script>
<script src="js/line-chart-2.js"></script>
<script src="js/jquery.MultiFile.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/aduca-demo/aduca/dashboard-earnings.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Oct 2021 14:36:14 GMT -->
</html>