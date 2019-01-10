<?php
session_start();?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Video Info</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../public/css/bootstrap.min.css">
      <script src="../public/js/jquery.min.js"></script>
      <script src="../public/js/bootstrap.min.js"></script>
      
       <script src="../public/js/playr.min.js"></script>
       <link rel="stylesheet" href="../public/css/playr.css">
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
         font-size:13px;
         }
         .transcriptq,div.scrollmenu div {
         display: inline-block;
         text-align: center;
         padding: 14px;
         text-decoration: none;
         filter: gray; /* IE6-9 */
         -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
         }
         .transcriptq:hover,div.scrollmenu div:hover {
         filter: none; /* IE6-9 */
         -webkit-filter: grayscale(0); /* Google Chrome, Safari 6+ & Opera 15+ */
         }
         .transcriptq,.sscroll{
         overflow-y: scroll;
         }
         #transcript{width:100%;}
        video {
            max-width: 100%;
            max-height: 100%;
            margin: 0 auto;
            display: block;
            width: 100%;
        }
          </style>
    </head>
<body>

    <div class="container-fluid">
         

        


<?php
require  "/home/trendsep/public_html/sih2018/config/config.php";
$filename=$_FILES["imagefile"]["name"];
$target_dir = "../public/images/";
$target_file = $target_dir . basename($_FILES["imagefile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imagefile"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<script>alert('File is not an image.');</script>";
        echo "<script>window.location.href='http://trendsepc.in/sih2018/temp/grid.php';</script>";
        $uploadOk = 0;
    }
}
//echo "<script>alert('".$imageFileType."');</script>";
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "<script>alert('File is too large.');</script>";
        echo "<script>window.location.href='http://trendsepc.in/sih2018/temp/grid.php';</script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
        echo "<script>window.location.href='http://trendsepc.in/sih2018/temp/grid.php';</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    exit;
 //   echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imagefile"]["tmp_name"], $target_file)) {
    //    echo "The file ". basename( $_FILES["imagefile"]["name"]). " has been uploaded.";
    } else {
         echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
        echo "<script>window.location.href='http://trendsepc.in/sih2018/temp/grid.php';</script>";
        exit;
    }
}
function breakdown_id_to_json($breakdown_id){
	$link = 'https://videobreakdown.azure-api.net/Breakdowns/Api/Partner/Breakdowns/' . $breakdown_id . '?language=en-US';
	$request = new Http_Request2($link);
	$url = $request->getUrl();
	$headers = array(
    	'Ocp-Apim-Subscription-Key' => "b99be3af54e147b49ee8c6412198fda2" ,
	);
	$request->setHeader($headers);
    $request->setMethod(HTTP_Request2::METHOD_GET);
	try	{
	    	$response = $request->send();
		    return $response->getBody();
		}catch(Exception $ex){
		    return $ex;
		}
	}
	$count=0;
$url="http://trendsepc.in/sih2018/public/images/".$filename;
//echo $url;
require '../service/face_service.php';
//require '../service/service.php';
$json = face_detect($url);
$jsonData = json_decode($json,true);
//print_r( $jsonData);
$faceid= $jsonData[0]['faceId'];
//echo $faceid;
$userid = 8;
$conn=connection();
$sql="SELECT * FROM data_details INNER JOIN data ON data.dataid = data_details.dataid and data.userid='{$userid}' and trained_status=1";//SELECT * FROM data_details WHERE trained_status=1";
$result = query_dml($conn,$sql);
if($result!=0){
while($row = mysqli_fetch_assoc($result)) {
    //SELECT * FROM data_details INNER JOIN data ON data.dataid = data_details.dataid and data.userid=8
        $sql="SELECT * FROM data INNER JOIN data_details ON data.dataid = data_details.dataid and data.userid='{$userid}' and data.dataid='{$row[dataid]}'";
        //echo $sql;
        $res = query_dml($conn,$sql);
        while($ro = mysqli_fetch_assoc($res)) {
            $target_file =$ro["name"];
            $personGroupId=split ("\.", $target_file);
             $video_id=$personGroupId [0];
             $stringdata= '{
              "PersonGroupId": "'.$video_id.'",
              "faceIds": [
              "'.$faceid.'"
                         ],
             "maxNumOfCandidatesReturned": 100,
             "confidenceThreshold": 0.5
                    }';
                   $videojson = face_identify($stringdata);
                   $tmp = json_decode($videojson);
                   $k = $tmp[0]->candidates;
                   //print_r($k);
                  $tmpnum = count((array)$k);
                  if($tmpnum>0){echo  '<div class="row">
            <div class="col-md-8" style="background-color:lavender;"><video src="http://trendsepc.in/sih2018/public/video/'.$target_file.'" id="myVideo" controls></video>';
            $count++;
            $fulljson = json_decode(breakdown_id_to_json($row["breakdown_id"]),true);
           
           
            $facearray = $fulljson["summarizedInsights"]["faces"];
            //print_r($facearray[0]["appearances"][0]["startTime"]);
           
                  echo '<style>img{display:inline-block;}</style>';
                  for($iterator=0;$iterator<$tmpnum;$iterator++){
                   $functparam = $k[$iterator]->personId;
                   //echo $video_id;
                   if($functparam!=''){
                  $jsonreturned = json_decode(persongroupperson_get($video_id,$functparam));
                  
                  //$jsonreturned->userData
                  //print_r($jsonreturned->userData);
                  
                  foreach($facearray as $current) {
                      //print_r($current["thumbnailFullUrl"]);
                      if($current["thumbnailFullUrl"]==$jsonreturned->userData){
                          $facetiming = $current["appearances"][0]["startTime"];
                          //print_r($facetiming);
                      }
                  }
                  
                  
                  echo '                                           
                                    <button type="submit" value ="'.$facetiming.'">        <img class="img-circle face" style=" float:left; display:inline" width="100" height="100" src="'.$jsonreturned->userData.'" stime="'.$facearray[0]["appearances"][0]["startTime"].'"></button>';
                   }
                  }
                   //echo '</div>';
                   echo '<br/>';
                   echo '</div>
    <div class="col-md-4" style="background-color:lavenderblush;">
    <h3>video details:</h3>
    <p> Uploaded Image:</p>
    <img class="img-rounded" style=" float:center; display:block" width="150" height="150" src="'.$url.'" />
    <h4> Person Name:'.$facearray[0]["name"].'</h4>
    <h4> Video Name:'.$target_file.'</h4>
    <h4> Start Time:'.$facearray[0]["appearances"][0]["startTime"].'</h4>
    <h4> Persons Duration:'.$facearray[0]["seenDuration"].'s</h4>
    <h4> Confidence:'.$facearray[0]["confidence"].'</h4>
    </div>
    </div><br/>';}
                   
        }
}
}
if($count==0){echo '<h2>Sorry! no match found</h2>';}
?>

    </div>
    
    
    
    
    
    
    
    
    
    <script>
        //time seeker
        var x,classnode;
            var vid = document.getElementById("myVideo");
         
         function ms_to_hmsms(s) {
         var ms = s % 1000;
         s = (s - ms) / 1000;
         var secs = s % 60;
         s = (s - secs) / 60;
         var mins = s % 60;
         var hrs = (s - mins) / 60;
         
         return hrs + ':' + mins + ':' + secs + ':' + ms;
         }
         
          function hmsms_to_ms(s) {
         var time= s.split(":");
         return (parseFloat(time[0])*60*60+parseFloat(time[1])*60+parseFloat(time[2]));
         
         
         }
         classnode=document.getElementsByClassName("face");
        // console.log(classnode);
          for (var i = 0; i < classnode.length; i++) {
              classnode[i].addEventListener("click", function(e){
                 x=e;
                 //video current time change
                 console.log(x.target.attributes.stime.value);
                vid.currentTime=parseFloat(hmsms_to_ms(String(x.target.attributes.stime.value)));
                
            });
          }
         
         
    </script>
    
    
    
    
    </body>
    </html>