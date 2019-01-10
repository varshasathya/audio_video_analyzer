<?php
require  "/home/trendsep/public_html/sih2018/config/config.php";
require "/home/trendsep/public_html/sih2018/service/face_service.php";
require "/home/trendsep/public_html/sih2018/service/service.php";
$conn=connection();
$sql="SELECT * FROM data WHERE type = 1 and dataid in (select dataid FROM data_details WHERE  add_person=1 and trained_status=0)";
$result = query_dml($conn,$sql);
if($result!=0){
   
while($row = mysqli_fetch_assoc($result)) {
                               
                        $sql="select * from data where dataid='{$row["dataid"]}'";
                        
                        $res= query_dml($conn,$sql);
                      
                        if($res!=0)
                        {
                            if($ans = mysqli_fetch_assoc($res))
                            {
                                $target_file=$ans["name"];
                                $personGroupId=split ("\.", $target_file);
                                $video_id=$personGroupId [0];
                                
                                $data=json_decode(persongroup_gettrainingstatus($video_id));
                              print_r($data);
                                if($data->status=="succeeded"||$data->message=="There is no person in group hello123")  {
                           $sql="update data_details set trained_status=1 where dataid='{$row["dataid"]}'";
                           //echo $sql;
                            query_ddl($conn,$sql);
                            echo "success";
                        }
                        else
                        {
                            echo $data->status;
                        }
                            }
                        }
                        
                                
                               
                                    
                               
            }
           
            
}
else
{
    echo "no rows";
}
?>