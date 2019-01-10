<?php
require  "/home/trendsep/public_html/sih2018/config/config.php";
require "/home/trendsep/public_html/sih2018/service/face_service.php";
require "/home/trendsep/public_html/sih2018/service/service.php";
require "/home/trendsep/public_html/sih2018/algorithms/source_json_seperator.php";
$conn=connection();
$sql="SELECT * FROM data_details WHERE processed_state=1 and add_person=0";



$result = query_dml($conn,$sql);
if($result!=0){
while($row = mysqli_fetch_assoc($result)) {
                        $sql="SELECT * FROM data WHERE dataid='{$row["dataid"]}'";
                        $res = query_dml($conn,$sql);
                        $target=$res->fetch_assoc();
                        $target_file =$target["name"];
                        $personGroupId=split ("\.", $target_file);
                        $video_id=$personGroupId [0];
                        
                        
                        $json = breakdown_id_to_json($row["breakdown_id"]);
                        $val = face_image_url_getter($json);
              
                    foreach ($val as $key => $value) {
                        
                        //echo $value;
                      $per=json_decode(persongroupperson_create( '{"name":"'.$key .'","userData": "'.$value["thumbnailFullUrl"].'"}',$video_id),true);
                      $person_id=$per["personId"];
                      $persistant_id=persongroupperson_addface($person_id,'{"url": "'.$value["thumbnailFullUrl"].'"}',$video_id);
                         
                     
                    }
                        
                       
                     if(print_r(persongroup_train($video_id),true);)
                     {
                     $sql="update data_details set add_person=1 where dataid='{$row["dataid"]}'";
                          //echo $sql;
                            query_ddl($conn,$sql);
                            echo "success";
                     }        
            }
}


?>