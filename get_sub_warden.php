<?php
session_start();
include('config.php');

$cat_name = ($_POST['category_id']);

$cat=mysqli_query($con,"select * from `hostel` Where h_sno='$cat_name'");

if(mysqli_num_rows($cat)>0){
    $html='';
    while($row=mysqli_fetch_assoc($cat)){
        $html.= "<option value=".$row['sno'].">".$row['name']."</option>";
    }
    echo $html;
}else{
    echo "<option></option>";
}
?>	