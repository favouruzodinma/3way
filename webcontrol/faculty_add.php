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
        $title=clean_up($_POST['title']);
        $slugee=$slug->slugify($title);
        $fal_id=clean_up($_POST['faculty_id']);
        $about=clean_up($_POST['about']);
    
      
    
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
    
    
    $sql=mysqli_query($conn, "insert into faculty set faculty_id='$fal_id', dname='$title', slug='$slugee', about='$about', src='$b_img', src2='$d_img', src3='$a_img'") or die(mysqli_error($conn));
    
               if($sql){
                $_SESSION['msg']="Success!.. Faculty Added"; 
               }else{
                $_SESSION['msg2']="Failed!..Please fill required inputs"; 
               }
                // if($query->execute()){
                //     $_SESSION['msg']="Success!..Project uploaded"; 
                // }else{
                //     $_SESSION['msg2']="Failed!..Please fill required inputs"; 
                // }
        header("Location: faculty");
    }else{
        header("Location: index");
    }