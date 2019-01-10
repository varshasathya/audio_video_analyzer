<?php
session_start();

echo "hai";
require "/home/trendsep/public_html/sih2018/config/config.php";
require "/home/trendsep/public_html/sih2018/service/service.php";
echo "as";
$jsonData = json_decode(file_get_contents('php://input'), true);

$file_name = $jsonData['name'];

if($file_name=="")
{
    echo "Please select file";
    exit;
}
$target_file = str_replace(" ", '_', $file_name);


 
$conn=connection();
 $url="http://trendepc.in/sih2018/public/video/".$target_file;
 $sql = "select dataid from `data` where name ='{$target_file}'";
	$result = query_dml($conn, $sql);
	
$ans = $result->fetch_assoc();
	$dataid = $ans["dataid"];
    echo $url;
	$break_id = get_breakdown($url);
	echo $dataid.' '.$break_id;

 		 $sql="insert into `data_details` (`dataid`,`breakdown_id`)values('{$dataid}','{$break_id}')";
	  $val=query_ddl($conn,$sql);

		if ($val == 1)
			{
			echo "<h4>success</h4>.{$dataid}.' '.$break_id";
			}
		  else
			{
			echo "<h4>Upload failed try again with different named file</h4>";
			close_connection($conn);
			exit;
			}
?>