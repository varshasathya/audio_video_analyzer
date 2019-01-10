<?php
//download need video name without extension and vtt url ,return 1 for success in download 
function download($name,$vtt_url){
   
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$vtt_url);
$fp = fopen($name, 'w+');
curl_setopt($ch, CURLOPT_FILE, $fp);
$con=curl_exec ($ch);
curl_close ($ch);
fclose($fp);

}
//download("guaasdasdasdru.vtt","https://www.videoindexer.ai/Api/Widget/Breakdowns/5358bc1ef2/5358bc1ef2/Vtt?language=English");
   
?>