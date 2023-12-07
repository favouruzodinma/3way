<?php
// print_r($_POST)

if(isset($_POST['creat_country'])){
	$country_code = $_POST["country_code"];

	$country_name =$_POST["country_name"];

	$errors = array();

	if(empty($country_name)){
		array_push($errors,"A country name must be inputed");
	}
	if(count($errors)>0){
		foreach($errors as $error){
			$error = "
				<div class='alert alert-danger d-flex justify-space-between'>
				<strong>$error</strong> 
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>";
			// echo "<div class='alert alert-danger'>$error</div>";
		}
	}else{
		require_once('../_db.php');
		$sql = "INSERT INTO  country (country_code ,country_name) VALUES (?,?   )";
		$stmt = mysqli_stmt_init($conn);
		$prepareStmt = mysqli_stmt_prepare($stmt,$sql);
		if($prepareStmt){
			mysqli_stmt_bind_param($stmt,"ss",$country_code,$country_name);
			mysqli_stmt_execute($stmt);
			$error = "
			<div class='alert alert-success d-flex justify-space-between'>
			<strong>Country Successfully Created...  </strong> 
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
			</button>
			</div>";
		}else{
			die("something went wrong");
		}
	}

}
?>
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
                <a href="javascript:void(0)" data-toggle="modal" data-target="#countryModal" class="btn btn-outline-dark"><i class="la la-plus-circle mr-2"></i>New Country</a>
                </div><!-- create modal -->
            </div><!-- end breadcrumb-content -->
            <div class="section-block mb-5"></div>
            <div class="dashboard-heading mb-5">
                <h3 class="fs-22 font-weight-semi-bold">Manage Country</h3>
                <?php if (isset($error)) : ?>
                    <div ><?php echo $error; ?></div>
                <?php endif; ?>
            </div>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="earning" role="tabpanel" aria-labelledby="earning-tab">
                    <div class="table-responsive mb-5">
                    <table class="table generic-table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Country</th>
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
                                    <div class="media-body">
                                        <h5 class="fs-15"><a href="#">Ghana</a></h5>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
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

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- Modal -->
<div class="modal fade modal-container" id="countryModal" tabindex="-1" role="dialog" aria-labelledby="CountryModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h4 class="modal-title fs-19 font-weight-semi-bold pt-2 pb-1" id="CountryModalTitle">Create New Country</h4>
                <form method="post" action="manage-country">
                    <div class="form-group">
                        <input class="form-control form--control pl-3" type="text" name="country_code" placeholder="Country Code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control form--control pl-3" type="text" name="country_name" placeholder="Country Name" required>
                    </div>
                    <div class="btn-box pt-4">
                        <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                        <button  type="submit" class="btn btn-primary" name="creat_country">create</button>
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

<!-- Mirrored from techydevs.com/demos/themes/html/aduca-demo/aduca/dashboard-enrolled-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Oct 2021 14:36:14 GMT -->
</html>