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
            <h1>Manage News</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
             <div class="breadcrumb-item">Manage News</div>
            </div>
          </div>
          <div class="section-body">
          
            <div class="row">
              
              <div class="col-12 col-md-12 col-lg-12">

              <a href="#" class="btn btn-primary pull-right mb-3"  data-toggle="modal" data-target=".faculty">Add news</a>

             <div style="clear:both;"></div>
                <div class="card">
                  <div class="card-header">
                    <h4>Manage Department</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive table-hover">
                      <table class="table table-sm">
                        <thead>
                          <tr>
	                          <th scope="col">Image</th>
	                          <th scope="col">Faculty</th>
	                          <th scope="col">Details</th>
	                          <th scope="col">Date Created</th>
	                          <th scope="col">--</th>

	                        </tr>
                        </thead>
                        <tbody>
                        <?php
 $per_page=10;
 if(isset($_GET['pro_name']) && isset($_GET['start']) && isset($_GET['end'])){
  $sname=$_GET['pro_name'];
  $sstart=$_GET['start'];
  $send=$_GET['end'];
  $count_all=$conn->query("select count(*) from department where title LIKE '%$sname%' AND created_at>='$sstart' AND created_at<='$send'");
 }else{
  $count_all=$conn->query("select count(*) from department");
 }
    while($row=$count_all->fetch_array()){
        $count_val=$row[0];
    }
    $pages=ceil($count_val/$per_page);

if(isset($_GET['pro_name']) && isset($_GET['start']) && isset($_GET['end'])){
  $sname=$_GET['pro_name'];
  $sstart=$_GET['start'];
  $send=$_GET['end'];
  if(isset($_GET['page']) && !empty($_GET['page']) && is_numeric($_GET['page'])){
    $start=(($_GET['page'])-1)*$per_page;
    $site=$conn->query("select * from department where title LIKE '%$sname%' AND created_at>='$sstart' AND created_at<='$send' order by id DESC LIMIT $per_page OFFSET $start");
  }
}else{
  if(isset($_GET['page']) && !empty($_GET['page']) && is_numeric($_GET['page'])){
    $start=(($_GET['page'])-1)*$per_page;
    $site=$conn->query("select * from department order by id desc LIMIT $per_page OFFSET $start");
  }
}
if($site->num_rows>=1){
  while($row=$site->fetch_assoc()){ ?>
                          <tr>
                          <td> <img style="height:100px;width:150px;" src="../project_images/<?php echo $row['firstx']; ?>">
</td>
                          <td><?php echo $row['dname']; ?></td>
                          <td>John Mitchell</td>
                          <td>150$</td>
                        </tr>
                        <?php }
}else{
  echo "<tr><td colspan=11>No results Found</td></tr>";
}
?>        
                      
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
       
      </div>
      <!-- modals -->
      <div class="modal fade faculty" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <form action="department_add.php" method="post" enctype="multipart/form-data">

              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <?php		 $prand=rand(1000000000, 99999999999);	 ?>
         <input type="hidden" value='<?php echo $prand; ?>' name="dpt_id">

		 <div class="form-group">
	                      <label>Faculty</label>
	                      <select class="form-control" name="faculty"> 
	                        <option>Choose a faculty</option>
							<?php
 $dpt=$conn->query("select * from faculty ");
if($dpt->num_rows>=1){
while($rows = $dpt->fetch_assoc()){ ?>
							?>
	                        <option value="<?php echo $rows['slug']; ?>"><?php echo $rows['dname']; ?></option>
	                       <?php
							}}
						   ?>
	                      </select>
	                    </div>
					 <div class="form-group required-field">
                        <label>Department:</label>
            <input type="text" name="title" class="form-control form-control-sm" required>
                     </div>

              <div class="form-group required-field">
              <label>About Department:</label>
<textarea id="ckeditor" required class="form-control ckeditor" name="about" cols="30" rows="5"></textarea>
              </div>

			  
              <div class="form-group required-field">
              <label>Department Requirement:</label>
<textarea id="ckeditor" required class="form-control ckeditor" name="requirement" cols="30" rows="5"></textarea>
              </div>

                  
                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                      	<label>Upload Image</label>
	            <input type="file" class="form-control" name="firstx" required>
	                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                      	<label>Upload Image</label>
	                      <input type="file" class="form-control" name="secondx">
	                    </div>
                    </div>


                    <div class="col-md-4">
                    <div class="form-group">
                      	<label>Upload Image</label>
	                      <input type="file" class="form-control" name="thirdx">
	                    </div>
                    </div>

                </div>
              </div>
              <div class="modal-footer">
                        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="log" class="btn btn-primary btn-sm">Submit</button>
                    </div><!-- End .modal-footer -->
                </form>
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