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
            <h1>Manage Faculties</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
             <div class="breadcrumb-item">Manage Faculties</div>
            </div>
          </div>
          <div class="section-body">
          
            <div class="row">
              
              <div class="col-12 col-md-12 col-lg-12">

              <a href="#" class="btn btn-primary pull-right mb-3"  data-toggle="modal" data-target=".faculty">Add Faculty</a>

             <div style="clear:both;"></div>
                <div class="card">
                  <div class="card-header">
                    <h4>Manage Faculties</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive table-hover text-center">
                      <table class="table table-bordered table-sm">
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
  $count_all=$conn->query("select count(*) from faculty where title LIKE '%$sname%' AND created_at>='$sstart' AND created_at<='$send'");
 }else{
  $count_all=$conn->query("select count(*) from faculty");
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
    $site=$conn->query("select * from faculty where title LIKE '%$sname%' AND created_at>='$sstart' AND created_at<='$send' order by id DESC LIMIT $per_page OFFSET $start");
  }
}else{
  if(isset($_GET['page']) && !empty($_GET['page']) && is_numeric($_GET['page'])){
    $start=(($_GET['page'])-1)*$per_page;
    $site=$conn->query("select * from faculty order by id desc LIMIT $per_page OFFSET $start");
  }
}
if($site->num_rows>=1){
  while($row=$site->fetch_assoc()){ ?>
                          <tr>
                          <td> <img style="height:100px;width:150px;" src="../project_images/<?php echo $row['src']; ?>">
</td>
                          <td><?php echo $row['dname']; ?></td>
                  <td><?php echo substr(remove_tags($row['about']),0,200); ?>...</td>
                          <td><?php echo read_able($row['created_at']); ?></td>
                          <td>
                       
      <button class="btn btn-purple btn-sm dropdown-toggle mr-3" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Action
                      </button>
                      <div class="dropdown-menu">
<a class="dropdown-item fillz" href="#"  data-toggle="modal" data-target=".edit"  data-id="<?php echo $row['id']; ?>"  data-fal="<?php echo $row['faculty_id']; ?>"
  data-dname="<?php echo htmlspecialchars($row['dname']); ?>" data-src_img="<?php echo $row['src']; ?>"  data-d_imn="<?php echo $row['src2']; ?>"
                data-a_imn="<?php echo $row['src3']; ?>"
                data-about="<?php echo htmlspecialchars($row['about']); ?>">Edit</a>

 <a class="dropdown-item fillz2" href="#" data-target="#view" data-id="<?php echo $row['id']; ?>">View</a>
<a class="dropdown-item delz" data-delete_id="faculty_delete?id=<?php echo $row['id']; ?>" data-target="#delete" data-toggle="modal" >Delete</a>
                       
                      </div>
                  
                          </td>
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
            <form action="faculty_add.php" method="post" enctype="multipart/form-data">

              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add Faculty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <?php		 $prand=rand(1000000000, 99999999999);	 ?>
         <input type="hidden" value='<?php echo $prand; ?>' name="faculty_id">

                     <div class="form-group required-field">
                        <label>Name of Faculty:</label>
            <input type="text" name="title" class="form-control form-control-sm" required>
                     </div>

              <div class="form-group required-field">
              <label>About Faculty:</label>
<textarea id="ckeditor" required class="form-control ckeditor" name="about" cols="30" rows="5"></textarea>
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
                      	<label>Upload Image(optional)</label>
	                      <input type="file" class="form-control" name="secondx">
	                    </div>
                    </div>


                    <div class="col-md-4">
                    <div class="form-group">
                      	<label>Upload Image(optional)</label>
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

         <!-- modals -->
      <div class="modal fade edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <form action="faculty_edit.php" method="post" enctype="multipart/form-data">

              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Edit Faculty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              
         <input type="hidden"  name="id" id="form-id">
         <input type="hidden"  name="faculty_id" id="form-fid">

         
         <input type="hidden" class="form-control" name="b_img" id="b_imx">
         <input type="hidden" class="form-control" name="d_img" id="d_imx">
         <input type="hidden" class="form-control" name="a_img" id="a_imx">

                     <div class="form-group required-field">
                        <label>Name of Faculty:</label>
            <input type="text" name="title" class="form-control form-control-sm" required id="form-dname">
                     </div>

              <div class="form-group required-field">
              <label>About Faculty:</label>
<textarea id="ckeditor" required class="form-control ckeditor" name="about" cols="30" rows="5"></textarea>
              </div>

                  
                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                      	<label>Upload Image <span style="color:red"> (optional)</span></label>
	            <input type="file" class="form-control" name="firstx" >
	                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    	<label>Upload Image <span style="color:red"> (optional)</span></label>
	                      <input type="file" class="form-control" name="secondx">
	                    </div>
                    </div>


                    <div class="col-md-4">
                    <div class="form-group">
                      	<label>Upload Image <span style="color:red"> (optional)</span></label>
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

<script>
document.querySelectorAll(".fillz").forEach(function(g){
g.addEventListener("click",function(d){
  document.querySelector("#form-dname").value=d.target.dataset.dname;
  CKEDITOR.instances['ckeditor'].setData(d.target.dataset.about);
  document.querySelector("#b_imx").value=d.target.dataset.src_img;
  document.querySelector("#d_imx").value=d.target.dataset.d_imn;
  document.querySelector("#a_imx").value=d.target.dataset.a_imn;
  document.querySelector("#form-fid").value=d.target.dataset.fal;


  document.querySelector("#form-id").value=d.target.dataset.id;
  CKEDITOR.instances['ckeditor2'].setData(d.target.dataset.details);
  /* CKEDITOR.instances['ckeditor2'].insertHtml(d.target.dataset.details) */
 
});
});
$(".fillz2").each(function(){
  $(this).on("click",function(h){
$.ajax({
url:"project_serve.php",
type:"POST",
data:{id:h.target.dataset.id},
success:function(result){
  $('.viewing').html(result);
}
});
});
});
</script>
</body>


</html>