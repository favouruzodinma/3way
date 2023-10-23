<?php
@session_start();
require_once("../conn.php");
require_once("../function.php");
 require_once("../last_seen.php");

$_GET['page']=(isset($_GET['page']) && !empty($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;

if(!loggedIn() || (detail('privilege')!="admin" && detail('privilege')!="subadmin")){
    header("Location: ../logout");
}
?>
<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"><i
                  class="fas fa-bars"></i></a></li>
            <li>
           
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i class="fas fa-expand"></i>
              </a>
            </li>
            
       
          <li ><a href="../index" class="nav-link nav-link-lg " target="_blank">Visit Website</a>
          </li>
          
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <i class="fas fa-user-circle fa-fw fa-1x"></i>

              <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Hello Admin</div>
             
              <a href="#" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="auth-login.html" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>