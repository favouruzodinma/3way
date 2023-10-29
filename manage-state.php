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
                    <span class="file-upload-text"><i class="la la-plus mr-2"></i>New State</span>
                </div><!-- file-upload-wrap -->
            </div><!-- end breadcrumb-content -->
            <div class="dashboard-heading mb-5">
                <h3 class="fs-22 font-weight-semi-bold">Manage State</h3>
            </div>
            <div class="table-responsive pb-4">
                <table class="table generic-table">
                    <thead>
                    <tr>
                        <th scope="col">Course Title</th>
                        <th scope="col">Questions</th>
                        <th scope="col">Total Marks</th>
                        <th scope="col">Earned Marks</th>
                        <th scope="col">Pass Marks</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <ul class="generic-list-item">
                                <li>
                                    <span class="badge bg-success text-white p-1">Passed</span>
                                    <span>January 22, 2019 10:50am</span>
                                </li>
                                <li>
                                    <a href="course-details.html" class="text-black">Adobe After Effects CC: The Complete Motion Graphics Course</a>
                                </li>
                            </ul>
                        </th>
                        <td>
                            <ul class="generic-list-item">
                                <li>12</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="generic-list-item">
                                <li>22.00</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="generic-list-item">
                                <li>5.00(60%)</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="generic-list-item">
                                <li>20.25(75%)</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <ul class="generic-list-item">
                                <li>
                                    <span class="badge bg-danger text-white p-1">Failed</span>
                                    <span>January 22, 2019 10:50am</span>
                                </li>
                                <li>
                                    <a href="course-details.html" class="text-black">The Ultimate Text-To-Video Creation Course</a>
                                </li>
                            </ul>
                        </th>
                        <td>
                            <ul class="generic-list-item">
                                <li>12</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="generic-list-item">
                                <li>22.00</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="generic-list-item">
                                <li>2.00(7%)</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="generic-list-item">
                                <li>20.25(75%)</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <ul class="generic-list-item">
                                <li>
                                    <span class="badge bg-success text-white p-1">Passed</span>
                                    <span>January 22, 2019 10:50am</span>
                                </li>
                                <li>
                                    <a href="course-details.html" class="text-black">Complete Ethical Hacking Course: Zero to Hero</a>
                                </li>
                            </ul>
                        </th>
                        <td>
                            <ul class="generic-list-item">
                                <li>12</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="generic-list-item">
                                <li>22.00</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="generic-list-item">
                                <li>5.00(60%)</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="generic-list-item">
                                <li>20.25(75%)</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <ul class="generic-list-item">
                                <li>
                                    <span class="badge bg-danger text-white p-1">Failed</span>
                                    <span>January 22, 2019 10:50am</span>
                                </li>
                                <li>
                                    <a href="course-details.html" class="text-black">Javascript - From Beginner to Pro-Build real world JS apps</a>
                                </li>
                            </ul>
                        </th>
                        <td>
                            <ul class="generic-list-item">
                                <li>12</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="generic-list-item">
                                <li>22.00</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="generic-list-item">
                                <li>2.00(7%)</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="generic-list-item">
                                <li>20.25(75%)</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <ul class="generic-list-item">
                                <li>
                                    <span class="badge bg-success text-white p-1">Passed</span>
                                    <span>January 22, 2019 10:50am</span>
                                </li>
                                <li>
                                    <a href="course-details.html" class="text-black">iOS 12 & Swift: The Complete Developer Course (Project base)</a>
                                </li>
                            </ul>
                        </th>
                        <td>
                            <ul class="generic-list-item">
                                <li>12</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="generic-list-item">
                                <li>22.00</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="generic-list-item">
                                <li>7.00(60%)</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="generic-list-item">
                                <li>20.25(75%)</li>
                            </ul>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
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
                <p class="fs-14 pt-2">Showing 1-5 of 16 results</p>
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

<!-- Mirrored from techydevs.com/demos/themes/html/aduca-demo/aduca/dashboard-quiz.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Oct 2021 14:36:13 GMT -->
</html>