<?

    require_once "/home/trendsep/public_html/sih2018/algorithms/source_json_seperator.php";
    require_once "/home/trendsep/public_html/sih2018/algorithms/trancript.php";

   
     function categorize($json, $file_name) {
        $data=json_decode($json,true);
        
        $percent=array();

        $search_array=array();
        $topics=topic_getter($json);
        foreach($topics as $key=>$value) 
            $search_array[]=$key;
        $annotations=annotation_getter($json);
        foreach($annotations as $key=>$value)
            $search_array[]=$key;
        

        $title=array();
    
        $faces=$data["summarizedInsights"]["faces"];
        foreach($faces as $current) {
            if($current["title"]!=null)
                $title[]=$current["title"];
        }
        $search_array=array_merge($search_array,$title);
        $search_array=array_unique($search_array);
        
        
        $lines=json_decode(trans($file_name));
        
		foreach($lines as $line) {
		    
			$cur_line=explode(" ", trim($line[2]));
			foreach($cur_line as $val)
			    $search_array[]=$val;
		}
		
        
        
        $categories=array("entertainment"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/entertainment.txt","business and finance"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/business.txt","election"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/politics.txt","science and technology"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/sci_and_tec.txt","weather"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/weather.txt","sports"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/sports.txt");
        $max_category="general";
        $max=0.1;
        foreach($categories as $category=>$file_name) {
            $cur_count=0;
            
            $tot_words=array();
            $file_handle = fopen($file_name, "r");
            
            while (!feof($file_handle)) {
                 $tot_words[] = trim(strtolower(fgets($file_handle)));
            }
            fclose($file_handle);
            
            foreach($search_array as $cur_word) {
                if($cur_word!=NULL and in_array(strtolower($cur_word),$tot_words)) {
                
                    $cur_count+=1;
                    
                }
            }
            $percent[$category]=$cur_count/count($tot_words)*100;
            if ($max<$cur_count/count($tot_words)*100) {
                $max=$cur_count/count($tot_words)*100;
                $max_category=$category;
                
            }
            
        }
        $sub=array("gst","demonetisation","politics","banking","scheme","technology");
        
        foreach($sub as $val)
            if(in_array($val,$search_array))
                $max_category=$max_category.", ".$val;

        return $max_category;
    }
    
    
    
    
  /* function categorize($json){
         
    
        $data=json_decode($json,true);

        $search_array=topic_getter($json);
        $search_array=array_merge($search_array,annotation_getter($json));
        $title=array();
        
        $faces=$data["summarizedInsights"]["faces"];
        foreach($faces as $current) {
            $title[]=$current["title"];
        }
        
        $search_array=array_merge($search_array,$title);
        $search_array=array_unique($search_array);
               
        
        $categories=array("entertainment"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/entertainment.txt","business"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/business.txt","politics"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/politics.txt","science and technology"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/sci_and_tec.txt","weather"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/weather.txt","sports"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/sports.txt");
        $max_category="general";
        $max=0;
        foreach($categories as $category=>$file_name) {
            $cur_count=0;
            
            $tot_words=array();
            $file_handle = fopen($file_name, "r");

            while (!feof($file_handle)) {
                 $tot_words[] = substr(fgets($file_handle),0,-2);
            }
            fclose($file_handle);
            
            foreach($search_array as $cur_word) {
                
                if($cur_word!=NULL and in_array($cur_word,$tot_words)) {
                
                    $cur_count+=1;
                    
                }
            }
            if ($max<$cur_count) {
                $max=$cur_count;
                $max_category=$category;
            }
            
        }
        
        return $max_category;
    }
    
    
 */
 
 
 //Obtains two json data and provides the comparison and send slike terms and their percentage
		function compare($json1,$json2) {
    $matched=array();
    $match_percent=array();
    $dataa=topic_getter($json1);
    $datab=topic_getter($json2);
    $data1=array();
    $data2=array();
    foreach($dataa as $key=>$val)
        $data1[]=$key;
    foreach($datab as $key=>$val)
        $data2[]=$key;
    $matched["topics"]=array_intersect($data1, $data2);
    $match_percent["topics"]=(count($matched["topics"])/(min(count($data1),count($data2))+0.00001))*100;
    $dataa=annotation_getter($json1);
    $datab=annotation_getter($json2);
    $data1=array();
    $data2=array();
    foreach($dataa as $key=>$val)
      $data1[]=$key;
    foreach($datab as $key=>$val)
      $data2[]=$key;
    $matched["annotations"]=array_intersect($data1,$data2);
    $match_percent["annotations"]=(count($matched["annotations"])/(min(count($data1),count($data2))+0.00001))*100;
    $data1=array();
    $data2=array();
    $faces=json_decode($json1,true);
    $faces=$faces["summarizedInsights"]["faces"];
    foreach($faces as $current) {
      if($current["title"]!=null)
          $data1[]=$current["title"];
      }
    $faces=json_decode($json2,true)["summarizedInsights"]["faces"];
    foreach($faces as $current) {
      if($current["title"]!=null)
        $data2[]=$current["title"];
    }

    $matched["titles"]=array_intersect($data1,$data2);
    $match_percent["titles"]=(count($matched["titles"])/(min(count($data1),count($data2))+0.00001))*100;
    /*
    var_dump($matched);
    echo "\n";
    var_dump($match_percent);
    */
    return json_encode(array($matched,$match_percent));
  }


  //print_r(compare($json1,$json2));

 
//print_r(categorize($json,"fm_news.vtt"));