<?php
//header('X-Frame-Options: "ALLOW-FROM https://www.youtube.com"');
//response.setHeader("X-Frame-Options","https://www.youtube.com");
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

video {
    height:340x;
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
function bing_search()
	{
	    var video="";
		    var person = {
		"search_key":$("#search_key").val()
        }
//console.dir(person);}
    var register=JSON.stringify(person);
	console.log(register);
        $.ajax({
            url: 'http://trendsepc.in/sih2018/service/bing_search_api.php',
            type: 'post',
		
           
         // dataType: 'json',
		  success: function(data) {
		console.log(data);
		
		obj =JSON.parse( data);
		//console.log(obj);
	//	var keyarr=[],vidarr=[],timearr=[];
	var dataobj = obj["value"];
	var len = dataobj.length;
	for(var x=0; x< len ;x++){
	    //console.log(dataobj[x]);
	    video+='<div class="col-md-4"><div class="jumbotron" style=" background-color:black;padding-top: 10px;padding-right: 0px;padding-left: 0px;padding-bottom: 0px;margin-bottom: 0px;"><video width="320" height="240" controls>  <source src="'+dataobj[x]["contentUrl"]+'" type="video/mp4"></video><a href="'+dataobj[x]["contentUrl"]+'" style="color:white;">'+dataobj[x]["name"]+'</a></div></div>';
	    if((x+1)%3==0 && x!=0){
	        video+='</div><div class="row">';
	    }
	
	}
	document.getElementById("row").innerHTML=video;
	

// for(var i=0;i<keyarr.length;i++){
//     if(vidarr[i]!="A"){
//     videoname+='<div class="d"  style="black;background-color:lavender">&nbsp<center><video src="'+vidarr[i]+'" controls preload="metadata" ></video><form action="redirect.php" method="post"><input type="text" name="videoname" value="'+vidname[i]+'" hidden/><button type="submit" class="btn btn-link">'+vidarr[i]+'</button></form></center><h3 style="color:teal;">Keywords found:<h3><div style="overflow-x: scroll;padding:5px;color:black">'+keyarr[i]+'&nbsp';
//     for(var j=0;j<keyarr.length;j++){
//         if(i!=j && vidarr[i]==vidarr[j] && vidarr[i]!="A"){
//             videoname+=keyarr[j]+'&nbsp';
//             vidarr[j]="A";
//         }
//     }
//     videoname+='</div>&nbsp</div><br/>';
//     }
// }
//videoname+='<div class="bg-primary title">&nbsp<video src="http://www.trendsepc.in/sih2018/public/video/'+x+'" ></video>&nbsp'+d+'&nbsp</div>';
  //           keyname+='<div class="bg-primary title">&nbsp'+d+'&nbsp</div>';
    //        time+='<div class="bg-primary title">&nbsp'+data[d][0][0]+'&nbsp</div>';
//if(vidarr.length>0){document.getElementById("video").innerHTML=videoname;}
//else{ document.getElementById("video").innerHTML="Sorry! No matches found.."; }
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
  ajax.open("POST", "http://trendsepc.in/sih2018/service/video_upload.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
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
 <div class="navbar navbar-dark bg-primary" role="navigation" style="width:400px text-align:left;">
          <div class="navbar-header">
              
             
              
              <a class="navbar-brand" href="#">
                  <div class="logo" style="font-size: 40px;">
                   <b><i> Audio Video Analyzer</i></b>
                  </div>
              </a>
              
          </div>
      </div>
      <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation" style="padding-left: 0px;
    padding-right: 0px;">
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
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            
            
            <div class="row">
                <div class="col-sm-4"></div>
                        <div class="col-sm-4">            
                            <div id="identitycard"  class="mainbox col-md-12">
                            <div class="panel panel-info" style="background-color:#d0efef;border-radius:10%;">
                                <div class="panel-heading" style="background-color:#757caf;">
                                    <div class="panel-title" style="color:white;"><center><b>Paste the Keyword below:</b></center></div>
                                </div>
                                <div class="panel-body">
                                 
			
					<div class="input-group image-preview">
					    
						<input placeholder="Enter the link here"  style="color:#355140;font-weight:bold;background-color:#ffd8b7;"type="text"  name="search_key" id="search_key" class="form-control image-preview-filename" >
						<!-- don't give a name === doesn't send on POST/GET --> 
					<!-- /input-group image-preview [TO HERE]--> 
					
					<br />
					
				
					<!-- Progress Bar -->
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" id="progressBar"> <span class="sr-only">Please wait...</span> </div>
					</div>
					<h3 id="status"></h3>
					<p id="loaded_n_total"></p>
					<br />
                                                    <button type="button" id="hov" class="btn btn-lg btn-block"  style="border-radius:50px;background-color:#1a4c37" onClick="bing_search();"><b>Submit</b></button>
                                                                                                                                      
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            
                 </div> <div class="col-sm-4"></div>          
            </div></div>
            <div class="row" id="row" align="center">
                  
                  
               </div>
            
            
      </div>
</body>