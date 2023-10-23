<!DOCTYPE html>
<html lang="en">

<head>
<?php include("styles.php"); ?>

</head>

<body>

  <div id="app">
    <div class="main-wrapper main-wrapper-1">
    <?php
include('header.php')
     ?>
        <?php
include('aside.php')
     ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body">
          	<div class="row mt-sm-4 background-image-body">
          		<div class="col-md-12 col-lg-12 box-center">
          			<div class="row author-box">
          				<img alt="image" src="assets/img/users/user-6.png" class="rounded-circle author-box-picture box-center mt-4">
          			</div>
         			<div class="row author-box">
          				<div class="page-inner box-center align-center">
            				<h2><a href="#">Jessica Hill</a></h2>
            				<div class="page-description">
              					<h5>Web Developer</h5>
            				</div>
          				</div>
          			</div> 
          			<div class="row author-box mb-4">
	          			<div class="box-center align-center">
	                      <div class="mb-2 mt-3">
	                        <h6>Follow Hasan On</h6>
	                      </div>
	                      <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
	                        <i class="fab fa-facebook-f"></i>
	                      </a>
	                      <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
	                        <i class="fab fa-twitter"></i>
	                      </a>
	                      <a href="#" class="btn btn-social-icon mr-1 btn-github">
	                        <i class="fab fa-github"></i>
	                      </a>
	                      <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
	                        <i class="fab fa-instagram"></i>
	                      </a>
	                      <div class="w-100 d-sm-none"></div>
	                    </div>
          			</div>         			
          		</div>
          	</div>
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Personal Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="py-4">
                      <p class="clearfix">
                        <span class="float-left">
                          Birthday
                        </span>
                        <span class="float-right text-muted">
                          05-04-1992
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Birth Place
                        </span>
                        <span class="float-right text-muted">
                          Ahmedabad,Gujarat
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Lives In
                        </span>
                        <span class="float-right text-muted">
                          Ahmedabad
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Facebook
                        </span>
                        <span class="float-right text-muted">
                          <a href="#">Jessica Hill</a>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Twitter
                        </span>
                        <span class="float-right text-muted">
                          <a href="#">@jessica</a>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Website
                        </span>
                        <span class="float-right text-muted">
                        	<a href="#">www.Jessica.com</a>
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Skills</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Java</div>
                        </div>
                        <div class="media-progressbar p-t-5">
                          <div class="progress" data-height="15">
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" data-width="70%">70%</div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Web Design</div>
                        </div>
                        <div class="media-progressbar p-t-5">
                          <div class="progress" data-height="15">
                            <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" data-width="80%">80%</div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Photoshop</div>
                        </div>
                        <div class="media-progressbar p-t-5">
                          <div class="progress" data-height="15">
                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" data-width="48%">48%</div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Python</div>
                        </div>
                        <div class="media-progressbar p-t-5">
                          <div class="progress" data-height="15">
                            <div class="progress-bar bg-red progress-bar-striped progress-bar-animated" data-width="60%">60%</div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">laravel</div>
                        </div>
                        <div class="media-progressbar p-t-5">
                          <div class="progress" data-height="15">
                            <div class="progress-bar bg-blue progress-bar-striped progress-bar-animated" data-width="30%">30%</div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-pills mb-1" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                          aria-selected="true">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                          aria-selected="false">Edit Profile</a>
                      </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <div class="row">
                          <div class="col-md-3 col-6 b-r">
                            <strong>Full Name</strong>
                            <br>
                            <p class="text-muted">Jessica Hill</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Mobile</strong>
                            <br>
                            <p class="text-muted">(0123) 456 7890</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Email</strong>
                            <br>
                            <p class="text-muted">jessica@example.com</p>
                          </div>
                          <div class="col-md-3 col-6">
                            <strong>Location</strong>
                            <br>
                            <p class="text-muted">India</p>
                          </div>
                        </div>
                        <p class="m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting
                          industry. Lorem
                          Ipsum has been the industry's standard dummy text ever since the 1500s,
                          when
                          an unknown printer took a galley of type and scrambled it to make a
                          type
                          specimen book. It has survived not only five centuries, but also the
                          leap
                          into electronic typesetting, remaining essentially unchanged.</p>
                        <div class="section-title">Education</div>
                        <ul>
                          <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                          </li>
                          <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                          </li>
                          <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                          </li>
                        </ul>
                        <div class="section-title">Experience</div>
                        <ul>
                          <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                          </li>
                         <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                          </li>
                          <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                          </li>
                          <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                          </li>
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                        <form method="post" class="needs-validation">
                          <div class="card-header">
                            <h4>Edit Profile</h4>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <label>First Name</label>
                                <input type="text" class="form-control" value="Jessica">
                                <div class="invalid-feedback">
                                  Please fill in the first name
                                </div>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Last Name</label>
                                <input type="text" class="form-control" value="Hill">
                                <div class="invalid-feedback">
                                  Please fill in the last name
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-7 col-12">
                                <label>Email</label>
                                <input type="email" class="form-control" value="jessica@example.com">
                                <div class="invalid-feedback">
                                  Please fill in the email
                                </div>
                              </div>
                              <div class="form-group col-md-5 col-12">
                                <label>Phone</label>
                                <input type="tel" class="form-control" value="">
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-12">
                                <label>Bio</label>
                                <textarea
                                  class="form-control summernote-simple">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum alias molestias minus quod dignissimos.</textarea>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group mb-0 col-12">
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                                  <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                                  <div class="text-muted form-text">
                                    You will get new information about products, offers and promotions
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary">Save Changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
			<a href="javascript:void(0)" class="settingPanelToggle"> <i
				class="fa fa-spin fa-cog"></i>
			</a>
			<div class="settingSidebar-body ps-container ps-theme-default">
				<div class=" fade show active">
					<div class="setting-panel-header">Theme Customizer</div>
					<div class="p-15 border-bottom">
						<h6 class="font-medium m-b-10">Theme Layout</h6>
						<div class="selectgroup layout-color w-50">
							<label> <span class="control-label p-r-20">Light</span>
								<input type="radio" name="custom-switch-input" value="1"
								class="custom-switch-input" checked> <span
								class="custom-switch-indicator"></span>
							</label>
						</div>
						<div class="selectgroup layout-color  w-50">
							<label> <span class="control-label p-r-20">Dark&nbsp;</span>
								<input type="radio" name="custom-switch-input" value="2"
								class="custom-switch-input"> <span
								class="custom-switch-indicator"></span>
							</label>
						</div>
					</div>
				</div>
				<div class="p-15 border-bottom">
					<h6 class="font-medium m-b-10">Sidebar Colors</h6>
					<div class="sidebar-setting-options">
						<ul class="sidebar-color list-unstyled mb-0">
							<li title="white" class="active">
								<div class="white"></div>
							</li>
							<li title="blue">
								<div class="blue"></div>
							</li>
							<li title="coral">
								<div class="coral"></div>
							</li>
							<li title="purple">
								<div class="purple"></div>
							</li>
							<li title="allports">
								<div class="allports"></div>
							</li>
							<li title="barossa">
								<div class="barossa"></div>
							</li>
							<li title="fancy">
								<div class="fancy"></div>
							</li>
						</ul>
					</div>
		
				</div>
				<div class="p-15 border-bottom">
					<h6 class="font-medium m-b-10">Theme Colors</h6>
					<div class="theme-setting-options">
						<ul class="choose-theme list-unstyled mb-0">
							<li title="white" class="active">
								<div class="white"></div>
							</li>
							<li title="blue">
								<div class="blue"></div>
							</li>
							<li title="coral">
								<div class="coral"></div>
							</li>
							<li title="purple">
								<div class="purple"></div>
							</li>
							<li title="allports">
								<div class="allports"></div>
							</li>
							<li title="barossa">
								<div class="barossa"></div>
							</li>
							<li title="fancy">
								<div class="fancy"></div>
							</li>
							<li title="cyan">
								<div class="cyan"></div>
							</li>
							<li title="orange">
								<div class="orange"></div>
							</li>
							<li title="green">
								<div class="green"></div>
							</li>
							<li title="red">
								<div class="red"></div>
							</li>
						</ul>
					</div>
				</div>
				<div class="p-15 border-bottom">
					<h6 class="font-medium m-b-10">Layout Options</h6>
					<div class="theme-setting-options">
						<label> <span class="control-label p-r-20">Compact
								Sidebar Menu</span> <input type="checkbox"
							name="custom-switch-checkbox" class="custom-switch-input"
							id="mini_sidebar_setting"> <span
							class="custom-switch-indicator"></span>
						</label>
					</div>
				</div>
				<div class="mt-3 mb-3 align-center">
					<a href="#"
						class="btn btn-icon icon-left btn-outline-primary btn-restore-theme">
						<i class="fas fa-undo"></i> Restore Default
					</a>
				</div>
			</div>
		</div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Design By <a href="#">Snkthemes</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/summernote/summernote-bs4.min.js"></script>
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  
</body>


</html>