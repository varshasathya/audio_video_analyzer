<?php
include "service.php";
print_r($_POST);
if(isset($_POST)){
    //face_updation($breakdown_id,$face_id,$new_name)
   echo (face_updation($_POST['breakdown'],$_POST['id'],$_POST['facename']));
  
    
}else{
    echo "Post not present";
}