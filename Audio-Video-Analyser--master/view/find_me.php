
<?php
session_start();

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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
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
.head1
{
    color:white;
    cursor: pointer;
    position:fixed;
    left:500px;
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
div.d{
    padding:20px;
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
    
   width: 700px;
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
#.bg-primary {
    color: #fff;
    background-color:lightcyan; 
}
</style>
<script>
var val;

	function get_data()
	{
	    document.getElementById("submitbutton").disabled="true";
	     document.getElementById("submitbutton").innerHTML="Please wait..";
	    var person = {
searchkey: $("#searchkey").val(),


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
		
			 
//var obj = {"google_ceo_abt_ai.mp4":"{\"indoor\":[[\"00:00:00.0660000\",\"00:00:49\"]],\"ball\":[]}","fm_news.mp4":"{\"indoor\":[[\"00:00:14.1600000\",\"00:00:26.9600000\"],[\"00:00:34.6400000\",\"00:00:37.2000000\"],[\"00:00:57.6800000\",\"00:00:58.9600000\"],[\"00:01:07.9200000\",\"00:01:10.4800000\"]],\"ball\":[]}","microsoft.mp4":"{\"indoor\":[[\"00:00:01.4180000\",\"00:00:26.7770000\"],[\"00:00:32.1150000\",\"00:01:34.8450000\"]],\"ball\":[]}","football.mp4":"{\"indoor\":[[\"00:00:05.3990000\",\"00:00:06.4660000\"]],\"ball\":[[\"00:00:20.3330000\",\"00:00:21.4000000\"],[\"00:01:59.5330000\",\"00:02:00.6000000\"]]}","pichai_new.mp4":"{\"indoor\":[[\"00:00:18\",\"00:00:21.8400000\"],[\"00:00:28.2400000\",\"00:00:30.8000000\"],[\"00:00:37.2000000\",\"00:00:42.3200000\"],[\"00:00:48.7200000\",\"00:00:55.1200000\"],[\"00:01:04.0800000\",\"00:01:13.0400000\"],[\"00:01:20.7200000\",\"00:01:22\"],[\"00:01:28.4000000\",\"00:01:36.0800000\"]],\"ball\":[]}","syria_war.mp3":"{\"indoor\":[],\"ball\":[]}","fcb.mp4":"{\"indoor\":[[\"00:00:56.4000000\",\"00:00:57.6800000\"],[\"00:01:01.5200000\",\"00:01:02.8000000\"],[\"00:01:10.4800000\",\"00:01:11.7600000\"]],\"ball\":[[\"00:00:37.2000000\",\"00:00:38.4800000\"],[\"00:00:42.3200000\",\"00:00:43.6000000\"]]}"}
var videoname="",keyname="",time="";

var keyarr=[],vidarr=[],timearr=[];
for(var x in obj){
var data=JSON.parse(obj[x]);
for(var d in data){
         if(data[d]&&data[d].length!=0){
             timearr.push(data[d][0][0]);
             keyarr.push(d);
             vidarr.push(x);
         }
    }
}
for(var i=0;i<keyarr.length;i++){
    if(vidarr[i]!="A"){
    videoname+='<div class="d"  style="black;background-color:lavender">&nbsp<center><video src="http://www.trendsepc.in/sih2018/public/video/'+vidarr[i]+'" controls preload="metadata" ></video><form action="redirect.php" method="post"><input type="text" name="videoname" value="'+vidarr[i]+'" hidden/><button type="submit" class="btn btn-link">'+vidarr[i]+'</button></form></center><h3 style="color:teal;">Keywords found:<h3><div style="overflow-x: scroll;padding:5px;color:black">'+keyarr[i]+'&nbsp';
    for(var j=0;j<keyarr.length;j++){
        if(i!=j && vidarr[i]==vidarr[j] && vidarr[i]!="A"){
            videoname+=keyarr[j]+'&nbsp';
            vidarr[j]="A";
        }
    }
    videoname+='</div>&nbsp</div><br/>';
    }
}
//videoname+='<div class="bg-primary title">&nbsp<video src="http://www.trendsepc.in/sih2018/public/video/'+x+'" ></video>&nbsp'+d+'&nbsp</div>';
  //           keyname+='<div class="bg-primary title">&nbsp'+d+'&nbsp</div>';
    //        time+='<div class="bg-primary title">&nbsp'+data[d][0][0]+'&nbsp</div>';
if(vidarr.length>0){document.getElementById("video").innerHTML=videoname;}
else{ document.getElementById("video").innerHTML="Sorry! No matches found.."; }
document.getElementById("submitbutton").disabled=false;
	     document.getElementById("submitbutton").innerHTML="Search Keyword";



			 
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
</script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
 <body >
 <div class="navbar navbar-dark bg-primary" role="navigation" style="width:400px text-align:left">
          <div class="navbar-header">
              
             
              
              <a class="navbar-brand head1" href="#">
                  <div class="logo" style="font-size: 40px">
                    Audio Video Analyzer
                  </div>
              </a>
              
          </div>
              
           
          
      </div>
    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
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
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            
            <div class="container" >
                    
                    <div class="row">
                        <div class="col-md-2">
                            </div>
                        <div class="col-md-8">
                            <h3>Please Enter any sentence to search:</h3>
                                <p>
                                <form action="" method="post" align="center" class="form-horizontal">
                                    <input type="text" name="searchkey" id="searchkey" placeholder='Eg:"ball","Life is Beautiful"' class="form-control" required/><br/>
                                    <button type="button" class="btn btn-success" id="submitbutton" onClick="get_data();">Search Keyword</button>
                                </form>
                            </div>
                        <div class="col-md-2">
                            </div>
                    </div><br/>
                    <div class="row pads" >
                  <div class=" pads scrollmenu" style="color:brown;" id="video"></div>
                  
               </div>
               
                             
                
              </div>
			</div>
			
			
		
		
		
           
        <!-- /#page-content-wrapper -->

    </div>
  </body>

</html>




<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<body>-->

<!--<h2>Create Object from JSON String</h2>-->

<!--<p id="demo"></p>-->

<!--<script>-->

<!--var obj = {"google_ceo_abt_ai.mp4":"{\"indoor\":[[\"00:00:00.0660000\",\"00:00:49\"]],\"ball\":[]}","fm_news.mp4":"{\"indoor\":[[\"00:00:14.1600000\",\"00:00:26.9600000\"],[\"00:00:34.6400000\",\"00:00:37.2000000\"],[\"00:00:57.6800000\",\"00:00:58.9600000\"],[\"00:01:07.9200000\",\"00:01:10.4800000\"]],\"ball\":[]}","microsoft.mp4":"{\"indoor\":[[\"00:00:01.4180000\",\"00:00:26.7770000\"],[\"00:00:32.1150000\",\"00:01:34.8450000\"]],\"ball\":[]}","football.mp4":"{\"indoor\":[[\"00:00:05.3990000\",\"00:00:06.4660000\"]],\"ball\":[[\"00:00:20.3330000\",\"00:00:21.4000000\"],[\"00:01:59.5330000\",\"00:02:00.6000000\"]]}","pichai_new.mp4":"{\"indoor\":[[\"00:00:18\",\"00:00:21.8400000\"],[\"00:00:28.2400000\",\"00:00:30.8000000\"],[\"00:00:37.2000000\",\"00:00:42.3200000\"],[\"00:00:48.7200000\",\"00:00:55.1200000\"],[\"00:01:04.0800000\",\"00:01:13.0400000\"],[\"00:01:20.7200000\",\"00:01:22\"],[\"00:01:28.4000000\",\"00:01:36.0800000\"]],\"ball\":[]}","syria_war.mp3":"{\"indoor\":[],\"ball\":[]}","fcb.mp4":"{\"indoor\":[[\"00:00:56.4000000\",\"00:00:57.6800000\"],[\"00:01:01.5200000\",\"00:01:02.8000000\"],[\"00:01:10.4800000\",\"00:01:11.7600000\"]],\"ball\":[[\"00:00:37.2000000\",\"00:00:38.4800000\"],[\"00:00:42.3200000\",\"00:00:43.6000000\"]]}"}-->
<!--for(var x in obj){-->
<!--var data=JSON.parse(obj[x]);-->
<!--for(var d in data)-->
<!--if(data[d]&&data[d].length!=0)-->
<!--console.log(x+" "+d +" "+data[d][0][0])-->

<!--}-->
<!--</script>-->

<!--</body>-->
<!--</html>-->
