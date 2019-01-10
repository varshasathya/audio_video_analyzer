<?php
session_start();
if(!isset($_SESSION["userid"])){
    echo "<script>windowlocation.href='http://trendsepc.in/sih2018/view/homepage';</script>";
}

require '../config/config.php';  
        
                           $conn=connection();
                             
                            $videoname = $_POST["videoname"];
                            $sql="SELECT * FROM data where name='{$videoname}'";
                            // echo $sql;
                            $result=query_dml($conn,$sql);
                            $row = mysqli_fetch_assoc($result);
                            //print_r($row);
?>
<html>
    <body onload="document.submitform.submit()">
        <form action="video_analysis.php" method="post" name="submitform">
            <input type="text" name="" value="<?php echo $row['dataid'];?>"/>
            <input type="submit" />
            </form>
    </body>