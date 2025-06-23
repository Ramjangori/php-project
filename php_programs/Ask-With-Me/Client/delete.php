<?php
 //include("./Common/db.php");
 include(__DIR__ . '/../Common/db.php');


if(isset($_GET['q_id'])){
    
      $id = $_GET['q_id'];
     
    $sql = "DELETE from Questions where `id` = $id";
    $delete =$conn->query($sql);
    if($delete){
header("Location: ".$_SERVER['HTTP_REFERER']);
    }

}
?>