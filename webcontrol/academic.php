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
            <h1>Manage Academic Session</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
             <div class="breadcrumb-item">Manage Academic Session</div>
            </div>
          </div>
          <div class="section-body">
          
            <div class="row">
              
              <div class="col-12 col-md-12 col-lg-12">

              <a href="" class="btn btn-primary pull-right mb-3">Add Academic Session</a>
             <div style="clear:both;"></div>
                <div class="card">
                  <div class="card-header">
                    <h4>Manage Academic Session</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive table-hover">
                      <table class="table table-sm">
                        <thead>
                          <tr>
	                          <th scope="col">#</th>
	                          <th scope="col">OrderID</th>
	                          <th scope="col">Billing Name</th>
	                          <th scope="col">Total</th>
	                        </tr>
                        </thead>
                        <tbody>
                          <tr>
                          <td>1</td>
                          <td>#TD1230</td>
                          <td>John Mitchell</td>
                          <td>150$</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>#TD1231</td>
                          <td>Henry Smith</td>
                          <td>150$</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>#TD1232</td>
                          <td>Barry Hick</td>
                          <td>150$</td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
            <div class="row">
<div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                 
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                              class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
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
     
      <?php
include('footer.php');
      ?>
    </div>
  </div>
  <!-- General JS Scripts -->
  <?php
include('scripts.php');
  ?>
</body>


</html>