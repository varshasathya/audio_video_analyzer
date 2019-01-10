<?php
session_start();
        if(!isset($_SESSION["userid"])){
            echo "<script>window.location.href='homepage/index.php';</script>";
        }
        $dataid= $_POST["name"];
        require '../config/config.php';
        require_once '../algorithms/source_json_seperator.php';
        require_once "/home/trendsep/public_html/sih2018/algorithms/video_catagoriser.php";
        require_once '/home/trendsep/public_html/sih2018/temp/service.php';
        
        $conn=connection();
        
        
        $sql="select * from data where dataid={$dataid} and userid={$_SESSION['userid']}";
       // echo $sql;
        $result=query_dml($conn,$sql);
        if($row = mysqli_fetch_assoc($result)) {
                $sql="insert into history (userid,videoname,dataid) values({$row['userid']},'{$row["name"]}',{$row['dataid']})";
                query_ddl($conn,$sql);
        }
        
        
        $sql="select * from data_details where dataid={$dataid}";
        $result=query_dml($conn,$sql);
        if($row = mysqli_fetch_assoc($result)) {
            $breakdown_id =$row["breakdown_id"];
           
        }
        
        
        
        
        
        $sql="select * from data where dataid='{$dataid}'";
                                                              
        $result=query_dml($conn,$sql);
        $date_of_upload="";
       // print_r($result);
        if($row = mysqli_fetch_assoc($result)) {
            $video_name =$row["name"];
            $date_of_upload=$row["uploadtime"];
        }
        
        $sql="select * from visited_table where dataid={$dataid}";
        $result=query_dml($conn,$sql);
        if($row = mysqli_fetch_assoc($result)) {
            $flag =$row["visited"];
           
        }
        if($flag == 0){
             $sql="update visited_table set visited =1 WHERE dataid = {$dataid}";
            $result=query_ddl($conn,$sql);
        }
        
        
        
       $transcript_name=split("\.", $video_name);
        $json_data=breakdown_id_to_json($breakdown_id);
        $catagory=categorize($json_data);
        

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Video Info</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../public/css/bootstrap.min.css">
      <script src="../public/js/jquery.min.js"></script>
      <script src="../public/js/bootstrap.min.js"></script>
      <script src="../public/js/speak.js"></script>

       <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
       
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
         body {
    position: relative;
    overflow-x: hidden;
}
body,
html { height: 100%;}
.nav .open > a, 
.nav .open > a:hover, 
.nav .open > a:focus {background-color: transparent;}

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
            function upload_break()
	{
		    var person = {
		name:$("#file_name").val(),
        }

    var register=JSON.stringify(person);
	
        $.ajax({
            url: 'upload_break.php',
            type: 'post',
		
           
         // dataType: 'json',
		  success: function(data) {
		//alert(data);
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
   </head>
   <body>
       
       <div class="navbar navbar-dark bg-primary" role="navigation" style="width:400px text-align:left;margin-bottom: 0px;">
          <div class="navbar-header">
              
             
              
              <a class="navbar-brand" href="#">
                  <div class="logo" style="font-size: 40px">
                    Audio Video Analyzer
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
        <div id="page-content-wrapper" style="padding-top: 0px;margin-bottom: 0px;">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>

       
       
      <div class="container-fluid" style="padding-top: 0px;">
         <div class="row">
            
            <div class="col-sm-8 sscroll" style="background-color:lavender;">
                             <h4>Catagory: <span class="label label-default"><?=$catagory; ?></span> &nbsp Date of Upload <span class="label label-default"><?=$date_of_upload; ?></span></h4>
                
    
    
               <div class="row" id="video">
                  <video controls="" preload="auto" style="height:550px;width:95%;" autoplay="" crossorigin="anomymous" id="myVideo" class="playr_video">

                     <source src="http://trendsepc.in/sih2018/public/video/<?=trim($video_name);?>"  type="video/mp4">
                     	<track label="English subtitles" kind="subtitles" srclang="en" src="../public/transcript/<?=trim($transcript_name[0]); ?>.vtt" default/>
                     			<!---<track label="hindi subtitles" kind="subtitles" srclang="hi" src="../public/transcript/google_ceo_abt_ai_hindi.vtt" default="">-->

                  </video>
               </div>
               <div class="row" style="max-height:700px;width:100%">
                  <h4 style="margin-bottom: 0px;" >Transcripts:
                  
                  <select id="ddlTarget" >
                    <option value="gu">Gujarati</option>
                    <option value="kn ">Kannada</option>
                    <option value="la ">Latin</option>
                    <option value="ml">Malayalam</option>
                    <option value=""  selected="selected">select lang</option>
                    <option value="en">English</option>
                    <option value="mr">Marathi</option>
                    <option value="pa">Punjabi</option>
                    <option value="ta">Tamil</option>
                    <option value="te">Telugu</option>
                    <option value="ur">Urdu</option>
                    <option value="HI">Hindi</option>
                </select>
                
               
                <!-- the correct one-->
                <!--<input type="button" id="btnTranslate" value="Translate" />-->
                <input type="button" id="btnTranslate" value="Translate" />
                </h4>
                  <div  id="transcript" style="margin-top: 2%;margin-bottom:2%;height: 140px;overflow-y: scroll;color:green;  font-size: 15px; margin-left: 2%;margin-right: 2%;">
                  </div>
                  <div  id="transcript1" style="margin-top: 2%;margin-bottom:2%;height: 140px;overflow-y: scroll;color:green;  font-size: 15px; margin-left: 2%;margin-right: 2%;" hidden>
                  </div>
               </div>
                 
                    <script type="text/javascript">
                   
                                var lang_change;
                                $("#btnTranslate").click(function() {
                                if($("#ddlTarget").val()=="en"){
                                    for(var loop=0;loop<$(".transcriptq").length;loop++){
                                        $('.transcriptq')[loop].innerText=$('.transcriptq1')[loop].innerText;
                                    }
                                }
                                else{
                                for(var loop=0;loop<$(".transcriptq").length;loop++){
                                        
                                        let urlg = "https://translation.googleapis.com/language/translate/v2?key=AIzaSyATsvJs9hBavOSIq6XcPMLMK2MZyYo1Qow";
                                        urlg += "&source=EN";
                                        urlg += "&target=" + $("#ddlTarget").val();
                                        urlg += "&q=" + escape($('.transcriptq1')[loop].innerText);
                                          $.ajax({
                                                     type: "GET",
                                                     url: urlg,
                                                     async: false,
                                                     success: function(data) {
                                                                    $('.transcriptq')[loop].innerText=data["data"]["translations"][0]["translatedText"];
                                                            }
                                                        });
                                                }
                                            }     
                                        });
                               
                 </script>
    
    
            </div>
            <div class="col-sm-4" style="background-color:lavenderblush;">
               <div class="row pads " >
                  <h4>Topics:</h4>
                  <div class=" pads scrollmenu" id="topic"></div>
               </div>
               <div class="row pads" >
                  <h4>Faces:</h4>
                  <div class=" pads scrollmenu" id="faces"></div>
               </div>
               <div class="row pads " >
                  <h4>Annotation:</h4>
                  <div class=" pads scrollmenu" id="annotations"></div>
               </div>
               <div class="row pads " >
                  <h4>Brands:</h4>
                  <div class=" pads scrollmenu" id="brands"></div>
               </div>
               <div class="row pads">
                  <button type="button" class="btn btn-success btn-lg">Statics</button>  
                  <button type="button" class="btn btn-magick btn-lg btn3d" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-download-alt" ></span> Downloads</button>  
               </div>
            </div>
         </div>
         <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">×</button>
                     <h4 class="modal-title">Download Requirements</h4>
                  </div>
                  <div class="modal-body">
                     <div class="[ form-group ]">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="[ form-group ]">
                                 <input type="checkbox" name="fancy-checkbox-default" id="fancy-checkbox-default" autocomplete="off" />
                                 <div class="[ btn-group ]">
                                    <label for="fancy-checkbox-default" class="[ btn btn-default ]">
                                    <span class="[ glyphicon glyphicon-ok ]"></span>
                                    <span> </span>
                                    </label>
                                    <label for="fancy-checkbox-default" class="[ btn btn-default active ]" id="check_style">
                                    Select all
                                    </label>
                                 </div>
                              </div>
                              <div class="[ form-group ]">
                                 <input type="checkbox" name="fancy-checkbox-primary" id="fancy-checkbox-primary" autocomplete="off" />
                                 <div class="[ btn-group ]">
                                    <label for="fancy-checkbox-primary" class="[ btn btn-primary ]">
                                    <span class="[ glyphicon glyphicon-ok ]"></span>
                                    <span> </span>
                                    </label>
                                    <label for="fancy-checkbox-primary" class="[ btn btn-default active ]" id="check_style">
                                    Face Analysis
                                    </label>
                                 </div>
                              </div>
                              <div class="[ form-group ]">
                                 <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" autocomplete="off" />
                                 <div class="[ btn-group ]">
                                    <label for="fancy-checkbox-success" class="[ btn btn-success ]">
                                    <span class="[ glyphicon glyphicon-ok ]"></span>
                                    <span> </span>
                                    </label>
                                    <label for="fancy-checkbox-success" class="[ btn btn-default active ]" id="check_style">
                                    Response rate
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="[ form-group ]" >
                                 <input type="checkbox" name="fancy-checkbox-danger" id="fancy-checkbox-danger" autocomplete="off" />
                                 <div class="[ btn-group ]">
                                    <label for="fancy-checkbox-danger" class="[ btn btn-danger ]">
                                    <span class="[ glyphicon glyphicon-ok ]"></span>
                                    <span> </span>
                                    </label>
                                    <label for="fancy-checkbox-danger" class="[ btn btn-default active ]" id="check_style">
                                    Unselect All
                                    </label>
                                 </div>
                              </div>
                              <div class="[ form-group ]">
                                 <input type="checkbox" name="fancy-checkbox-info" id="fancy-checkbox-info" autocomplete="off" />
                                 <div class="[ btn-group ]">
                                    <label for="fancy-checkbox-info" class="[ btn btn-info ]">
                                    <span class="[ glyphicon glyphicon-ok ]"></span>
                                    <span> </span>
                                    </label>
                                    <label for="fancy-checkbox-info" class="[ btn btn-default active ]" id="check_style">
                                    Emotion Usage
                                    </label>
                                 </div>
                              </div>
                              <div class="[ form-group ]">
                                 <input type="checkbox" name="fancy-checkbox-warning" id="fancy-checkbox-warning" autocomplete="off" />
                                 <div class="[ btn-group ]">
                                    <label for="fancy-checkbox-warning" class="[ btn btn-warning ]">
                                    <span class="[ glyphicon glyphicon-ok ]"></span>
                                    <span> </span>
                                    </label>
                                    <label for="fancy-checkbox-warning" class="[ btn btn-default active ]" id="check_style">
                                    Object Appearence
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         
         
         <div class="row pads" >
                  <h4>Recommended Videos:</h4>
                  <div class=" pads scrollmenu" id="recommendvideos"></div>
               </div>
         
         
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
         
         
         
        
   
      
         //topics
             var node="";//topics=JSON.parse(`{"phone number":[{"startTime":"00:01:02.7100000","endTime":"00:01:05.1000000","startSeconds":62.7,"endSeconds":65.1}],"double room":[{"startTime":"00:04:46.2100000","endTime":"00:04:54.1200000","startSeconds":286.2,"endSeconds":294.1},{"startTime":"00:05:04.2840000","endTime":"00:05:07.4440000","startSeconds":304.3,"endSeconds":307.4}],"room":[{"startTime":"00:02:26.2900000","endTime":"00:02:29.9700000","startSeconds":146.3,"endSeconds":150},{"startTime":"00:04:46.2100000","endTime":"00:04:54.1200000","startSeconds":286.2,"endSeconds":294.1},{"startTime":"00:04:54.1200000","endTime":"00:05:00.0940000","startSeconds":294.1,"endSeconds":300.1},{"startTime":"00:05:04.2840000","endTime":"00:05:07.4440000","startSeconds":304.3,"endSeconds":307.4},{"startTime":"00:06:12.6840000","endTime":"00:06:17.7640000","startSeconds":372.7,"endSeconds":377.8}],"money":[{"startTime":"00:00:11.1600000","endTime":"00:00:15.0200000","startSeconds":11.2,"endSeconds":15},{"startTime":"00:00:51.2500000","endTime":"00:00:54.2200000","startSeconds":51.2,"endSeconds":54.2},{"startTime":"00:03:58.4600000","endTime":"00:04:03.6200000","startSeconds":238.5,"endSeconds":243.6},{"startTime":"00:06:06.4840000","endTime":"00:06:09.8040000","startSeconds":366.5,"endSeconds":369.8},{"startTime":"00:06:23.4840000","endTime":"00:06:24.2140000","startSeconds":383.5,"endSeconds":384.2}]}`);
             var searchdata="";
             var topics=JSON.parse(`<?=json_encode(topic_getter($json_data),true); ?>`);
             for (var iterator in topics) {
                 
                node+='<div class="bg-primary topi" stime="'+topics[iterator][0]["startTime"]+'" style=" cursor: pointer; font-size: 14px; margin-left: 2%;margin-right: 2%;">&nbsp'+iterator+'&nbsp</div>'; 
                //searchdata=searchdata+
                searchdata+=iterator+" ";
                 
             }
            
             $('#topic').append(node);
             classnode=document.getElementsByClassName("topi")
          for (var i = 0; i < classnode.length; i++) {
              classnode[i].addEventListener("click", function(e){
                 x=e;
                 //video current time change
                vid.currentTime=parseFloat(hmsms_to_ms(String(x.target.attributes.stime.value)));
                
            });
          }
         
             
             //face
             node="";
//var face=JSON.parse(`{"Jayalalithaa":{"description":"Jayaram Jayalalithaa was an Indian actress and politician who served six terms as the Chief Minister of Tamil Nadu for over fourteen years between 1991 and 2016.","seenDurationRatio":0.6856423173803526,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/7281c9e6-7c94-438a-8c78-58c7261e4662","id":19617,"confidence":0.9999979734420776,"title":"Indian Politician","appearances":[{"startTime":"00:00:00.0670000","endTime":"00:00:05.0660000","startSeconds":0.1,"endSeconds":5.1},{"startTime":"00:00:22.7660000","endTime":"00:02:52.0660000","startSeconds":22.8,"endSeconds":172.1},{"startTime":"00:03:05.7990000","endTime":"00:03:15.9330000","startSeconds":185.8,"endSeconds":195.9},{"startTime":"00:03:36.0330000","endTime":"00:03:40.8660000","startSeconds":216,"endSeconds":220.9},{"startTime":"00:03:55.8660000","endTime":"00:05:38.7870000","startSeconds":235.9,"endSeconds":338.8}],"seenDuration":272.2},"Unknown #44":{"description":null,"seenDurationRatio":0.18513853904282127,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/6a83dd78-f856-4772-9281-30e62f08db7a","id":9114,"confidence":0,"title":null,"appearances":[{"startTime":"00:00:20.0990000","endTime":"00:00:24.8660000","startSeconds":20.1,"endSeconds":24.9},{"startTime":"00:02:18.4660000","endTime":"00:02:50.1330000","startSeconds":138.5,"endSeconds":170.1},{"startTime":"00:03:17.3990000","endTime":"00:03:30.0330000","startSeconds":197.4,"endSeconds":210},{"startTime":"00:03:46.5330000","endTime":"00:03:53.0660000","startSeconds":226.5,"endSeconds":233.1},{"startTime":"00:04:06.0660000","endTime":"00:04:13.7660000","startSeconds":246.1,"endSeconds":253.8},{"startTime":"00:04:31.1660000","endTime":"00:04:34.5660000","startSeconds":271.2,"endSeconds":274.6},{"startTime":"00:04:46.4330000","endTime":"00:04:53.2330000","startSeconds":286.4,"endSeconds":293.2}],"seenDuration":73.50000000000004},"Unknown #41":{"description":null,"seenDurationRatio":0.05516372795969778,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/011b137b-c5df-48ef-b99c-46ea9c78ee3b","id":5733,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:01.2330000","endTime":"00:02:12.2660000","startSeconds":121.2,"endSeconds":132.3},{"startTime":"00:02:27.5660000","endTime":"00:02:38.3990000","startSeconds":147.6,"endSeconds":158.4}],"seenDuration":21.90000000000002},"Unknown #4":{"description":null,"seenDurationRatio":0.05440806045340056,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/84708501-fcbe-49c3-ab04-7025427e4b48","id":16450,"confidence":0,"title":null,"appearances":[{"startTime":"00:04:28.1990000","endTime":"00:04:49.7990000","startSeconds":268.2,"endSeconds":289.8}],"seenDuration":21.600000000000023},"Unknown #28":{"description":null,"seenDurationRatio":0.052644836272040314,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/35b3c32c-18ba-4791-9249-4e7f6235b89f","id":10128,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:34.9330000","endTime":"00:02:44.8990000","startSeconds":154.9,"endSeconds":164.9},{"startTime":"00:02:57.4660000","endTime":"00:03:08.3990000","startSeconds":177.5,"endSeconds":188.4}],"seenDuration":20.900000000000006},"Unknown #43":{"description":null,"seenDurationRatio":0.04508816120906802,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/159937fc-bd86-4a64-a589-eeb161105c98","id":4442,"confidence":0,"title":null,"appearances":[{"startTime":"00:01:31.6660000","endTime":"00:01:36.8660000","startSeconds":91.7,"endSeconds":96.9},{"startTime":"00:01:50.1990000","endTime":"00:02:02.8990000","startSeconds":110.2,"endSeconds":122.9}],"seenDuration":17.900000000000006},"Unknown #2":{"description":null,"seenDurationRatio":0.031486146095717885,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/1c0d4b79-688f-4b80-b99e-43d2e991e92e","id":4663,"confidence":0,"title":null,"appearances":[{"startTime":"00:00:32.5660000","endTime":"00:00:38.0990000","startSeconds":32.6,"endSeconds":38.1},{"startTime":"00:01:42.6990000","endTime":"00:01:49.6990000","startSeconds":102.7,"endSeconds":109.7}],"seenDuration":12.5},"Unknown #29":{"description":null,"seenDurationRatio":0.029219143576826204,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/107105f4-95a3-4196-bf4b-6711bfd29df2","id":1286,"confidence":0,"title":null,"appearances":[{"startTime":"00:00:09.4990000","endTime":"00:00:14.8990000","startSeconds":9.5,"endSeconds":14.9},{"startTime":"00:00:26.3990000","endTime":"00:00:32.5660000","startSeconds":26.4,"endSeconds":32.6}],"seenDuration":11.600000000000003},"Unknown #45":{"description":null,"seenDurationRatio":0.028715365239294726,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/8b840acc-133a-472a-a346-6769e18ecf4a","id":9049,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:34.8660000","endTime":"00:02:46.2660000","startSeconds":154.9,"endSeconds":166.3}],"seenDuration":11.400000000000006},"Unknown #34":{"description":null,"seenDurationRatio":0.028211586901763196,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/3b70c604-2ffc-4bf9-8096-fdbb1bcf4a5a","id":8299,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:34.9990000","endTime":"00:02:46.2330000","startSeconds":155,"endSeconds":166.2}],"seenDuration":11.199999999999989},"Unknown #17":{"description":null,"seenDurationRatio":0.02745591939546601,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/bf41907d-c72b-4fcd-a6fb-d8f112c6459b","id":7229,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:27.4660000","endTime":"00:02:38.4330000","startSeconds":147.5,"endSeconds":158.4}],"seenDuration":10.900000000000006},"Unknown #24":{"description":null,"seenDurationRatio":0.02720403022670028,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/3c07fb28-8dd2-4444-94af-9ec5218aec5b","id":13391,"confidence":0,"title":null,"appearances":[{"startTime":"00:03:50.0330000","endTime":"00:04:00.8330000","startSeconds":230,"endSeconds":240.8}],"seenDuration":10.800000000000011},"Unknown #27":{"description":null,"seenDurationRatio":0.02670025188916875,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/eef635d8-601f-4184-9b49-8c0f8c83b170","id":10253,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:57.8330000","endTime":"00:03:08.3660000","startSeconds":177.8,"endSeconds":188.4}],"seenDuration":10.599999999999994},"Unknown #35":{"description":null,"seenDurationRatio":0.026448362720403018,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/7aae3ce5-67e9-40a4-b92c-e35061dcbafe","id":1398,"confidence":0,"title":null,"appearances":[{"startTime":"00:00:11.8990000","endTime":"00:00:22.3660000","startSeconds":11.9,"endSeconds":22.4}],"seenDuration":10.499999999999998},"Unknown #26":{"description":null,"seenDurationRatio":0.025944584382871564,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/f5d5d843-e7cb-48a9-ae07-5c4dd2797601","id":7224,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:27.7330000","endTime":"00:02:38.0330000","startSeconds":147.7,"endSeconds":158}],"seenDuration":10.300000000000011},"Unknown #38":{"description":null,"seenDurationRatio":0.025692695214105835,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/f2e1e9c1-802d-4ad0-8ecd-680071a3fc25","id":8213,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:34.7330000","endTime":"00:02:44.8990000","startSeconds":154.7,"endSeconds":164.9}],"seenDuration":10.200000000000017},"Unknown #47":{"description":null,"seenDurationRatio":0.025692695214105766,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/caae8ed2-2039-4459-aab3-f6d3ec2419c8","id":13832,"confidence":0,"title":null,"appearances":[{"startTime":"00:03:57.4990000","endTime":"00:04:07.7330000","startSeconds":237.5,"endSeconds":247.7}],"seenDuration":10.199999999999989},"Unknown #39":{"description":null,"seenDurationRatio":0.02493702770780858,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/32c3cb06-1457-4530-8d60-834927ac340c","id":9881,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:51.3660000","endTime":"00:03:01.3330000","startSeconds":171.4,"endSeconds":181.3}],"seenDuration":9.900000000000006},"Unknown #5":{"description":null,"seenDurationRatio":0.024181360201511393,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/a4a2ee7c-40dd-4dff-8c7f-cb830250cb92","id":16482,"confidence":0,"title":null,"appearances":[{"startTime":"00:04:38.5330000","endTime":"00:04:48.1330000","startSeconds":278.5,"endSeconds":288.1}],"seenDuration":9.600000000000023},"Unknown #37":{"description":null,"seenDurationRatio":0.023677581863979863,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/22250d7d-0ac5-43e4-9f14-ea593ec964d7","id":10108,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:58.9990000","endTime":"00:03:08.3990000","startSeconds":179,"endSeconds":188.4}],"seenDuration":9.400000000000006},"Unknown #25":{"description":null,"seenDurationRatio":0.017884130982367817,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/3baf7405-f976-480f-b75d-ee3e659dbb8e","id":13872,"confidence":0,"title":null,"appearances":[{"startTime":"00:03:57.6660000","endTime":"00:04:04.7660000","startSeconds":237.7,"endSeconds":244.8}],"seenDuration":7.100000000000023},"Unknown #14":{"description":null,"seenDurationRatio":0.017884130982367817,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/3cb58225-aac3-4168-8f42-8f7fc2aa7854","id":15807,"confidence":0,"title":null,"appearances":[{"startTime":"00:04:31.3990000","endTime":"00:04:38.4990000","startSeconds":271.4,"endSeconds":278.5}],"seenDuration":7.100000000000023},"Unknown #42":{"description":null,"seenDurationRatio":0.01788413098236776,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/2776eb6b-52d6-4d6e-99a4-03925fcb78cb","id":2635,"confidence":0,"title":null,"appearances":[{"startTime":"00:00:39.0990000","endTime":"00:00:46.1660000","startSeconds":39.1,"endSeconds":46.2}],"seenDuration":7.100000000000001},"Unknown #40":{"description":null,"seenDurationRatio":0.017632241813602016,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/b3732958-e287-4d8d-8147-3478f33aa5f4","id":6647,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:20.0660000","endTime":"00:02:27.0990000","startSeconds":140.1,"endSeconds":147.1}],"seenDuration":7},"Unknown #53":{"description":null,"seenDurationRatio":0.017632241813602016,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/d40806e9-92c5-4764-a2f9-27c6762f6f33","id":6663,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:20.1660000","endTime":"00:02:27.1990000","startSeconds":140.2,"endSeconds":147.2}],"seenDuration":7},"Unknown #36":{"description":null,"seenDurationRatio":0.017632241813602016,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/3f696b87-775a-4c43-93f5-b2f922eb64f0","id":6693,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:20.3660000","endTime":"00:02:27.3990000","startSeconds":140.4,"endSeconds":147.4}],"seenDuration":7},"Unknown #8":{"description":null,"seenDurationRatio":0.017632241813602016,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/9c66b205-2691-41ac-b987-fe64d0fceea9","id":13110,"confidence":0,"title":null,"appearances":[{"startTime":"00:03:46.3990000","endTime":"00:03:53.4330000","startSeconds":226.4,"endSeconds":233.4}],"seenDuration":7},"Unknown #46":{"description":null,"seenDurationRatio":0.017632241813602016,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/dd8db656-3c92-4536-9e7d-d974c7d89851","id":14691,"confidence":0,"title":null,"appearances":[{"startTime":"00:04:08.8660000","endTime":"00:04:15.8660000","startSeconds":248.9,"endSeconds":255.9}],"seenDuration":7},"Unknown #3":{"description":null,"seenDurationRatio":0.017632241813602016,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/ce10ab05-260d-475c-8f44-ae5e299f5e68","id":18677,"confidence":0,"title":null,"appearances":[{"startTime":"00:05:01.5540000","endTime":"00:05:08.6200000","startSeconds":301.6,"endSeconds":308.6}],"seenDuration":7},"Unknown #10":{"description":null,"seenDurationRatio":0.01738035264483636,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/853b59a5-ff26-4e29-8074-979f42a9bc29","id":15122,"confidence":0,"title":null,"appearances":[{"startTime":"00:04:16.3990000","endTime":"00:04:23.3500000","startSeconds":256.4,"endSeconds":263.3}],"seenDuration":6.900000000000034},"Unknown #33":{"description":null,"seenDurationRatio":0.017380352644836214,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/6f2854c1-dbc2-47b4-bd16-5ac9c7f6a681","id":15308,"confidence":0,"title":null,"appearances":[{"startTime":"00:04:20.5660000","endTime":"00:04:27.4990000","startSeconds":260.6,"endSeconds":267.5}],"seenDuration":6.899999999999977},"Unknown #12":{"description":null,"seenDurationRatio":0.016876574307304756,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/ce1c96fd-595f-4346-85a3-bea10af31435","id":16827,"confidence":0,"title":null,"appearances":[{"startTime":"00:04:46.6990000","endTime":"00:04:53.3990000","startSeconds":286.7,"endSeconds":293.4}],"seenDuration":6.699999999999989},"Unknown #13":{"description":null,"seenDurationRatio":0.016624685138539066,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/579f032c-faf1-4a09-93c4-c37fd8928af8","id":5312,"confidence":0,"title":null,"appearances":[{"startTime":"00:01:54.0990000","endTime":"00:02:00.6990000","startSeconds":114.1,"endSeconds":120.7}],"seenDuration":6.6000000000000085},"Unknown #15":{"description":null,"seenDurationRatio":0.0163727959697733,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/fd29ce4f-0733-40a1-a81c-664b3939e50a","id":6758,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:20.9330000","endTime":"00:02:27.3990000","startSeconds":140.9,"endSeconds":147.4}],"seenDuration":6.5},"Unknown #51":{"description":null,"seenDurationRatio":0.0163727959697733,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/b9efc854-ef3b-45c0-b3d3-40a1478016ea","id":14920,"confidence":0,"title":null,"appearances":[{"startTime":"00:04:12.9990000","endTime":"00:04:19.4660000","startSeconds":253,"endSeconds":259.5}],"seenDuration":6.5},"Unknown #21":{"description":null,"seenDurationRatio":0.0163727959697733,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/9365a9d3-440a-43e7-b4d5-427cf94b99c7","id":15514,"confidence":0,"title":null,"appearances":[{"startTime":"00:04:28.2660000","endTime":"00:04:34.8330000","startSeconds":268.3,"endSeconds":274.8}],"seenDuration":6.5},"Unknown #11":{"description":null,"seenDurationRatio":0.01612090680100757,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/a540dff4-3de4-49c5-bd7e-4a09899f4869","id":5321,"confidence":0,"title":null,"appearances":[{"startTime":"00:01:54.2660000","endTime":"00:02:00.7330000","startSeconds":114.3,"endSeconds":120.7}],"seenDuration":6.400000000000006},"Unknown #49":{"description":null,"seenDurationRatio":0.015113350125944584,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/bac0cf66-dded-48bb-8563-154e1592a138","id":1755,"confidence":0,"title":null,"appearances":[{"startTime":"00:00:19.7330000","endTime":"00:00:25.6990000","startSeconds":19.7,"endSeconds":25.7}],"seenDuration":6},"Unknown #48":{"description":null,"seenDurationRatio":0.014861460957178838,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/01831910-a74e-4feb-9c83-45a601063fb8","id":1611,"confidence":0,"title":null,"appearances":[{"startTime":"00:00:20.0990000","endTime":"00:00:25.9990000","startSeconds":20.1,"endSeconds":26}],"seenDuration":5.899999999999999},"Mamata Banerjee":{"description":"Mamata Banerjee is a poet, painter, miscellanist and an Indian politician who has been the 8th Chief Minister of West Bengal since 2011. She is the first woman to hold the office. She founded the party All India Trinamool Congress in 1997 after separating from the Indian National Congress, and \u2026","seenDurationRatio":0.014609571788413126,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/c4c71204-cf63-45a4-9aa1-4f52e1a5467a","id":17504,"confidence":0.9941828846931458,"title":"Former Minister of Railways","appearances":[{"startTime":"00:04:54.2990000","endTime":"00:05:00.0660000","startSeconds":294.3,"endSeconds":300.1}],"seenDuration":5.800000000000011},"Unknown #18":{"description":null,"seenDurationRatio":0.014357682619647327,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/a671a626-9043-40fd-ae8c-c5ebe8a1522b","id":16794,"confidence":0,"title":null,"appearances":[{"startTime":"00:04:46.5660000","endTime":"00:04:52.3330000","startSeconds":286.6,"endSeconds":292.3}],"seenDuration":5.699999999999989},"Unknown #20":{"description":null,"seenDurationRatio":0.014105793450881598,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/662e5490-99ab-4ea3-9300-2755f41e9e28","id":12225,"confidence":0,"title":null,"appearances":[{"startTime":"00:03:24.4400000","endTime":"00:03:30.0330000","startSeconds":204.4,"endSeconds":210}],"seenDuration":5.599999999999994},"Unknown #22":{"description":null,"seenDurationRatio":0.014105793450881527,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/7c020844-a4c3-49ec-8e10-8caee5134f98","id":16116,"confidence":0,"title":null,"appearances":[{"startTime":"00:04:38.8330000","endTime":"00:04:44.3660000","startSeconds":278.8,"endSeconds":284.4}],"seenDuration":5.599999999999966},"Unknown #30":{"description":null,"seenDurationRatio":0.014105793450881527,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/30ac80a2-c980-40b4-b5ad-3cb49771f2b3","id":18696,"confidence":0,"title":null,"appearances":[{"startTime":"00:05:01.8210000","endTime":"00:05:07.4200000","startSeconds":301.8,"endSeconds":307.4}],"seenDuration":5.599999999999966},"Unknown #32":{"description":null,"seenDurationRatio":0.013853904282115869,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/205b99f7-9eb6-4872-a57f-e516423d2f6e","id":6186,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:08.7990000","endTime":"00:02:14.2660000","startSeconds":128.8,"endSeconds":134.3}],"seenDuration":5.5},"Unknown #52":{"description":null,"seenDurationRatio":0.013853904282115869,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/2a2cf3bd-b6d7-45ca-a0cd-28a6c9641e6f","id":12197,"confidence":0,"title":null,"appearances":[{"startTime":"00:03:24.5330000","endTime":"00:03:29.9990000","startSeconds":204.5,"endSeconds":210}],"seenDuration":5.5},"Unknown #16":{"description":null,"seenDurationRatio":0.013853904282115869,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/32cd4be6-ef89-4f1a-b68a-c317576e8dcd","id":14393,"confidence":0,"title":null,"appearances":[{"startTime":"00:04:05.3330000","endTime":"00:04:10.8330000","startSeconds":245.3,"endSeconds":250.8}],"seenDuration":5.5},"Unknown #7":{"description":null,"seenDurationRatio":0.012846347607052954,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/3617a8c1-4a38-44e6-897e-3b029790166c","id":16786,"confidence":0,"title":null,"appearances":[{"startTime":"00:04:47.9660000","endTime":"00:04:53.0660000","startSeconds":288,"endSeconds":293.1}],"seenDuration":5.100000000000023},"Unknown #31":{"description":null,"seenDurationRatio":0.012090680100755624,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/723fb77e-8024-4a6d-910e-d4f1272e789c","id":9068,"confidence":0,"title":null,"appearances":[{"startTime":"00:02:43.3990000","endTime":"00:02:48.2330000","startSeconds":163.4,"endSeconds":168.2}],"seenDuration":4.799999999999983},"Unknown #19":{"description":null,"seenDurationRatio":0.011838790931989895,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/4dd81afb-6b9a-406b-8f10-c6b733a73963","id":18514,"confidence":0,"title":null,"appearances":[{"startTime":"00:05:00.1210000","endTime":"00:05:04.8200000","startSeconds":300.1,"endSeconds":304.8}],"seenDuration":4.699999999999989},"Unknown #9":{"description":null,"seenDurationRatio":0.011838790931989895,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/aa889671-f640-4ab4-ba5a-d09aac16b13f","id":20054,"confidence":0,"title":null,"appearances":[{"startTime":"00:05:36.6870000","endTime":"00:05:41.3530000","startSeconds":336.7,"endSeconds":341.4}],"seenDuration":4.699999999999989},"Unknown #54":{"description":null,"seenDurationRatio":0.011083123425692697,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/6c651c22-5503-4766-9647-9152891bce74","id":1150,"confidence":0,"title":null,"appearances":[{"startTime":"00:00:05.0660000","endTime":"00:00:09.4990000","startSeconds":5.1,"endSeconds":9.5}],"seenDuration":4.4},"Unknown #23":{"description":null,"seenDurationRatio":0.008312342569269522,"thumbnailFullUrl":"https:\/\/www.videoindexer.ai\/api\/Thumbnail\/86a059e4d2\/f9a9e1c0-20a4-4656-933b-a96e122b2ad5","id":1960,"confidence":0,"title":null,"appearances":[{"startTime":"00:00:21.3990000","endTime":"00:00:24.6990000","startSeconds":21.4,"endSeconds":24.7}],"seenDuration":3.3000000000000007}}`);
         var face=JSON.parse(`<?=json_encode(face_image_getter($json_data),true);?>`);
             for (var iterator in face) {
                       node+=`<div> <img src="`+face[iterator]["thumbnailFullUrl"]+`"class="img-circle face" style="cursor: pointer;" stime="`+face[iterator]["appearances"][0]["startTime"]+`"alt="No Preview Found" width="120" height="120"> <form  method="POST">
         <input style="font-size:14px;" type="text" name="facename" value="`+iterator+`"> 
         <input type="text" name="id" value="`+face[iterator]["id"]+`" hidden="">  
         <input type="text" name="breakdown" value="<?=$breakdown_id; ?>" hidden="">
         <input type="submit"  value="Submit">
         </form></img></div>`;
                      // console.log(face[iterator]["appearances"][0])
             }
             
            $('#faces').append(node);
             
              classnode=document.getElementsByClassName("face")
          for (var i = 0; i < classnode.length; i++) {
              classnode[i].addEventListener("click", function(e){
                 x=e;
                 //video current time change
                vid.currentTime=parseFloat(hmsms_to_ms(String(x.target.attributes.stime.value)));
                
            });
          }
          
          
          
          
          
          
         
             //annotations 
             node="";
            //  var anno=JSON.parse(`{"person":[{"startTime":"00:00:00.0660000","endTime":"00:00:05.4000000","startSeconds":0.1,"endSeconds":5.4},{"startTime":"00:00:13.9330000","endTime":"00:00:17.1330000","startSeconds":13.9,"endSeconds":17.1},{"startTime":"00:00:21.3990000","endTime":"00:00:25.6660000","startSeconds":21.4,"endSeconds":25.7},{"startTime":"00:00:28.8660000","endTime":"00:00:40.6000000","startSeconds":28.9,"endSeconds":40.6},{"startTime":"00:00:49.1330000","endTime":"00:01:04.0660000","startSeconds":49.1,"endSeconds":64.1},{"startTime":"00:01:07.2660000","endTime":"00:01:26.4660000","startSeconds":67.3,"endSeconds":86.5},{"startTime":"00:01:33.9330000","endTime":"00:02:23","startSeconds":93.9,"endSeconds":143},{"startTime":"00:02:30.4660000","endTime":"00:02:36.8660000","startSeconds":150.5,"endSeconds":156.9},{"startTime":"00:02:45.3990000","endTime":"00:03:36.6000000","startSeconds":165.4,"endSeconds":216.6},{"startTime":"00:03:41.9330000","endTime":"00:04:26.7330000","startSeconds":221.9,"endSeconds":266.7},{"startTime":"00:04:29.9330000","endTime":"00:05:37.4540000","startSeconds":269.9,"endSeconds":337.5}],"indoor":[{"startTime":"00:00:25.6660000","endTime":"00:00:27.8000000","startSeconds":25.7,"endSeconds":27.8},{"startTime":"00:00:59.7990000","endTime":"00:01:00.8660000","startSeconds":59.8,"endSeconds":60.9},{"startTime":"00:01:47.7990000","endTime":"00:01:48.8660000","startSeconds":107.8,"endSeconds":108.9},{"startTime":"00:02:03.7990000","endTime":"00:02:07","startSeconds":123.8,"endSeconds":127},{"startTime":"00:03:14.1990000","endTime":"00:03:19.5330000","startSeconds":194.2,"endSeconds":199.5},{"startTime":"00:03:26.9990000","endTime":"00:03:28.0660000","startSeconds":207,"endSeconds":208.1},{"startTime":"00:04:04.3330000","endTime":"00:04:07.5330000","startSeconds":244.3,"endSeconds":247.5},{"startTime":"00:04:22.4660000","endTime":"00:04:26.7330000","startSeconds":262.5,"endSeconds":266.7},{"startTime":"00:04:29.9330000","endTime":"00:04:33.1330000","startSeconds":269.9,"endSeconds":273.1},{"startTime":"00:04:41.6660000","endTime":"00:04:52.3330000","startSeconds":281.7,"endSeconds":292.3},{"startTime":"00:05:04.3870000","endTime":"00:05:15.0540000","startSeconds":304.4,"endSeconds":315.1},{"startTime":"00:05:19.3200000","endTime":"00:05:21.4540000","startSeconds":319.3,"endSeconds":321.5},{"startTime":"00:05:24.6530000","endTime":"00:05:37.4540000","startSeconds":324.7,"endSeconds":337.5}],"standing":[{"startTime":"00:00:22.4660000","endTime":"00:00:24.6000000","startSeconds":22.5,"endSeconds":24.6},{"startTime":"00:00:28.8660000","endTime":"00:00:37.4000000","startSeconds":28.9,"endSeconds":37.4},{"startTime":"00:01:56.3330000","endTime":"00:01:59.5330000","startSeconds":116.3,"endSeconds":119.5},{"startTime":"00:02:08.0660000","endTime":"00:02:11.2660000","startSeconds":128.1,"endSeconds":131.3},{"startTime":"00:02:30.4660000","endTime":"00:02:36.8660000","startSeconds":150.5,"endSeconds":156.9},{"startTime":"00:02:51.7990000","endTime":"00:02:59.2660000","startSeconds":171.8,"endSeconds":179.3},{"startTime":"00:03:30.1990000","endTime":"00:03:33.4000000","startSeconds":210.2,"endSeconds":213.4},{"startTime":"00:04:00.0660000","endTime":"00:04:03.2660000","startSeconds":240.1,"endSeconds":243.3},{"startTime":"00:04:07.5330000","endTime":"00:04:10.7330000","startSeconds":247.5,"endSeconds":250.7},{"startTime":"00:04:22.4660000","endTime":"00:04:25.6660000","startSeconds":262.5,"endSeconds":265.7},{"startTime":"00:04:53.3990000","endTime":"00:04:55.5330000","startSeconds":293.4,"endSeconds":295.5},{"startTime":"00:05:00.1200000","endTime":"00:05:03.3200000","startSeconds":300.1,"endSeconds":303.3},{"startTime":"00:05:23.5870000","endTime":"00:05:28.9200000","startSeconds":323.6,"endSeconds":328.9},{"startTime":"00:05:32.1200000","endTime":"00:05:37.4540000","startSeconds":332.1,"endSeconds":337.5}],"posing":[{"startTime":"00:00:00.0660000","endTime":"00:00:05.4000000","startSeconds":0.1,"endSeconds":5.4},{"startTime":"00:00:21.3990000","endTime":"00:00:24.6000000","startSeconds":21.4,"endSeconds":24.6},{"startTime":"00:01:01.9330000","endTime":"00:01:03","startSeconds":61.9,"endSeconds":63},{"startTime":"00:01:54.1990000","endTime":"00:01:59.5330000","startSeconds":114.2,"endSeconds":119.5},{"startTime":"00:02:08.0660000","endTime":"00:02:14.4660000","startSeconds":128.1,"endSeconds":134.5},{"startTime":"00:02:30.4660000","endTime":"00:02:36.8660000","startSeconds":150.5,"endSeconds":156.9},{"startTime":"00:02:45.3990000","endTime":"00:02:48.6000000","startSeconds":165.4,"endSeconds":168.6},{"startTime":"00:02:52.8660000","endTime":"00:02:59.2660000","startSeconds":172.9,"endSeconds":179.3},{"startTime":"00:03:26.9990000","endTime":"00:03:29.1330000","startSeconds":207,"endSeconds":209.1},{"startTime":"00:04:07.5330000","endTime":"00:04:10.7330000","startSeconds":247.5,"endSeconds":250.7},{"startTime":"00:04:14.9990000","endTime":"00:04:18.2000000","startSeconds":255,"endSeconds":258.2},{"startTime":"00:05:24.6530000","endTime":"00:05:25.7200000","startSeconds":324.7,"endSeconds":325.7},{"startTime":"00:05:34.2530000","endTime":"00:05:37.4540000","startSeconds":334.3,"endSeconds":337.5}],"man":[{"startTime":"00:02:48.5990000","endTime":"00:02:59.2660000","startSeconds":168.6,"endSeconds":179.3},{"startTime":"00:03:30.1990000","endTime":"00:03:33.4000000","startSeconds":210.2,"endSeconds":213.4},{"startTime":"00:04:00.0660000","endTime":"00:04:03.2660000","startSeconds":240.1,"endSeconds":243.3},{"startTime":"00:04:33.1330000","endTime":"00:04:34.2000000","startSeconds":273.1,"endSeconds":274.2},{"startTime":"00:05:08.6530000","endTime":"00:05:10.7870000","startSeconds":308.7,"endSeconds":310.8}],"outdoor":[{"startTime":"00:01:14.7330000","endTime":"00:01:15.8000000","startSeconds":74.7,"endSeconds":75.8},{"startTime":"00:01:33.9330000","endTime":"00:01:37.1330000","startSeconds":93.9,"endSeconds":97.1},{"startTime":"00:01:48.8660000","endTime":"00:01:53.1330000","startSeconds":108.9,"endSeconds":113.1},{"startTime":"00:02:00.5990000","endTime":"00:02:03.8000000","startSeconds":120.6,"endSeconds":123.8},{"startTime":"00:02:08.0660000","endTime":"00:02:11.2660000","startSeconds":128.1,"endSeconds":131.3}],"group":[{"startTime":"00:00:21.3990000","endTime":"00:00:24.6000000","startSeconds":21.4,"endSeconds":24.6},{"startTime":"00:02:45.3990000","endTime":"00:02:48.6000000","startSeconds":165.4,"endSeconds":168.6},{"startTime":"00:02:59.2660000","endTime":"00:03:00.3330000","startSeconds":179.3,"endSeconds":180.3},{"startTime":"00:03:06.7330000","endTime":"00:03:07.8000000","startSeconds":186.7,"endSeconds":187.8},{"startTime":"00:03:26.9990000","endTime":"00:03:29.1330000","startSeconds":207,"endSeconds":209.1},{"startTime":"00:04:08.5990000","endTime":"00:04:10.7330000","startSeconds":248.6,"endSeconds":250.7},{"startTime":"00:05:21.4530000","endTime":"00:05:22.5200000","startSeconds":321.5,"endSeconds":322.5}],"wall":[{"startTime":"00:00:37.3990000","endTime":"00:00:40.6000000","startSeconds":37.4,"endSeconds":40.6},{"startTime":"00:02:45.3990000","endTime":"00:02:48.6000000","startSeconds":165.4,"endSeconds":168.6},{"startTime":"00:03:26.9990000","endTime":"00:03:29.1330000","startSeconds":207,"endSeconds":209.1},{"startTime":"00:04:01.1330000","endTime":"00:04:03.2660000","startSeconds":241.1,"endSeconds":243.3},{"startTime":"00:04:53.3990000","endTime":"00:04:55.5330000","startSeconds":293.4,"endSeconds":295.5}],"woman":[{"startTime":"00:01:00.8660000","endTime":"00:01:03","startSeconds":60.9,"endSeconds":63},{"startTime":"00:01:33.9330000","endTime":"00:01:37.1330000","startSeconds":93.9,"endSeconds":97.1},{"startTime":"00:02:02.7330000","endTime":"00:02:03.8000000","startSeconds":122.7,"endSeconds":123.8},{"startTime":"00:03:08.8660000","endTime":"00:03:11","startSeconds":188.9,"endSeconds":191},{"startTime":"00:04:03.2660000","endTime":"00:04:07.5330000","startSeconds":243.3,"endSeconds":247.5}],"ceiling":[{"startTime":"00:03:26.9990000","endTime":"00:03:28.0660000","startSeconds":207,"endSeconds":208.1},{"startTime":"00:04:23.5330000","endTime":"00:04:24.6000000","startSeconds":263.5,"endSeconds":264.6},{"startTime":"00:05:03.3200000","endTime":"00:05:07.5870000","startSeconds":303.3,"endSeconds":307.6}],"holding":[{"startTime":"00:00:00.0660000","endTime":"00:00:05.4000000","startSeconds":0.1,"endSeconds":5.4},{"startTime":"00:03:34.4660000","endTime":"00:03:35.5330000","startSeconds":214.5,"endSeconds":215.5}],"clothing":[{"startTime":"00:01:07.2660000","endTime":"00:01:08.3330000","startSeconds":67.3,"endSeconds":68.3},{"startTime":"00:01:23.2660000","endTime":"00:01:26.4660000","startSeconds":83.3,"endSeconds":86.5},{"startTime":"00:05:22.5200000","endTime":"00:05:23.5870000","startSeconds":322.5,"endSeconds":323.6}],"people":[{"startTime":"00:02:47.5330000","endTime":"00:02:48.6000000","startSeconds":167.5,"endSeconds":168.6},{"startTime":"00:03:06.7330000","endTime":"00:03:07.8000000","startSeconds":186.7,"endSeconds":187.8},{"startTime":"00:03:49.3990000","endTime":"00:03:51.5330000","startSeconds":229.4,"endSeconds":231.5}],"crowd":[{"startTime":"00:05:15.0530000","endTime":"00:05:19.3200000","startSeconds":315.1,"endSeconds":319.3}],"tree":[{"startTime":"00:02:08.0660000","endTime":"00:02:11.2660000","startSeconds":128.1,"endSeconds":131.3}],"text":[{"startTime":"00:03:52.5990000","endTime":"00:03:55.8000000","startSeconds":232.6,"endSeconds":235.8}],"cake":[{"startTime":"00:04:30.9990000","endTime":"00:04:33.1330000","startSeconds":271,"endSeconds":273.1}],"young":[{"startTime":"00:05:33.1870000","endTime":"00:05:34.2540000","startSeconds":333.2,"endSeconds":334.3}],"bed":[{"startTime":"00:02:25.1330000","endTime":"00:02:26.2000000","startSeconds":145.1,"endSeconds":146.2}],"white":[{"startTime":"00:02:11.2660000","endTime":"00:02:12.3330000","startSeconds":131.3,"endSeconds":132.3}],"black":[{"startTime":"00:03:56.8660000","endTime":"00:03:57.9330000","startSeconds":236.9,"endSeconds":237.9}],"wedding":[{"startTime":"00:04:03.2660000","endTime":"00:04:04.3330000","startSeconds":243.3,"endSeconds":244.3}],"Black Frames":[{"startTime":"00:01:40.6000000","endTime":"00:01:40.6330000","startSeconds":100.6,"endSeconds":100.6},{"startTime":"00:05:41.2330000","endTime":"00:06:37.2330000","startSeconds":341.2,"endSeconds":397.2}]}
            //  `);
            var anno=JSON.parse(`<?=json_encode(annotation_getter($json_data),true);?>`);
             for (var iterator in anno) {
                       node+='<div class="bg-primary anno" stime="'+anno[iterator][0]["startTime"]+'" style=" cursor: pointer;font-size: 15px; margin-left: 2%;margin-right: 2%;">&nbsp'+iterator+'&nbsp</div>'; 
                            searchdata+=iterator+" ";
                
              }
             
            $('#annotations').append(node);
            classnode=document.getElementsByClassName("anno")
          for (var i = 0; i < classnode.length; i++) {
              classnode[i].addEventListener("click", function(e){
                 x=e;
                 //video current time change
                vid.currentTime=parseFloat(hmsms_to_ms(String(x.target.attributes.stime.value)));
                
            });
          }
         console.log(searchdata);
            
            //brands
            node="";
            //var brands=JSON.parse(`{"Google":["http:\/\/en.wikipedia.org\/wiki\/Google","Google is an American multinational technology company specializing in Internet-related services and products. These include online advertising technologies, search, cloud computing, and software. Most of its profits are derived from AdWords, an online advertising service that places advertising near the list of search results.",[{"startTime":"00:05:30.5040000","endTime":"00:05:40.8240000","startSeconds":330.5,"endSeconds":340.8}]]}`);
            
            var brands=<?=json_encode(brand_link_getter($json_data),true);?>;
             for (var iterator in brands) {
                       node+='<div class="bg-primary bran" stime="'+brands[iterator][2][0]["startTime"]+'" style="cursor: pointer; font-size: 15px; margin-left: 2%;margin-right: 2%;">&nbsp'+iterator+'&nbsp</div>'; 
               
              }
             
            $('#brands').append(node);
             classnode=document.getElementsByClassName("bran")
          for (var i = 0; i < classnode.length; i++) {
              classnode[i].addEventListener("click", function(e){
                 x=e;
                 //video current time change
                vid.currentTime=parseFloat(hmsms_to_ms(String(x.target.attributes.stime.value)));
                
            });
          }
         
            
            
            //transcripts  text_getter
            // node="";
            // var counter=0;
            // //var transcripts=JSON.parse(`[{"content":"Thank God I'm Hey","start_time":"00:00:00","end_time":"00:00:04.6200000","confidence":0.4251497},{"content":"but","start_time":"00:00:04.6200000","end_time":"00:00:05.7700000","confidence":0.6347305},{"content":"it never did tell","start_time":"00:00:05.7700000","end_time":"00:00:07.0100000","confidence":0.66443485},{"content":"us.","start_time":"00:00:07.0100000","end_time":"00:00:07.2500000","confidence":1}]`);
            // var transcripts=JSON.parse(`<?=json_encode(text_getter($json_data),true);?>`);
            
            // for (var iterator in transcripts) {
                
            //           node+='<div class="bg-primary transcriptq trans" stime="'+transcripts[iterator]["start_time"]+'"  etime="'+transcripts[iterator]["end_time"]+'" style=" font-size: 15px; margin-left: 2%;margin-right: 2%;">&nbsp'+transcripts[iterator]["content"]+'&nbsp</div>'; 
            //   counter++;
            //   }
             
            // $('#transcript').append(node);
            
            
            
            
            
             
            //transcripts  text_getter
            node="";
            var counter=0;
            //var transcripts=JSON.parse(`[{"content":"Thank God I'm Hey","start_time":"00:00:00","end_time":"00:00:04.6200000","confidence":0.4251497},{"content":"but","start_time":"00:00:04.6200000","end_time":"00:00:05.7700000","confidence":0.6347305},{"content":"it never did tell","start_time":"00:00:05.7700000","end_time":"00:00:07.0100000","confidence":0.66443485},{"content":"us.","start_time":"00:00:07.0100000","end_time":"00:00:07.2500000","confidence":1}]`);
           <?php require_once "/home/trendsep/public_html/sih2018/algorithms/trancript.php";
             $file_name=$transcript_name[0].".vtt";
                echo "var transcripts=".trans($file_name).";";
            ?>
            var node1="";
            for(var i=0;i<transcripts.length;i++){
                node+='<div class="bg-primary transcriptq trans" stime="'+transcripts[i][0]+'"  etime="'+transcripts[i][1]+'" style="cursor: pointer; font-size: 15px; margin-left: 2%;margin-right: 2%;">&nbsp'+transcripts[i][2]+'&nbsp</div>'; 
                node1+='<div class="bg-primary transcriptq1 trans" stime="'+transcripts[i][0]+'"  etime="'+transcripts[i][1]+'" style="cursor: pointer; font-size: 15px; margin-left: 2%;margin-right: 2%;">&nbsp'+transcripts[i][2]+'&nbsp</div>'; 
              }
            $('#transcript').append(node);
            $('#transcript1').append(node1);
     
           classnode=document.getElementsByClassName("trans")
          for (var i = 0; i < classnode.length; i++) {
              classnode[i].addEventListener("click", function(e){
                 x=e;
                 //video current time change
                vid.currentTime=parseFloat(hmsms_to_ms(String(x.target.attributes.stime.value)));
                responsiveVoice.speak($(this).text(), "UK English Male", {volume: 3});
                //console.log($(this).text());
            });
          }
          
          var recommend="";
          
          
          
          var person = {
searchkey: searchdata,


        }
var register=JSON.stringify(person);
var obj;
console.log(register);
        $.ajax({
            url: 'http://trendsepc.in/sih2018/service/check_find.php',
            type: 'post',
		
           
         // dataType: 'json',
		  success: function(data) {
			  obj =JSON.parse( data);
	recommend+='<div class="videos" style="padding:10px;">';
for(x in obj){
    console.log(x);
    recommend+='<video src="http://www.trendsepc.in/sih2018/public/video/'+  x  +'"></video>';
}		 
recommend+='</div>';




			 
            },
            data: register
        });
		
		console.log("After Ajax");
	document.getElementById("recommendvideos").innerHTML = recommend;
	
	
	
	
          
          
          $('form').on('submit', function(e) {

    var url = "http://trendsepc.in/sih2018/service/name_update.php"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $(this).serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert("Updated"); // show response from the php script.
           },
           error: function(xhr, textStatus, errorThrown){
                    alert('request failed');
                }
    
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
         
       
         
        //document.getElementById("the_id").getAttribute("original-title");
         
         

      </script>
      </div>
   </body>
</html>