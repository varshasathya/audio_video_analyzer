<?php
//obtains jason data to provide name and link of that brand in associative array
//return array(name as key => array(link and description) as value)
//access brands directly
function brand_link_getter($json) {
    $brand_link_pair=array();
    
    $data=json_decode($json,true);
    $brands=$data["summarizedInsights"]["brands"];
    foreach((array)$brands as $current) {
        $brand_link_pair[$current["name"]]=array($current["wikiUrl"],$current["description"],$current["appearances"]);
    }

    return $brand_link_pair;
}


//obtains jason data to provide name and photo of that face in associative array
//return array(name as key => link for photo as value)
//access faces directly

function face_image_getter($json) {
    $face_image_pair=array();
    
    $data=json_decode($json,true);
    $faces=$data["summarizedInsights"]["faces"];
    foreach($faces as $current) {
        $face_image_pair[$current["name"]]=array("description"=>$current["description"],"seenDurationRatio"=>$current["seenDurationRatio"],"thumbnailFullUrl"=>$current["thumbnailFullUrl"],"id"=>$current["id"],"confidence"=>$current["confidence"],"title"=>$current["title"],"appearances"=>$current["appearances"],"seenDuration"=>$current["seenDuration"]);
        
    }
    
    return $face_image_pair;
}


//take total json and put the topic into normal array
function topic_getter($json) {
    $topics=array();
    
    $data=json_decode($json,true);
    $topic_data=$data["summarizedInsights"]["topics"];
    foreach((array)$topic_data as $current) {
        $topics[$current["name"]]=$current["appearances"];
    }

    return $topics;
}


//obtains json data to provide annotation in array
//return array(annotation)
//access annotation directly
function annotation_getter($json) {
    
    
    $data=json_decode($json,true);
    $annotation_data=$data["summarizedInsights"]["annotations"];
    foreach((array)$annotation_data as $current) {
        $annotations[$current["name"]]=$current["appearances"];
    }
    
    return $annotations;
}



//takes full json then return associative array constist of text and start end times
function text_getter($json) {
    $text=array();
    
    $data=json_decode($json,true);
    $text_data=$data["breakdowns"][0]["insights"]["transcriptBlocks"][0]["lines"] ;

    for($i=0;$i<count($text_data) ;$i++) {
        $text[$i]["content"]=$text_data[$i]["text"];
        $text[$i]["start_time"]=$text_data[$i]["timeRange"]["start"];
        $text[$i]["end_time"]=$text_data[$i]["timeRange"]["end"];
        $text[$i]["confidence"]=$text_data[$i]["confidence"];
    }
    
    return $text;
} 


//test checking
//print_r(json_encode(text_getter($json),true));




//name and img link getter
function face_image_url_getter($json) {
    $face_image_pair=array();
    
    $data=json_decode($json,true);
    $faces=$data["summarizedInsights"]["faces"];
    foreach($faces as $current) {
        $face_image_pair[$current["name"]]=array("thumbnailFullUrl"=>$current["thumbnailFullUrl"]);
        
    }
    
    return $face_image_pair;
}


?>