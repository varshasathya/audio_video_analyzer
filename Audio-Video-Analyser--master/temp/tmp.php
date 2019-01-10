<?php
if(isset($_FILES['fileToUpload'])){
$target_dir = "upload/";
$target_file = $target_dir.str_replace(" ",'_',basename( $_FILES["fileToUpload"]["name"]));

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])) {
    $check = $_FILES['fileToUpload']['size'];
    if($check !== false) 
        $uploadOk = 1;
    else 
        $uploadOk = 0;
}


$path_parts = pathinfo($_FILES["fileToUpload"]["name"]);
$imageFileType = $path_parts['extension'];
if($imageFileType != "mp4" && $imageFileType != "MP4"  ) 
    $uploadOk = 0;


if ($uploadOk == 0) {
   
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
         //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } 
}

$src="http://trendsepc.in/sih/Sih_Project/Sih/".$target_file;
//echo "raja".$src;

require_once "./x.php";

$apidata= json_decode(breakdown($src));
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>User Home</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../public/css/bootstrap.min.css">
      <script src="../public/js/jquery.min.js"></script>
      <script src="../public/js/bootstrap.min.js"></script>
      <style>
         .pads,#all,#transcript,#video{
         padding-left: 3%;
         padding-top: 3%;
         }
         #check_style{
         background: #ffffff;
         }
         .btn3d {
         position:relative;
         top: -6px;
         border:0;
         transition: all 40ms linear;
         margin-top:10px;
         margin-bottom:10px;
         margin-left:2px;
         margin-right:2px;
         }
         .btn3d:active:focus,
         .btn3d:focus:hover,
         .btn3d:focus {
         -moz-outline-style:none;
         outline:medium none;
         }
         .btn3d:active, .btn3d.active {
         top:2px;
         }
         .btn3d.btn-magick {
         color: #fff;
         box-shadow:0 0 0 1px #9a00cd inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #9823d5, 0 8px 8px 1px rgba(0,0,0,0.5);
         background-color:#bb39d7;
         }
         .btn3d.btn-magick:active, .btn3d.btn-magick.active {
         box-shadow:0 0 0 1px #9a00cd inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
         background-color: #bb39d7;
         }
         .modal-header
         {
         background:#ff3333;
         color:white;
         }
         .form-group input[type="checkbox"] {
         display: none;
         }
         .form-group input[type="checkbox"] + .btn-group > label span {
         width: 20px;
         }
         .form-group input[type="checkbox"] + .btn-group > label span:first-child {
         display: none;
         }
         .form-group input[type="checkbox"] + .btn-group > label span:last-child {
         display: inline-block;   
         }
         .form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
         display: inline-block;
         }
         .form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
         display: none;   
         }
         
         
         
        /*scroll-menu*/ 
         div.scrollmenu {
    overflow: auto;
    white-space: nowrap;
}

div.scrollmenu div {
    display: inline-block;
    text-align: center;
    padding: 14px;
    text-decoration: none;
    
    filter: gray; /* IE6-9 */
  -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */

}

div.scrollmenu div:hover {
     filter: none; /* IE6-9 */
  -webkit-filter: grayscale(0); /* Google Chrome, Safari 6+ & Opera 15+ */
}



      </style>
   </head>
   <body>
      <div class="container-fluid">
         <div class="row">
			<div class="col-sm-6">
							<form action='' method='post' enctype='multipart/form-data' id='form'>
								<div class="form-group">
									<label for="fileToUpload">SUBMIT FILE HERE:</label>
									<input type="file" name='fileToUpload' id="fileToUpload" onchange="uploadFile()" class="form-control" id="email" placeholder="Enter email">
								</div>
								<progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
								<p id="loaded_n_total"></p><br/>
								<p id="status"></p>
								<br/>
								<button id="submit" type="submit" class="btn btn-default submitbtn" id="submit" >Submit & Analyse</button>
							</form>
				<div class="row">
					<?php
					/*$user_id=$_POST["user_id"];
					require 'config.php';
					$conn=mysqli_connect($hostname,$username,$password,$dbname);
					$smt=$conn->prepare("select * from data where userid=?");
					$smt->bind_param('s',$user_id);
					$smt->execute();
					$res=$smt->get_result();
					$c=0;
					while($row=$res->fetch_assoc()){
						
						echo '<div class="col-sm-4"> </div>';
						$c++;
						if($c==3){
							echo '</div><div class="row">';
						}
					}*/
					?>
				</div>
				
				
				
				
				
			</div>
			
			<div class="col-sm-6">
			<video width="800" controls>
                     <source src="http://trendsepc.in/sih/Sih_Project/Sih/upload/alo.mp4" type="video/mp4">
                  </video>
			</div>
		 </div>
		 
		 
		 
	</body>
 </html>