<?php
session_start();
require("../conn.php");
include("class.upload.php");
include("Slugify.php");
$slug=new Slugify();

if(isset($_POST['log'])){
    function clean_up($value){
    //$value=strip_tags($value);
    //$value=htmlspecialchars($value);
    $value=trim($value);
    return $value;
    }
        $id;
        $dpt_id=clean_up($_POST['dpt_id']);
        $faculty=clean_up($_POST['faculty']);
        $dpt=$conn->query("select * from faculty where slug='$faculty' ");
        if($dpt->num_rows>0){
    $bow1=$dpt->fetch_assoc();
    $fal_id=$bow1['faculty_id'];
    $fal_name=$bow1['dname'];
          } 
        $title=clean_up($_POST['title']);
        $slugee=$slug->slugify($title);
        $about=clean_up($_POST['about']);
        $requirement=clean_up($_POST['requirement']);

    
    if(!empty($_FILES['firstx']['name'])){
        $bimagen=$_FILES['firstx']['name'];
        $btimage = rand(0,20).date('YmdHis');
        $btype=$_FILES['firstx']['type'];
        $btmp=$_FILES["firstx"]["tmp_name"];
        if(substr($btype,0,5)==="image"){
    $foo= new Upload($_FILES['firstx']);
    if ($foo->uploaded) {
    $foo->file_new_name_body = $btimage;
    $foo->image_resize = true;
    $foo->image_convert = 'jpg';
    $foo->image_x = 500;
    $foo->image_ratio_y = true;
    $foo->Process('../project_images');
    if($foo->processed){
        $foo->Clean();
        $b_img=$btimage.'.jpg';
    }else{
        $b_img="";
    }
    }
        }
    }
    
       if(!empty($_FILES['secondx']['name'])){
        $dimagen=$_FILES['secondx']['name'];
        $dtimage = rand(0,20).date('YmdHis');
        $dtype=$_FILES['secondx']['type'];
        $dtmp=$_FILES["secondx"]["tmp_name"];
        if(substr($dtype,0,5)==="image"){
    $foo= new Upload($_FILES['secondx']);
    if ($foo->uploaded) {
    $foo->file_new_name_body = $dtimage;
    $foo->image_resize = true;
    $foo->image_convert = 'jpg';
    $foo->image_x = 500;
    $foo->image_ratio_y = true;
    $foo->Process('../project_images');
    if($foo->processed){
    $foo->Clean();
    $d_img=$dtimage.'.jpg';
    }else{
        $d_img="";
    }
    }
        }
       }
    
       if(!empty($_FILES['thirdx']['name'])){
        $aimagen=$_FILES['thirdx']['name'];
        $atimage = rand(0,20).date('YmdHis');
        $atype=$_FILES['thirdx']['type'];
        $atmp=$_FILES["thirdx"]["tmp_name"];
        if(substr($atype,0,5)==="image"){
    $foo= new Upload($_FILES['thirdx']);
    if ($foo->uploaded) {
    $foo->file_new_name_body = $atimage;
    $foo->image_resize = true;
    $foo->image_convert = 'jpg';
    $foo->image_x = 500;
    $foo->image_ratio_y = true;
    $foo->Process('../project_images');
    if($foo->processed){
        $foo->Clean();
        $a_img=$atimage.'.jpg';
    }else{
        $a_img="";
    }
    }
        }
    }
    
    
    $sql=mysqli_query($conn, "insert into department set department='$title', slug='$slugee', dep_id='$dpt_id', faculty='$fal_name', slug_faculty='$faculty', fal_id='$fal_id', about='$about', requirement='$requirement', firstx='$b_img', secondx='$d_img', thirdx='$a_img'") or die(mysqli_error($conn));
    
               if($sql){
                $_SESSION['msg']="Success!.. Department Added"; 
               }else{
                $_SESSION['msg2']="Failed!..Please fill required inputs"; 
               }
               
        header("Location: department");
    }else{
        header("Location: index");
    }