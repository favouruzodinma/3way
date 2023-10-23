<?php
session_start();
require("../conn.php");
include("class.upload.php");
include("Slugify.php");
$slug=new Slugify();
if(isset($_POST['log'])){
function clean_up($value){
// $value=strip_tags($value);
//$value=htmlspecialchars($value);
$value=trim($value);
return $value;
}
    $id=$_POST['id'];
    $fal=$_POST['faculty_id'];

    $title=clean_up($_POST['title']);
    $slugee=$slug->slugify($title);
    $details=clean_up($_POST['about']);
 
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
if(!empty($_POST['b_img'])){unlink("../project_images/".$_POST['b_img']);}
$b_img=$btimage.'.jpg';
}else{
    $b_img=(!empty($_POST['b_img'])) ? $_POST['b_img'] : "";
}
}
         }
                    }else{
                        $b_img=(!empty($_POST['b_img'])) ? $_POST['b_img'] : "";
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
if(!empty($_POST['d_img'])){unlink("../project_images/".$_POST['d_img']);}
$d_img=$dtimage.'.jpg';
}else{
    $d_img=(!empty($_POST['d_img'])) ? $_POST['d_img'] : "";
}
}
                        }
                    }else{
                        $d_img=(!empty($_POST['d_img'])) ? $_POST['d_img'] : "";
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
if(!empty($_POST['a_img'])){unlink("../project_images/".$_POST['a_img']);}
$a_img=$atimage.'.jpg';
}else{
    $a_img=(!empty($_POST['a_img'])) ? $_POST['a_img'] : "";
}
}
     }
                    }else{
                        $a_img=(!empty($_POST['a_img'])) ? $_POST['a_img'] : "";
                    }

                 
    $sql=mysqli_query($conn, "Update faculty set dname='$title', slug='$slugee', about='$details', src='$b_img', src2='$d_img', src3='$a_img' where id='$id'") ;

                    if($sql){
mysqli_query($conn, "Update department set faculty='$title', slug_faculty='$slugee' where fal_id='$fal'") ;
                        $_SESSION['msg']="Faculty has been Updated";
                    }else{
                        $_SESSION['msg2']="Faculty Update Failed";
                    }

 echo "<script>history.back();</script>";
}else{
    header("Location: index");
}
?>

