<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>All Nations Institute Of Marine & Technology - Admin login</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link href="shared/toastr.min.css" rel="stylesheet">

  
  <link rel='shortcut icon' type='image/x-icon' href='images/favicon.jpg' />
</head>

<body class="background-image-body">
  <!-- <div class="loader"></div> -->
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand login-brand-color">
            	<img alt="image" src="images/logo.png" />
            
            </div>
            <div class="card">
              <div class="card-header card-header-auth">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="login_process" class="needs-validation" >
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <button type="submit" name="log" class="btn btn-lg btn-block btn-auth-color" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
               
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="shared/toastr.min.js"></script>

  <?php
if(isset($_SESSION['msg'])){ ?>
<script> toastr.info("<?php echo $_SESSION['msg']; ?>"); </script>
<?php } ?>
  
</body>


</html>
<?php
unset($_SESSION['msg']);
?>