
<?php
session_start();

if (isset($_FILES['file1']))
	{
	$target_dir = "/home/trendsep/public_html/sih2018/public/video/";
	$target_file = $target_dir . str_replace(" ", '_', basename($_FILES["file1"]["name"]));
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
	if (isset($_POST["submit"]))
		{
		$check = $_FILES['file1']['size'];
		if ($check !== false) $uploadOk = 1;
		  else $uploadOk = 0;
		}

	$path_parts = pathinfo($_FILES["file1"]["name"]);
	$imageFileType = $path_parts['extension'];
	if ($imageFileType != "mp4" && $imageFileType != "MP4") $uploadOk = 0;
	if ($uploadOk == 0)
		{
		    echo "select the correct format";
		    exit;
		}
	  else
		{
		if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file))
			{
  require "../config/config.php";
				$conn = connection();
  $filename = str_replace(" ", '_',$_FILES["file1"]["name"]);;
	$sql = "insert into data (`userid`,`name`,`favourite`,`type`) values ('{$_SESSION['userid']}','{$filename}','0','1')";
	if (query_ddl($conn, $sql) != 0)
		{
	
              echo "<h4>Success</h4>";
	
		}
	  else
		{
		echo "<h4>Upload failed try again with different named file</h4>";
		close_connection($conn);
		exit;
		}


			}
			else
			{
			    echo "upload failed";
			    exit;
			}
		}

// 	$filename = $_FILES["file1"]["name"];
// 	$url = "http://trendsepc.in/sih2018/public/video/{$filename}";
// 	require "../config/config.php";

// 	require "./service.php";

// 	$conn = connection();
// 	echo "h1";
// 	$sql = "insert into data (`userid`,`name`,`favourite`,`type`) values ('{$_SESSION['userid']}','{$filename}','0','1')";
// 	if (query_ddl($conn, $sql) != 0)
// 		{
// 		echo "h2";
// 		$sql = "select dataid from `data` where name ='{ $filename}'";
// 		$result = query_dml($conn, $sql);
// 		echo "h3";
// 		$ans = $result->fetch_assoc();
// 		$dataid = $ans["dataid"];
// 		$break_id = get_breakdown($url);
// 		echo "h4";

// 		//  $sql="insert into `data_details` (`dataid`,`breakdown_id`)values('{$dataid}','{$break_id}')";
// 		//  $val=query_ddl($conn,$sql);

// 		if ($val == 1)
// 			{
// 			echo "<h4>success</h4>.{$dataid}";
// 			}
// 		  else
// 			{
// 			echo "<h4>Upload failed try again with different named file</h4>";
// 			close_connection($conn);
// 			exit;
// 			}
// 		}
// 	  else
// 		{
// 		echo "<h4>Upload failed try again with different named file</h4>";
// 		close_connection($conn);
// 		exit;
// 		}

// 	close_connection($conn);
	}