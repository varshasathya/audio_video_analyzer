<?php
//Takes name of file and provides the start,end and text in array form/
	function trans($file_name) {
        $path="/home/trendsep/public_html/sih2018/public/transcript/";
		$file_handle = fopen($path.$file_name, "r");
		$count=0;
		fgets($file_handle);
		fgets($file_handle);
		$trans_array=array();
    	while (!feof($file_handle)) {
        	$line=fgets($file_handle);
        	if ($count%3==0) {
        		$data=explode(" --> ", trim($line));
        	}
        	else if($count%3==1) {
        		$data[]=trim($line);
        	}
        	else 
        		$trans_array[]=$data;
        	
        	$count++;


        }
    	
    	fclose($file_handle);
    	return json_encode($trans_array);

	}
	
	
	//print_r(json_encode(trans("fm_news.vtt")));