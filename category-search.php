<?php
require 'conn.php';


$out = '';
if(isset($_POST['searchSub'])){
    $cat = $_POST['id'];
    $sql = $conn->query("SELECT * FROM `department` WHERE fal_id='$cat'");
    if($sql->num_rows>0){
        $out .=' 
        <option value="" >Select a department</option>';
        while($row=$sql->fetch_assoc()):
            $out .=' <option value="'.$row['department'].'">'.$row['department'].'</option> ';
        endwhile;
    }  else{
        $out .=' 
        <option value="" >Select a department</option>';
    }
   

echo $out;
}