
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
                <a href="javascript:void(0)" data-toggle="modal" data-target="#stateModal" class="btn btn-outline-dark"><i class="la la-plus-circle mr-2"></i>New State</a>
                </div><!-- create modal -->
            </div><!-- end breadcrumb-content -->
            <div class="section-block mb-5"></div>
            <div class="dashboard-heading mb-5">
                <h3 class="fs-22 font-weight-semi-bold">Manage State</h3>
                <?php echo isset($_SESSION['success'])?$_SESSION['success']:""?>
            </div>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="earning" role="tabpanel" aria-labelledby="earning-tab">
                    <div class="table-responsive mb-5">
                    <?php 
                        $stmt = $conn->prepare("SELECT * FROM state");
                        $stmt->execute();
                        $result = $stmt->get_result();                        
                    
                        if ($result->num_rows > 0) {
                            // Output the retrieved d
					?>
                    <table class="table generic-table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">State</th>
                            <th scope="col">Country</th>
                        </tr>
                        </thead>
                        <?php 
                            $num = 1;
                            while ($row = $result->fetch_assoc()) {
                        ?>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <ul class="generic-list-item">
                                    <li><?php echo $num++ ?></li>
                                </ul>
                            </th>

                            <th scope="row">
                                <ul class="generic-list-item">
                                    <li><?php echo $row ['state_name'] ?></li>
                                </ul>
                            </th>
                            <td>
                                <div class="media media-card align-items-center">
                                    <div class="media-body">
                                        <h5 class="fs-15"><a href="#"><?php echo $row ['country'] ?></a></h5>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                    <?php } else { ?>
					<span class="text-danger">No state record.</span>
					<?php } ?>
                </div><!-- end row -->
            </div><!-- end tab-content -->
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
                <p class="fs-14 pt-2">Showing 1-3 of 16 results</p>
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
<?php
if(isset($_SESSION['success'])){
    unset($_SESSION['success']);
}
?>
<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- Modal -->
<div class="modal fade modal-container" id="stateModal" tabindex="-1" role="dialog" aria-labelledby="stateModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h4 class="modal-title fs-19 font-weight-semi-bold pt-2 pb-1" id="CountryModalTitle">Create New Country</h4>
                <form method="post" action="function">
                    <div class="form-group">
                        <input class="form-control form--control pl-3" type="text" name="state_name" placeholder="State Name" required>
                    </div>
                    <div class="form-group">
                        <select name="country" id="country" class="form-control form--control pl-3">
                            <?php
                            // Assuming you have a database connection named $conn

                            // Replace 'your_country_table' with your actual table name
                            $sql = "SELECT country_name FROM country";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['country_name'] . "'>" . $row['country_name'] . "</option>";
                                }
                            } else {
                                echo "<option value=''>No countries found</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="btn-box pt-4">
                        <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                        <button name="create_state" type="submit" class="btn btn-primary">create</button>
                    </div>
                </form>
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