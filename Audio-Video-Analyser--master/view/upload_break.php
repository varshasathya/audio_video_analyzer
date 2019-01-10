<?php
        session_start();
        if(!isset($_SESSION["userid"])){
            echo "<script>window.location.href='homepage/index.php';</script>";
        }
$jsonData = json_decode(file_get_contents('php://input'), true);

$file_name = $jsonData['name'];

require "/home/trendsep/public_html/sih2018/config/config.php";
require "/home/trendsep/public_html/sih2018/temp/service.php";
require "/home/trendsep/public_html/sih2018/service/face_service.php";

if($file_name=="")
{
    echo "Please select file";
    exit;
}
$target_file = str_replace(" ", '_', $file_name);


 
 $conn=connection();
 $url="http://trendsepc.in/sih2018/public/video/".$target_file;
 $sql = "select dataid from `data` where name ='{$target_file}'";
	$result = query_dml($conn, $sql);
	
$ans = $result->fetch_assoc();
	$dataid = $ans["dataid"];
  // echo $url;
	$break_id = get_breakdown($url);
$personGroupId=split ("\.", $target_file);
  	 $sql="insert into `data_details` (`dataid`,`breakdown_id`,`processed_state`,`add_person`,`trained_status`)values('{$dataid}','{$break_id}',0,0,0)";
 
	  $val=query_ddl($conn,$sql);

		if ($val)
			{
			    echo $personGroupId[0];
			  $groupcreate_data=array("videoname"=>$personGroupId[0],"json"=>'{"name": "'.$personGroupId[0].'","userData": "'.$url.'"}');
			  $raja['as']=persongroup_create($groupcreate_data);
		//	   $raja['asaas']="visa";
			  print_r($raja);
	//	echo "success";
			}
		  else
			{
			echo "<h4>Upload failed try again with different named file</h4>";
			close_connection($conn);
			exit;
			}
?>