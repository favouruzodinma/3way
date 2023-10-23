<?php
session_start();
require_once("../conn.php");
        function clean_up($value){
            $value=trim($value);
            //$value=htmlspecialchars($value);
            return $value;
        }
 $id=1;
if(isset($_POST['about_log'])){
    $query=$conn->prepare("update site set about=? where id=?");
    $query->bind_param('si',$about,$id);
    $about=clean_up($_POST['about']);
    $query->execute();
$_SESSION['msg']="About Settings Updated";
echo "<script>history.back();</script>";
}elseif(isset($_POST['contact_log'])){
    $query=$conn->prepare("update site set name=?,email=?,phone=?,address=? where id=?");
    $query->bind_param('ssssi',$name,$email,$phone,$address,$id);
    $name=clean_up($_POST['name']);
    $email=clean_up($_POST['email']);
    $phone=clean_up($_POST['phone']);
    $address=clean_up($_POST['address']);
    $query->execute();
$_SESSION['msg']="Contact Settings Updated";
echo "<script>history.back();</script>";
}elseif(isset($_POST['social_log'])){
    $query=$conn->prepare("update site set facebook=?,twitter=?,instagram=?,youtube=? where id=?");
    $query->bind_param('ssssi',$facebook,$twitter,$instagram,$youtube,$id);
    $facebook=$_POST['facebook'];
    $twitter=$_POST['twitter'];
    $instagram=$_POST['instagram'];
    $youtube=$_POST['youtube'];
    if(!filter_var($facebook,FILTER_VALIDATE_URL)){
        $_SESSION['msg']="Invalid Facebook URL";
    }elseif(!filter_var($twitter,FILTER_VALIDATE_URL)){
        $_SESSION['msg']="Invalid Twitter URL";
    }elseif(!filter_var($instagram,FILTER_VALIDATE_URL)){
        $_SESSION['msg']="Invalid Instagram URL";
    }elseif(!filter_var($youtube,FILTER_VALIDATE_URL)){
        $_SESSION['msg']="Invalid Youtube URL";
    }else{
        $query->execute();
        $_SESSION['msg']="Media Settings Updated";
    }   
    echo "<script>history.back();</script>";
}elseif(isset($_POST['aca_log'])){
    $query=$conn->prepare("update site set aca_session=? where id=?");
    $query->bind_param('si',$aca,$id);
    $aca=clean_up($_POST['aca']);
    $query->execute();
$_SESSION['msg']="Academic Session Updated";
echo "<script>history.back();</script>";
}elseif(isset($_POST['admi_log'])){
    $query=$conn->prepare("update site set admission=? where id=?");
    $query->bind_param('si',$admi,$id);
    $admi=clean_up($_POST['admi']);
    $query->execute();
$_SESSION['msg']="Admission Requirement Updated";
echo "<script>history.back();</script>";
}elseif(isset($_POST['mission_log'])){
    $query=$conn->prepare("update site set mission=? where id=?");
    $query->bind_param('si',$mission,$id);
    $mission=clean_up($_POST['mission']);
    $query->execute();
$_SESSION['msg']="Mission Updated";
echo "<script>history.back();</script>";
}elseif(isset($_POST['vision_log'])){
    $query=$conn->prepare("update site set vision=? where id=?");
    $query->bind_param('si',$vision,$id);
    $vision=clean_up($_POST['vision']);
    $query->execute();
$_SESSION['msg']="Vision Updated";
echo "<script>history.back();</script>";
}elseif(isset($_POST['welcome_log'])){
    $query=$conn->prepare("update site set welcome=? where id=?");
    $query->bind_param('si',$welcome,$id);
    $welcome=clean_up($_POST['welcome']);
    $query->execute();
$_SESSION['msg']="Welcome Note Updated";
echo "<script>history.back();</script>";
}
else{
	header("Location: index");
}
 ?>
