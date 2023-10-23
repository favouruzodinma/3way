<!DOCTYPE html>
<html lang="en">

<head>
<?php include("styles.php"); ?>
</head>

<body>
  <!-- <div class="loader"></div> -->
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
            <h1>Dashboard</h1>
          </div>
          <div class="row">
          	<div class="col-md-4">
              <div class="card">
              <div class="card-header">
                  <h4>Monthly Budget Summary</h4>
                </div>
                
                <div class="card-body card-type-4">
                  <div class="row pt-3 pb-3">
                    <div class="col-auto">
                      <div class="card-square l-bg-green text-white">
                        <i class="fas fa-phone"></i>
                      </div>
                    </div>
                    <div class="col">
                    <div class="text-small float-right font-weight-bold text-muted"><span class="text-success">13.1%</span></div>
                    <div class="font-weight-bold">Inquiry</div>
                    <div class="progress" data-height="5">
                      <div class="progress-bar l-bg-green" role="progressbar" data-width="80%" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="text-small float-right font-weight-bold text-muted">9,917</div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
         
           </div>
        
          
          <div class="row">
           
            
			<div class="col-lg-8 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Latest Transcation</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive mt-1">
                    
                  </div>
                </div>
              </div>
            </div>
            </div>
          
          
        </section>
	
	  </div>
    <?php
include('footer.php');
      ?>
    </div>
  </div>
 
  <?php
include('scripts.php');
  ?>
</body>


</html>