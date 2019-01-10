<?php
require  "/home/trendsep/public_html/sih2018/config/config.php";
require "/home/trendsep/public_html/sih2018/service/face_service.php";
require "/home/trendsep/public_html/sih2018/service/service.php";
$conn=connection();
$sql="select * from data_details where processed_state=0";

$result = query_dml($conn,$sql);
if($result!=0){
    $val=0;
while($row = mysqli_fetch_assoc($result)) {
              $val=1;
                        $data=json_decode(process($row["breakdown_id"]));
                        
                        if($data->state=="Processed")  {
                          $sql="update data_details set processed_state=1 where dataid='{$row["dataid"]}'";
                          query_ddl($conn,$sql);
                            
                            $res=query_dml($conn,"select * from data where dataid='".$row["dataid"]."'");
                            
                          
                            if($res= mysqli_fetch_assoc($res)){
                                $nam=split("\.",$res["name"]);
                                $op=vtt_getter($row["breakdown_id"],$nam[0]);
                                echo $op;
                            }
                            echo "success";
                        }
                                
                                
            }
            if($val==0)
            {
                echo "nothing fetched";
            }
            
}
else
{
    echo "no rows";
}

 $sql="INSERT INTO tmp (name)
VALUES (1);";
                        echo  query_ddl($conn,$sql);

?>