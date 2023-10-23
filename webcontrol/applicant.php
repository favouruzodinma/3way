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
            <h1>Manage Applicants</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Manage Applicants</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Export Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Acadmic Session</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Phone number</th>
                            <th>Email</th>
                            <th>Faculty</th>
                            <th>Department</th>
                            <th>Application Status</th>
                            <th>--</th>

                          </tr>
                        </thead>
                        <tbody>
                        <?php
 $per_page=10;
 if(isset($_GET['pro_name']) && isset($_GET['start']) && isset($_GET['end'])){
  $sname=$_GET['pro_name'];
  $sstart=$_GET['start'];
  $send=$_GET['end'];
  $count_all=$conn->query("select count(*) from applicant where title LIKE '%$sname%' AND created_at>='$sstart' AND created_at<='$send'");
 }else{
  $count_all=$conn->query("select count(*) from applicant");
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
    $site=$conn->query("select * from applicant where title LIKE '%$sname%' AND created_at>='$sstart' AND created_at<='$send' order by id DESC LIMIT $per_page OFFSET $start");
  }
}else{
  if(isset($_GET['page']) && !empty($_GET['page']) && is_numeric($_GET['page'])){
    $start=(($_GET['page'])-1)*$per_page;
    $site=$conn->query("select * from applicant order by id desc LIMIT $per_page OFFSET $start");
  }
}
if($site->num_rows>=1){
  while($row=$site->fetch_assoc()){ ?>
                          <tr>
                            <td><?php echo $row['aca_session']; ?></td>
                            <td><?php echo $row['fn']. ' ' .$row['mn']. ' '. $row['surn']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['faculty']; ?></td>
                            <td><?php echo $row['department']; ?></td>
                            <td>
                            <?php 
                            if($row['fee_status'] == 'not paid'){
                            ?>
                       <span class="text-danger text-capitalize"><?php echo $row['fee_status']; ?>  </span>  
                    <?php 
                            }else{?>
                       <span class="text-success text-capitalize"><?php echo $row['fee_status']; ?>  </span>  
                       <?php 
                            }?>
                    
                    
                    </td>

                 <td><a href="profile?id=<?php echo $row['user_id']; ?>" class="btn btn-info btn-xs">View</a></td>
                            <!-- <td>$140,660</td> -->

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
          </div>
        </section>
       
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