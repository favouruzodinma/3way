<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index">
              <img alt="image" src="../images/admin.png" class="header-logo" />
              <!-- <span class="logo-name">ALL NATIONS INSTITUTE</span> -->
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>

            <li>
              <a href="index" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a> 
            </li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i><span>School Setting</span></a>
              <ul class="dropdown-menu">
        <li class="active"><a class="nav-link" href="#" data-toggle="modal" data-target=".about">About</a></li>
                <li><a class="nav-link" href="#" data-toggle="modal" data-target=".mission">Mission</a></li>
                <li><a class="nav-link" href="#" data-toggle="modal" data-target=".vision">Vision</a></li>
                <li><a class="nav-link" href="#" data-toggle="modal" data-target=".welcome">Welcome Note</a></li>
                <li><a class="nav-link" href="#" data-toggle="modal" data-target=".admision">Admision Requirement</a></li>
                <li><a class="nav-link" href="#" data-toggle="modal" data-target=".contact">Contact Us</a></li>


              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fab fa-gg"></i><span>Manage Academics</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="faculty">Manage Faculty</a></li>
                <li><a class="nav-link" href="department">Manage Department</a></li>

              </ul>
            </li>
         
            <li><a class="nav-link" href="applicant"><i class="fas fa-layer-group"></i><span>Manage Applicants</span></a></li>

            <li><a class="nav-link" href="news"><i class="fas fa-map-marked-alt"></i><span>Manage News/Events</span></a></li>
            
            <li><a class="nav-link" href="vector-map.html"><i class="fas fa-map-marked-alt"></i><span>Manage Facilities</span></a></li>
            
           
            <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fab fa-google"></i> <span>General Setting</span></a>
              <ul class="dropdown-menu">
              <li><a class="nav-link" href="#" data-toggle="modal" data-target=".academy">Acadmic Session</a></li>
                <li><a href="gmaps-advanced-route.html">Manage Application Fee</a></li>
                <li><a href="gmaps-draggable-marker.html">Change Password</a></li>
               
              </ul>
            </li>
           
            <li><a class="nav-link" href="vector-map.html"><i class="fas fa-stopwatch"></i><span>Logout</span></a></li>
         
          </ul>
        </aside>
      </div>

      <?php
$query_f=$conn->query("select * from site where id=1");
if($query_f->num_rows>0){
  while($row=$query_f->fetch_assoc()){ ?>
<!-- modals -->
      <div class="modal fade about" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <form action="site_update" method="post">

              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Update Site Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <div class="form-group required-field">
                <label for="">About School:</label>
<textarea id="ckeditor" required class="form-control ckeditor" name="about" cols="30" rows="5"><?php echo $row['about']; ?></textarea>

                     </div>
              </div>
              <div class="modal-footer">
                        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="about_log" class="btn btn-primary btn-sm">Update About</button>
                    </div><!-- End .modal-footer -->
                </form>
            </div>
          </div>
        </div>

        <!-- modal2  -->

        <div class="modal fade mission" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <form action="site_update" method="post">

              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Update Site Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <div class="form-group required-field">
              <label for="">Mission:</label>
<textarea id="ckeditor" required class="form-control ckeditor" name="mission" cols="30" rows="5"><?php echo $row['mission']; ?></textarea>

                     </div>
              </div>
              <div class="modal-footer">
                        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="mission_log" class="btn btn-primary btn-sm">Update Site</button>
                    </div><!-- End .modal-footer -->
                </form>
            </div>
          </div>
        </div>


        <div class="modal fade vision" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <form action="site_update" method="post">

              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Update Site Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <div class="form-group required-field">
              <label for="">Vision:</label>
<textarea id="ckeditor" required class="form-control ckeditor" name="vision" cols="30" rows="5"><?php echo $row['vision']; ?></textarea>

                     </div>
              </div>
              <div class="modal-footer">
                        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="vision_log" class="btn btn-primary btn-sm">Update Site</button>
                    </div><!-- End .modal-footer -->
                </form>
            </div>
          </div>
        </div>

        <div class="modal fade welcome" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <form action="site_update" method="post">

              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Update Site Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <div class="form-group required-field">
                <label for="">Welcome Note</label>
<textarea id="ckeditor" required class="form-control ckeditor" name="welcome" cols="30" rows="5"><?php echo $row['welcome']; ?></textarea>
                     </div>
              </div>
              <div class="modal-footer">
                        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="welcome_log" class="btn btn-primary btn-sm">Update Site</button>
                    </div><!-- End .modal-footer -->
                </form>
            </div>
          </div>
        </div>

        <div class="modal fade admision" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <form action="site_update" method="post">

              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Update Site Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <div class="form-group required-field">
                <label for="">Admission Requirements</label>
<textarea id="ckeditor" required class="form-control ckeditor" name="admi" cols="30" rows="5"><?php echo $row['admission']; ?></textarea>

                     </div>
              </div>
              <div class="modal-footer">
                        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="admi_log" class="btn btn-primary btn-sm">Update Site</button>
                    </div><!-- End .modal-footer -->
                </form>
            </div>
          </div>
        </div>

        <div class="modal fade contact" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <form action="site_update" method="post">

              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Update Site Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                             <div class="form-group required-field">
                               <label>Website Name</label>
                                   <input type="text" name="name" value="<?php echo $row['name']; ?>" required class="form-control form-control-sm">
                                    </div>
                             <div class="form-group required-field">
                               <label>Phone Number</label>
                                   <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required class="form-control form-control-sm">
                                    </div>
                                    <div class="form-group required-field">
                               <label>Email Address</label>
                                   <input type="email" name="email" value="<?php echo $row['email']; ?>" required class="form-control form-control-sm">
                                    </div>
                                   <div class="form-group required-field">
                                     <label>Address</label>
                 <textarea id="ckeditor" class="form-control ckeditor" required name="address" cols="30" rows="5"><?php echo $row['address']; ?></textarea>
                                    </div>

                    </div><!-- End .modal-body -->
              <div class="modal-footer">
                        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="contact_log" class="btn btn-primary btn-sm">Update Site</button>
                    </div><!-- End .modal-footer -->
                </form>
            </div>
          </div>
        </div>

        <div class="modal fade academy" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <form action="site_update" method="post">

              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Update Current Academic Session</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <div class="form-group required-field">
<input type="text" class="form-control" name='aca' placeholder="e.g 2012/2013" value="<?php echo $row['aca_session']; ?> ">

                     </div>
              </div>
              <div class="modal-footer">
                        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="aca_log" class="btn btn-primary btn-sm">Update Site</button>
                    </div><!-- End .modal-footer -->
                </form>
            </div>
          </div>
        </div>

        <?php }
}
?>