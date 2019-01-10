<?php
session_start();
require_once "/home/trendsep/public_html/sih2018/service/download.php";
// if (isset($_FILES['file1']))
// 	{
// 	$target_dir = "/home/trendsep/public_html/sih2018/public/video/";
// 	$target_file = $target_dir . str_replace(" ", '_', basename($_FILES["file1"]["name"]));
// 	$uploadOk = 1;
// 	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// 	if (isset($_POST["submit"]))
// 		{
// 		$check = $_FILES['file1']['size'];
// 		if ($check !== false) $uploadOk = 1;
// 		  else $uploadOk = 0;
// 		}

// 	$path_parts = pathinfo($_FILES["file1"]["name"]);
// 	$imageFileType = $path_parts['extension'];
// 	if ($imageFileType != "mp4" && $imageFileType != "MP4") $uploadOk = 0;
// 	if ($uploadOk == 0)
// 		{
// 		    echo "select the correct format";
// 		    exit;
// 		}
// 	  else
// 		{
// 		if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file))
// 			{
//   require "../config/config.php";
// 				$conn = connection();
//   $filename = str_replace(" ", '_',$_FILES["file1"]["name"]);;
// 	$sql = "insert into data (`userid`,`name`,`favourite`,`type`) values ('{$_SESSION['userid']}','{$filename}','0','1')";
// 	if (query_ddl($conn, $sql) != 0)
// 		{
	
//               echo "<h4>Success</h4>";
	
// 		}
// 	  else
// 		{
// 		echo "<h4>Upload failed try again with different named file</h4>";
// 		close_connection($conn);
// 		exit;
// 		}


// 			}
// 			else
// 			{
// 			    echo "upload failed";
// 			    exit;
// 			}
            echo $_FILES["file1"]["tmp_name"]."  ".$target_file;
 //		}


// 	}
echo upload('/home/trendsep/public_html/sih2018/public/video/tmp.mp4',"https://www.youtube.com/watch?v=iEQY_AUeYMo");
