<?php
        //session_start();
        $dataid= $_POST["dataid"];
        require '../config/config.php';
        $conn=connection();
        //connection
        $sql="select * from data_details where dataid={$dataid}";
         //echo $sql;
        $result=query_dml($conn,$sql);
        
       // print_r($result);
        if($row = mysqli_fetch_assoc($result)) {
            $breakdown_id =$row["breakdown_id"];
            
        }
        //echo $breakdown_id;
        //call json generator
        require '../service/service.php';
        $json_data=breakdown_id_to_json($breakdown_id);
        echo "ss";
        print_r($json_data);

?>