<?php
session_start();

require 'check_find.php';
$search_data_prev ="ss";// $_POST["searchkey"];
$search_data = split (" ", $search_data_prev);
//print_r($search_data);

//
// $returnarray = array();
// $i=0;

                          require 'home/trendsep/public_html/sih2018/config/config.php';  
                           $conn=connection();
                            $userid=8;
                            
                            $sql="SELECT * FROM data inner join data_details on data.dataid = data_details.dataid and userid={$userid} and data_details.processed_state = 1";
                            // echo $sql;
                            $result=query_dml($conn,$sql);
                            $c = 0;
                           print_r($result);
                            while($row = mysqli_fetch_assoc($result)) {
                                $filename=$row["name"];
                                $breakdownid = $row["breakdown_id"];
                                $splitter = split ("\.", $filename);
                                 $vttname=$splitter[0];
                                 $vttname = $vttname.".vtt";
                                 echo $vttname.$search_data.$breakdownid;
                                 $json = json_decode(search_match($vttname,$search_data,$breakdownid));
                                 print_r($json);
                                if(count((array)$json)==0){
                                    $returnarray[$i]=$filename;
                                    $i++;
                                }
                            
                                 

                            }
print_r($returnarray);

?>