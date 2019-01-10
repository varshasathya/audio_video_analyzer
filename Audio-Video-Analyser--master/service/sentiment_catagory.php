<?php
//output:  array((percent,sentiment), (percent,sentiment), (percent,sentiment))
function sentiment_progress($json) {
    $json=json_decode($json,true);
    
   $json=$json['json'];
    $length=$json["durationInSeconds"];
    $sentiments=$json["summarizedInsights"]["sentiments"];
    $progress=array();
     foreach($sentiments as $cur) {
        foreach($cur["appearances"] as $time) {
            $progress[]=array($time["startSeconds"],$time["endSeconds"],$cur["sentimentKey"]);
        }
    }
    usort($progress, function($a,$b) {
                if ($a[1]== $b[1]) return 0; 
                    return $a[1] < $b[1] ? -1 : 1;
                });
    $percent=array();
    foreach($progress as $cur) {
        $percent[]=array(($cur[1]-$cur[0])/$length*100,$cur[2]);
    }
   
    return $percent;
    
}

$jsonData = file_get_contents('php://input');
if($jsonData){
   print_r(sentiment_progress($jsonData));
}

//the function returns percentage of  
function sentiment_percent($json) {
    $json=json_decode($json,true);
    $length=$json["durationInSeconds"];
    $sentiments=$json["summarizedInsights"]["sentiments"];
    $progress=array();

    foreach($sentiments as $cur) {
		$progress[$cur["sentimentKey"]]=0;
        foreach($cur["appearances"] as $time) {
            $progress[$cur["sentimentKey"]]+=($time["endSeconds"]-$time["startSeconds"]);
        }
    }

    $percent=array();
    foreach($progress as $cur=>$val) {
        $percent[$cur]=$val/$length*100;
    }

    return $percent;
    
}
?>

