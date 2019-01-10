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
.head1
{
    color:white;
    cursor: pointer;
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
/*scroll-menu*/ 
         div.scrollmenu {
         overflow: auto;
         white-space: nowrap;
         font-size:13px;
         //color:yellow;
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
         
</style>
<script>
var jsonv;
var faceidjson;
var farr=[];
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
                  <div class="logo" style="font-size: 40px;position:fixed;left:500px;">
                   <b> Audio Video Analyzer</b>
                  </div>
              </a>
              
          </div>
              
           
          
      </div>
    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
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
            
            <div class="container" >
                    
                    <div class="row">
                        <div class="col-md-.5">
                            </div>
                        <div class="col-md-11" style="background-color:#fdffc1">
                            <?php
                                require  "/home/trendsep/public_html/sih2018/service/face_service.php";
                                $video1 = $_POST["video1"];
                                $video2 = $_POST["video2"];
                                $faceid = array();
                                $faceurl = array();
                                $pcount = 0;
                                $personGroupId=split ("\.", $video2);
                                 $videoto=$personGroupId [0];
                                  $personGroupId=split ("\.", $video1);
                                 $videoon=$personGroupId [0];
                                 //echo $videoon;
                                $json = json_decode(persongroupperson_list($videoto),true);
                               //print_r($json);
                                $tot = count((array)$json);
                                //print_r($tot);
                                for($i=0 ; $i<$tot ;$i++,$pcount++){
                                   // print_r($json[$i]);
                                   $tmpface = $json[$i]["persistedFaceIds"];
                                   //$tmpfacecount = count($tmpface);
                                   
                                   $tmpurl = $json[$i]["userData"];
                                   
                                       $faceurl[$pcount]=$tmpurl;
                                       //print_r($tmpurl);
                                       $dejson = json_decode(face_detect($tmpurl));
                                       //print_r($dejson);
                                       
                                       $faceid[$pcount]=$dejson[0]->faceId;
                                       //echo "yes";
                                }
                                // echo "yes";
                               // print_r($faceid);
                                $xst="[";
                                for($i=0 ; $i <$pcount-1 ;$i++){
                                    $xst=$xst .'"'. $faceid[$i].'",';
                                }
                                $xst= $xst .'"'.$faceid[$pcount-1].'"';
                                $xst= $xst ."]";
                                
                                $vidpara ='{
                                            "PersonGroupId": "'.$videoon.'",
                                            "faceIds": '.$xst.',
                                            "maxNumOfCandidatesReturned": 100,
                                            "confidenceThreshold": 0.6
                                        }';
                                //echo $vidpara;
                                $tjs = json_decode(face_identify($vidpara));
                                                                echo '<script>faceidjson = '.$tjs.';</script>';

                               // echo "<script>faceidjson = ".$tjs.";</script>";
                                //print_r($tjs);
                                $tot = count((array)$tjs);
                                for($i=0 ; $i <$tot ;$i++){
                                    $innera = $tjs[$i]->candidates;
                                    if(count($innera)>0){
                                       // print_r($tjs[$i]->faceId);
                                        for($j =0;$j<$pcount ;$j++){
                                            
                                            if($tjs[$i]->faceId == $faceid[$j]){
                                                echo '<script>farr.push("'.$faceurl[$j].'");</script>';
                                                break;
                                            }
                                                //echo $innera[0]->personId."  second   ". $faceid[$j]."   done  ";
                                                   
                                               
                                        }
                                        
                                    }
                                    
                                        //for($j =0;$j<$pcount ;$j++){
                                            
                                           //     echo $innera[0]->personId."  second   ". $faceid[$j]."   done  ";
                                                   
                                               
                                       // }
                    
                                    //echo '<script>farr.push("'.$innera[0]->personId.'");</script>';//$innera[0]->personId;
                                }
                                
                            
                            ?>
                                <div class="row text-center" style="background-color:#70757c;">
                                <h3 style="color:white"><b>The Common features in the videos are:</b></h3>
                                    <div class="col-md-6">
                                        <video src="http://www.trendsepc.in/sih2018/public/video/<?php echo $_POST['video1'];?>" controls></video>
                                    </div>
                                    <div class="col-md-6" >
                                        <video src="http://www.trendsepc.in/sih2018/public/video/<?php echo $_POST['video2'];?>" controls></video>
                                    </div>
                                </div>
                                <br/>
                                <?php
                                require '/home/trendsep/public_html/sih2018/temp/service.php';
                                require '/home/trendsep/public_html/sih2018/algorithms/video_catagoriser.php';
                                $breakdown1=$_POST["breakdown1"];
                                $breakdown2=$_POST["breakdown2"];
                                $json1=breakdown_id_to_json($breakdown1);
                                $json2=breakdown_id_to_json($breakdown2);
                                $rjson = compare($json1,$json2);
                           //     print_r($rjson);
                                //print_r($json2);
                                echo '<script>jsonv = '.$rjson.';</script>';
                                //print_r($rjson);
                                ?>
                                
                                <div class="row pads">
                  <h4 style="color:#475c77;"><b><i>Faces matching:</i></b></h4>
                  <div class=" pads scrollmenu" id="faces"><div class="alert alert-warning"><b>No match found </b></div> </div>
               </div>
                                
                                <div class="row pads" >
                  <h4 style="color:#475c77;"><b><i>Keywords:</i></b></h4>
                  <div class=" pads scrollmenu" id="title" > <div class="alert alert-warning"><b>No match found </b></div></div>
               </div>
                                    <div class="row pads" >
                  <h4 style="color:#475c77;"><b><i>Objects:</i></b></h4>
                  <div class=" pads scrollmenu" id="anno"><div class="alert alert-warning">No match found </div> </div>
               </div>
                                    <div class="row pads" >
                  <h4 style="color:#475c77;"><b><i>Topics:</i></b></h4>
                  <div class=" pads scrollmenu" id="topics"><div class="alert alert-warning">No match found </div> </div>
               </div>
               <h4 style="color:#475c77;"><b><i>Percentage of matching in keywords:</i></b></h4>
               <div class="progress">
                 <div class="progress-bar" role="progressbar" id="progresstitles" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:70%">  70%  </div>
</div>
      
      <h4 style="color:#475c77;"><b><i>Percentage of matching in objects:</i></b></h4>
               <div class="progress">
                 <div class="progress-bar" role="progressbar" id="progressanno" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:70%">  70%  </div>
</div>
      
      <h4 style="color:#475c77;"><b><i>Percentage of matching in Topics:</i></b></h4>
               <div class="progress">
                 <div class="progress-bar" role="progressbar" id="progresstopics" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:70%">  70%  </div>
</div>                          
<br/>
                                    <script>
                                    //console.log(farr.length);
                                    var obj = jsonv;
                                    
                                    
                                    var topics="",annotations="",titles="",faces="";
                                    
                                    var topic=obj[0]["topics"],
                                    	anno=obj[0]["annotations"],
                                        title=obj[0]["titles"];
                                    
                                    for(var x in topic)
                                    topics+='<div class="bg-primary title">&nbsp'+topic[x]+'&nbsp</div>';
                                    
                                    
                                    for(var y in anno)
                                    annotations+='<div class="bg-primary title">&nbsp'+anno[y]+'&nbsp</div>';
                                    
                                    for(var z in title)
                                    titles+='<div class="bg-primary title">&nbsp'+title[z]+'&nbsp</div>';
                                    
                                    for(var v=0;v<farr.length;v++){
                                        //alert(farr[v]);
                                    faces+='<div class="bg-primary title">&nbsp<img src="'+farr[v]+'" class="img-rounded" height="75" width="75"/>&nbsp</div>';
                                   // alert(titles);
                                    }
                                    
                                   if(title!="") document.getElementById("title").innerHTML=titles;
                                    
                                    if(anno!="")document.getElementById("anno").innerHTML=annotations;
                                    
                                    if(topic!="")document.getElementById("topics").innerHTML=topics;
                                    
                                    if(faces!="")document.getElementById("faces").innerHTML=faces;
                                    
                                    document.getElementById("progresstopics").innerHTML= obj[1]["topics"]+"%";
                                    
                                    document.getElementById("progresstopics").style.width= obj[1]["topics"]+"%";
                                    
                                    
                                    document.getElementById("progressanno").innerHTML= obj[1]["annotations"]+"%";
                                    
                                    document.getElementById("progressanno").style.width= obj[1]["annotations"]+"%";
                                    
                                    
                                    document.getElementById("progresstitles").innerHTML= obj[1]["titles"]+"%";
                                    
                                    document.getElementById("progresstitles").style.width= obj[1]["titles"]+"%";
                                    
                                    </script>
                            </div>
                        <div class="col-md-.5">
                        </div>
                     </div>
                             
                
              </div>
			
			
		
		
		
           
        <!-- /#page-content-wrapper -->
</div>
    </div>
    
  </body>

</html>