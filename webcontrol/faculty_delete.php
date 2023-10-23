<?php
session_start();
require("../config.php");
if(isset($_GET['id']) && !empty($_GET['id'])){
        $id=$_GET['id'];
        $query1=$conn->query("select * from faculty where id='".$id."'");
       while($row=$query1->fetch_assoc()){
           $val1=$row['src'];
           $val2=$row['src2'];
           $val3=$row['src3'];
       }
        $query=$conn->prepare("delete from faculty where id=?");
        $query->bind_param('i',$id);
        if($query->execute()){      
            if(!empty($val1)){unlink("../project_images/".$val1);}
            if(!empty($val2)){unlink("../project_images/".$val2);}
            if(!empty($val3)){unlink("../project_images/".$val3);}
            $_SESSION['msg']="Project was deleted";          
        }else{
            $_SESSION['msg']="Project deletion failed"; 
        }
        echo "<script>history.back();</script>";
}else{
    header("Location: index");
}
?>