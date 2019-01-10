<?php
// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require_once 'HTTP/Request2.php';
function search_video($search_key){

$request = new Http_Request2('https://api.cognitive.microsoft.com/bing/v7.0/videos/search');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => '148d5a10adb34e79ae37368c0143bf73',
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
    'q' =>$search_key,
    'count' => '10',
    'offset' => '0',
    'mkt' => 'en-us',
    'safeSearch' => 'Moderate',
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
//$request->setBody("{body}");

try
{
    $response = $request->send();
      return $response->getBody();
}
catch (HttpException $ex)
{
    echo $ex;
}
}

$jsonData = json_decode(file_get_contents('php://input'), true);
if($jsonData['search_key']){
    
    echo search_video($jsonData['search_key']);
    //echo $jsonData['search_key'];
}


?>