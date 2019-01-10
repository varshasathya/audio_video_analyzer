<?php
session_start();
        if(!isset($_SESSION["userid"])){
            echo "<script>window.location.href='homepage/index.php';</script>";
        }
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Video Audio Analyser</title>

    <!-- Bootstrap core CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Custom fonts for this template -->
    <link href="homepage/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="./homepage/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./homepage/css/creative.min.css" rel="stylesheet">
    
     
<style>
body {
    position: relative;
    overflow-x: hidden;
   
}
body,
html { height: 100%;}
.nav .open > a, 
.nav .open > a:hover, 
.nav .open > a:focus {background-color: transparent;}
#hov
{
    background-color:#ede163;
    color:white;
    font-style:bold;
}
#hov:hover
{
    background-color:#3ea55d;
    color:white;
    font-style:bold;
}


/*-------------------------------*/
/*           Wrappers            */
/*-------------------------------*/

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 220px;
}

#sidebar-wrapper {
    z-index: 1000;
    left: 220px;
    width: 0;
    height: 100%;
    margin-left: -220px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #1a1a1a;
   
}

#sidebar-wrapper::-webkit-scrollbar {
  display: none;
}

#wrapper.toggled #sidebar-wrapper {
    width: 220px;
}

#page-content-wrapper {
    width: 100%;
    padding-top: 70px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -220px;
}

/*-------------------------------*/
/*     Sidebar nav styles        */
/*-------------------------------*/

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 220px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    position: relative; 
    line-height: 20px;
    display: inline-block;
    width: 100%;
}

.sidebar-nav li:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    height: 100%;
    width: 3px;
    background-color: #1c1c1c;
    -webkit-transition: width .2s ease-in;
      -moz-transition:  width .2s ease-in;
       -ms-transition:  width .2s ease-in;
            transition: width .2s ease-in;

}

.sidebar-nav li:hover:before,
.sidebar-nav li.open:hover:before {
    width: 100%;
    -webkit-transition: width .2s ease-in;
      -moz-transition:  width .2s ease-in;
       -ms-transition:  width .2s ease-in;
            transition: width .2s ease-in;

}

.sidebar-nav li a {
    display: block;
    color: #ddd;
    text-decoration: none;
    padding: 10px 15px 10px 30px;    
}

.sidebar-nav li a:hover,
.sidebar-nav li a:active,
.sidebar-nav li a:focus,
.sidebar-nav li.open a:hover,
.sidebar-nav li.open a:active,
.sidebar-nav li.open a:focus{
    color: #fff;
    text-decoration: none;
    background-color: transparent;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 20px;
    line-height: 44px;
}
.sidebar-nav .dropdown-menu {
    position: relative;
    width: 100%;
    padding: 0;
    margin: 0;
    border-radius: 0;
    border: none;
    background-color: #222;
    box-shadow: none;
}

/*-------------------------------*/
/*       Hamburger-Cross         */
/*-------------------------------*/

.hamburger {
  position: fixed;
  top: 20px;  
  z-index: 999;
  display: block;
  width: 32px;
  height: 32px;
  margin-left: 15px;
  background: transparent;
  border: none;
}
.hamburger:hover,
.hamburger:focus,
.hamburger:active {
  outline: none;
}
.hamburger.is-closed:before {
  content: '';
  display: block;
  width: 100px;
  font-size: 14px;
  color: #fff;
  line-height: 32px;
  text-align: center;
  opacity: 0;
  -webkit-transform: translate3d(0,0,0);
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed:hover:before {
  opacity: 1;
  display: block;
  -webkit-transform: translate3d(-100px,0,0);
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom,
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  position: absolute;
  left: 0;
  height: 4px;
  width: 100%;
}
.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom {
  background-color: #1a1a1a;
}
.hamburger.is-closed .hamb-top { 
  top: 5px; 
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed .hamb-middle {
  top: 50%;
  margin-top: -2px;
}
.hamburger.is-closed .hamb-bottom {
  bottom: 5px;  
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed:hover .hamb-top {
  top: 0;
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed:hover .hamb-bottom {
  bottom: 0;
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  background-color: #1a1a1a;
}
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-bottom {
  top: 50%;
  margin-top: -2px;  
}
.hamburger.is-open .hamb-top { 
  -webkit-transform: rotate(45deg);
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
}
.hamburger.is-open .hamb-middle { display: none; }
.hamburger.is-open .hamb-bottom {
  -webkit-transform: rotate(-45deg);
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
}
.hamburger.is-open:before {
  content: '';
  display: block;
  width: 100px;
  font-size: 14px;
  color: #fff;
  line-height: 32px;
  text-align: center;
  opacity: 0;
  -webkit-transform: translate3d(0,0,0);
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-open:hover:before {
  opacity: 1;
  display: block;
  -webkit-transform: translate3d(-100px,0,0);
  -webkit-transition: all .35s ease-in-out;
}
.upload-drop-zone {
  height: 200px;
  border-width: 2px;
  margin-bottom: 20px;
}

/* skin.css Style*/
.upload-drop-zone {
  color: #ccc;
  border-style: dashed;
  border-color: #ccc;
  line-height: 200px;
  text-align: center
}
.upload-drop-zone.drop {
  color: #222;
  border-color: #222;
}

img {
    max-width: 100%;
    max-height: 175px;
    text-align: center;
    margin: 0 auto;
    display: block;
    width: 500px;
}


.image-preview-input {
    position: relative;
    overflow: hidden;
    margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
/*-------------------------------*/
/*            Overlay            */
/*-------------------------------*/

.overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(250,250,250,.8);
    z-index: 1;
}
</style>
<script>
var val;
function upload_break()
	{
	    document.getElementById("hov").disabled=true;
	     document.getElementById("hov").innerHTML="Please Wait ...";
		    var person = {
		name:$("#file_name").val(),
        }

    var register=JSON.stringify(person);
	
        $.ajax({
            url: 'upload_break_for_audio.php',
            type: 'post',
		
           
         // dataType: 'json',
		  success: function(data) {
		alert(data);
		document.getElementById("hov").disabled=false;
	     document.getElementById("hov").innerHTML="Analyze";
		  },
            data: register
        });
		console.log("After Ajax");
	}
$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        //overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
       // overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
 $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });
});
function _(el) {
  return document.getElementById(el);
}

function uploadFile() {
  var file = _("file1").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file1", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler, false);
  ajax.addEventListener("load", completeHandler, false);
  ajax.addEventListener("error", errorHandler, false);
  ajax.addEventListener("abort", abortHandler, false);
  ajax.open("POST", "http://trendsepc.in/sih2018/service/audio_upload.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  ajax.send(formdata);
}

function progressHandler(event) {
  _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar").style.width=Math.round(percent)+"%";
  //_("progressBar").value = Math.round(percent);
  _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
}

function completeHandler(event) {
  _("status").innerHTML = event.target.responseText;
  _("progressBar").value = 0; //wil clear progress bar after successful upload
}

function errorHandler(event) {
  _("status").innerHTML = "Upload Failed";
}

function abortHandler(event) {
  _("status").innerHTML = "Upload Aborted";
}


</script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
 <body >
 <div class="navbar navbar-dark bg-primary" role="navigation" style="width:400px text-align:left">
          <div class="navbar-header">
              
             
              
              <a class="navbar-brand" href="#">
                  <div class="logo" style="font-size: 40px">
                    <b><i class="logo" style="font-size: 40px">
                  <b><i>Audio Video Analyzer</i></b>
                  </div>
              </a>
              
          </div>
              
           
          
      </div>
    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation" style="padding-left: 0px;
    padding-right: 0px;font-size:15px;">
            <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
               
                 <li>
                    <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="user_myvideo.php">My Videos</a>
                </li>
                <li>
                    <a href="user_myaudio.php">My Audio</a>
                </li>
                <li>
                    <a href="user_favourite.php">My Favourite</a>
                </li>

            <li><a href="history.php">History</a>
                </li>
                  
                    <li><a href="#">Compare Videos</a></li>
                    <li><a href="face_detection.php">Face Detection</a></li>
                    <li><a href="find_me.php">Find Me</a></li>
                    <li><a href="http://trendsepc.in/sih2018/view/homepage/index.php">Logout</a></li>
                   
                   
                  
                
              
            </ul>
        </nav>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" >
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            
            <div class="container" >
                <div class="row">
                     <div class="col-md-8" >  
                     <!--- Edited by Visanth-->
                     <div class="row">
                     
                         <?php
                         
                            require '../config/config.php';  
                         // 
                           $conn=connection();
                             
                            $userid=$_SESSION["userid"];
                            $sql="SELECT * FROM data WHERE type = 0 and dataid in (select dataid FROM data_details WHERE processed_state =1)";
                            // echo $sql;
                            $result=query_dml($conn,$sql);
                            $c = 0;
                           //print_r($result);
                            while($row = mysqli_fetch_assoc($result)) {
                                $c+=1;
                                 
                             echo '<div class="col-sm-6">
                                 <div class="jumbotron" style="background-color:black;padding-top: 10px;padding-right: 0px;padding-left: 0px;padding-bottom: 0px;margin-bottom: 0px;" >
                                     <img src="http://trendsepc.in/sih2018/public/img/audio.jpg" alt="User Audio"/>
                                        <form action="audio_analysis.php" align="center" method="post">
                                          <input type="text" name="name" value="'.$row["dataid"].'" hidden/>
                                            <button class="btn btn-link" style="text-align:center;text-decoration:none;color:white;font-weight:bold;" type="submit">'.$row["name"].'</button>
                                        </form>
                                        <button type="submit"  class="btn btn-link "  > <span '; 
                                        
                                        if($row["favourite"]==1){echo 'style="color:gold;"';}
                                        else{echo 'style="color:white;" ';} echo 'class="glyphicon glyphicon-star datak" dataid="'.$row["dataid"].'"> </span>
                                        
                                        </button>
                                  </div></div>';
                                  if($c==2){
                                      echo '</div><br/><div class="row">';
                                      $c=0;
                                  }
                            }
                            ?>
                     </div>
                     
                     
                     
                     
                     
                     
                     </div>
                <div class="col-md-4" >  
                <div id="identitycard"  class="mainbox col-md-12">
                            <div class="panel panel-info" style="background-color:#d0efef;border-radius:10%;">
                                <div class="panel-heading" style="background-color:#757caf;">
                                    <div class="panel-title" style="color:white;"><center><b>Upload Your Video</b></center></div>
                                </div>
                                <div class="panel-body">
                                 
			
					<div class="input-group image-preview">
						<input placeholder="" type="text" style="color:white;font-weight:bold;background-color:#69706b;" name="file_name" id="file_name" class="form-control image-preview-filename" disabled="disabled">
						<!-- don't give a name === doesn't send on POST/GET --> 
						<span class="input-group-btn"> 
						<!-- image-preview-clear button -->
						<button type="button" class="btn btn-default image-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
						<!-- image-preview-input -->
						<div class="btn btn-danger image-preview-input"> <span style="color:white;"class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title"><b style="color:white;">Browse</b></span>
							<input type="file"  name="file1" id="file1" onchange="$('#file_name').val(this.value.split('\\')[2])"/>
							<!-- rename it --> 
						</div>
						
						<button type="button" class="btn btn-labeled btn-warning" onClick="uploadFile();"> <span class="btn-label" style="color:white;"><i class="glyphicon glyphicon-upload"></i> </span><b style="color:white;">Upload</b></button>
						</span> </div>
					<!-- /input-group image-preview [TO HERE]--> 
					
					<br />
					
				
					<!-- Progress Bar -->
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;font-size:25px" id="progressBar"> <span class="sr-only">60% Complete</span> </div>
					</div>
					<h3 id="status"></h3>
					<p id="loaded_n_total" style="font-size:15px"></p>
					<br />
                                                    <button type="button" id="hov" class="btn btn-lg btn-block"  style="border-radius: 50px;" onClick="upload_break()">Analyze</button>
                                                                                                                                      
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>  
                        </div>
                        	<div class="col-md-12">
			

				</div>
			</div>
		</div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
  
  <script>
  //written by salih

    
    //alert("ss");
    
   /* var favourite = {
           
		"dataid":$("#dataid").val(),

        }
        */
        var demo;
        
    classnode=document.getElementsByClassName("datak");
    
          for (var i = 0; i < classnode.length; i++) {
              classnode[i].addEventListener("click", function(e){
                    var tmp=e;
                    var val = tmp["target"]["attributes"][2]["value"];
                    var favourite = {
	                    	"dataid":val,
                          }
                     var fav=JSON.stringify(favourite);
                   
                    ajax_call(tmp,fav)
                    
        
            });
          }
          
	


function ajax_call(tmp,fav){
    //alert(tmp);
    $.ajax({
                            url: 'http://trendsepc.in/sih2018/service/favouritesetter.php',
                            type: 'post',
		
                		  success: function(data) {
                            if(data=="success"){
                                var color = tmp.path[0].attributes[0].value;
                                if(color=="color:gold;"){
                                tmp.path[0].attributes[0].value="color:gray;";
                                }
                                else{
                                    tmp.path[0].attributes[0].value="color:gold;";
                                }
                            }
                            return;
            },
             data: fav
        });

}


</script>
  </body>

</html>
