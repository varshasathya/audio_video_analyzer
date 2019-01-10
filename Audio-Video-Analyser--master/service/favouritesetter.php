<?php

        session_start();
        
        $jsonData = json_decode(file_get_contents('php://input'), true);
        //print_r($jsonData);

        $videoid = $jsonData['dataid'];
        
        //echo $videoid;
        
        require '/home/trendsep/public_html/sih2018/config/config.php';
        $conn=connection();
        //echo "ss";
        
        $sql= "select * from data where dataid={$videoid}";
        //echo $sql;
        
        $result = query_dml($conn,$sql);
        
        while($row = mysqli_fetch_assoc($result)) {
            $flag=$row["favourite"];
        }
        if($flag==1)$flag=0;
        else $flag = 1;
        
        
        $sql= "update data set favourite={$flag} where dataid={$videoid}";
       // echo $sql;
        
        query_ddl($conn,$sql);
        
        echo "success";
        close_connection($conn);

?>