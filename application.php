<!DOCTYPE html>
<html lang="en">

<?php 
include('head.php');
?>
<body>

<!-- start cssload-loader -->

<!-- end cssload-loader -->
<?php 
include('header.php');
    ?>
<!--======================================
        START HEADER AREA
    ======================================-->
<!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                    <div class="section-heading">
                        <h2 class="section__title text-white">Apply Now</h2>
                    </div>
                    <ul class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                        <li><a href="index">Home</a></li>
                        <!-- <li>Pages</li> -->
                        <li>Apply Now</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START REGISTER AREA
======================================-->
<section class="register-area section--padding dot-bg overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="register-heading-content-wrap text-center">
                    <div class="section-heading">
                        <h2 class="section__title">Fill Up this Form to Join Us</h2>
                    </div><!-- end section-heading -->
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row pt-50px">
            <div class="col-lg-10 mx-auto">
                <div class="card card-item">
                    <div class="card-body">
                    <?php
						 $prand=rand(10000000000, 99999999999);
						
						//  $prands=date('dhy');
							 ?>
                            <h5 style="color:green;">
          <?php echo $_SESSION['msg']; ?>
                            </h5>
                        <form method="post" class="row" action="reg.php">
          <input type="hidden" name="user_id" value="<?php echo $prand; ?>" required>

                            <div class="input-box col-lg-4">
                                <label class="label-text">First Name</label>
                                <div class="form-group">
                    <input class="form-control form--control" type="text" name="fn" placeholder="e.g. Alex">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">Middle Name</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="middle" placeholder="e.g. Smith">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">Surname</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="surname" placeholder="e.g. Smith">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">Phone Number</label>
                                <div class="form-group">
                                    <input  class="form-control form--control" type="text" name="phone" placeholder="e.g. 0908763323">
                                    <span class="la la-phone input-icon"></span>

                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="email" name="email" placeholder="e.g. alexsmith@gmail.com">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">Select Gender</label>
                                <div class="form-group d-flex align-items-center">
                                    <div class="custom-control custom-radio fs-15 mr-3">
            <input type="radio" class="custom-control-input" id="maleRadioCheck" name="gender" value="male" required>
                                        <label class="custom-control-label custom--control-label" for="maleRadioCheck">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio fs-15">
                <input type="radio" class="custom-control-input" id="femaleRadioCheck" value="female" name="gender" required>
                                        <label class="custom-control-label custom--control-label" for="femaleRadioCheck">Female</label>
                                    </div>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">Birthday</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="date" name="birthday" placeholder="e.g. Smith">
                                    <span class="la la-address-card input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-12">
                                <label class="label-text">Address</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="address" placeholder="e.g. 5 Airport Road, Warri">
                                    <span class="la la-map-marker input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">City</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="city" placeholder="City">
                                    <span class="la la-map input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">State</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="state" placeholder="State">
                                    <span class="la la-passport input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-4">
                                <label class="label-text">Country</label>
                                <div class="form-group">
                                <input class="form-control form--control" type="text" name="country" placeholder="Country">
                                <span class="la la-globe input-icon"></span>

                                </div>
                            </div><!-- end input-box -->
                           
                             <div class="input-box col-lg-6">
                                <label class="label-text">Faculty</label>
                                <div class="form-group">
                                    <div class="select-container w-auto">
                                        <select class="select-container-select" name="faculty"  id="faculty">
                                            <option value="select-a-category" selected="">Select a category</option>
                                            <?php
                  $dpt=$conn->query("select * from faculty ");
                  if($dpt->num_rows>=1){
            while($rows = $dpt->fetch_assoc()){ ?>
							?>
	                        <option value="<?php echo $rows['faculty_id']; ?>"><?php echo $rows['dname']; ?></option>
	                       <?php
							}}
						   ?>
                                           
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box col-lg-6">
                                <label class="label-text">Department</label>
                                <div class="form-group">
                                    <div class="select-container w-auto" >
                                        <select class="form-control  form--control" name="department" id="sub">
                                            <option value="" selected="">Select a department</option> 
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end input-box -->
                           
                            
                            
                        
                            <div class="input-box col-lg-6">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                     <input class="form-control form--control" id="pass" type="password" name="pass" placeholder="Password" required>
                     <span id="errorxx"></span>
                     <span class="la la-lock input-icon"></span>

                                </div>
                            </div><!-- end input-box -->
                            <!-- <div class="col-md-12 col-sm-12 col-xs-12"> -->
                             <!-- </div> -->

                            <div class="input-box col-lg-6">
                                <label class="label-text">Confirm Password</label>
                                <div class="form-group">
                     <input class="form-control form--control"  id="conpass" type="password" name="text" placeholder="Confirm Password" required>
                     <span id="error" style="color:red;"></span>
                     <span class="la la-lock input-icon"></span>

                                </div>
                            </div><!-- end input-box -->

                            <?php
$query_f=$conn->query("select * from site where id=1");
$query_f->num_rows>0;
$row=$query_f->fetch_assoc(); 
$sess=$row['aca_session'];
?>
                            <div class="input-box col-lg-6">
                                <label class="label-text">Academic Session</label>
                                <div class="form-group">
            <input class="form-control form--control"  type="text"  value="<?php echo $sess; ?>"  disabled>
            <input class="form-control form--control"  type="hidden" name="academic" value="<?php echo $sess; ?>" >

                     <span id="error" style="color:red;"></span>
                     <span class="la la-book input-icon"></span>

                                </div>
                            </div><!-- end input-box -->
                           
                            <div class="btn-box col-lg-12">
                               <!-- end custom-control -->
                                <button  id="btnreg"class="btn theme-btn" type="submit">Apply <i class="la la-arrow-right icon ml-1"></i></button>
                            </div><!-- end btn-box -->
                        </form>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-10 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end register-area -->
<!--======================================
        END REGISTER AREA
======================================-->

<div class="section-block"></div>

<!-- ================================
       START FUNFACT AREA
================================= -->

<!-- ================================
       START FUNFACT AREA
================================= -->

<!-- ================================
         END FOOTER AREA
================================= -->
<section class="footer-area pt-100px bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold pb-2">Company</h3>
                    <div class="divider border-bottom-0"><span></span></div>
                    <ul class="generic-list-item">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Become a Teacher</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold pb-2">Courses</h3>
                    <div class="divider border-bottom-0"><span></span></div>
                    <ul class="generic-list-item">
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Hacking</a></li>
                        <li><a href="#">PHP Learning</a></li>
                        <li><a href="#">Spoken English</a></li>
                        <li><a href="#">Self-Driving Car</a></li>
                        <li><a href="#">Garbage Collectors</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold pb-2">Download App</h3>
                    <div class="divider border-bottom-0"><span></span></div>
                    <div class="mobile-app">
                        <p class="pb-3 lh-24">Download our mobile app and learn on the go.</p>
                        <a href="#" class="d-block mb-2 hover-s"><img src="images/appstore.png" alt="App store" class="img-fluid"></a>
                        <a href="#" class="d-block hover-s"><img src="images/googleplay.png" alt="Google play store" class="img-fluid"></a>
                    </div>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold pb-2">Newsletter</h3>
                    <div class="divider border-bottom-0"><span></span></div>
                    <form method="post" class="subscriber-form">
                        <p class="pb-3 lh-24">Want us to email you about special offers & updates?</p>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control form--control pl-3" placeholder="Enter email address">
                            <button class="btn theme-btn w-100 mt-3" type="button">Subscribe <i class="la la-arrow-right icon ml-1"></i></button>
                        </div>
                    </form>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="section-block"></div>
    <div class="copyright-content py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex flex-wrap align-items-center">
                        <a href="index.html" class="pr-4">
                            <img src="images/logo.png" alt="footer logo" class="footer__logo">
                        </a>
                        <p class="copy-desc">Copyright &copy; 2021 <a href="https://techydevs.com/">TechyDevs</a> Inc.</p>
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end">
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                            <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                            <li class="mr-3"><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                        <div class="select-container select-container-sm">
                            <select class="select-container-select">
                                <option value="1">English</option>
                                <option value="2">Deutsch</option>
                                <option value="3">Español</option>
                                <option value="4">Français</option>
                                <option value="5">Bahasa Indonesia</option>
                                <option value="6">Bangla</option>
                                <option value="7">日本語</option>
                                <option value="8">한국어</option>
                                <option value="9">Nederlands</option>
                                <option value="10">Polski</option>
                                <option value="11">Português</option>
                                <option value="12">Română</option>
                                <option value="13">Русский</option>
                                <option value="14">ภาษาไทย</option>
                                <option value="15">Türkçe</option>
                                <option value="16">中文(简体)</option>
                                <option value="17">中文(繁體)</option>
                                <option value="17">Hindi</option>
                            </select>
                        </div>
                    </div>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end copyright-content -->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
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
<script src="js/waypoint.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/fancybox.js"></script>
<script src="js/datedropper.min.js"></script>
<script src="js/emojionearea.min.js"></script>
<script src="js/intlTelInput-jquery.min.js"></script>
<script src="live.js"></script>
<script src="js/main.js"></script>

</body>

</html>
<?php 
unset($_SESSION['msg']);
?>