<?php

// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require_once 'HTTP/Request2.php';

function get_sentiment($language,$id,$text)
{
$request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/text/analytics/v2.0/sentiment');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => '50c63350c0f5463e9dee9482997401c2',
);

$request->setHeader($headers);

$parameters = array(
   
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body 
$body= "{
  'documents': [
    {
      'language':'{$language}',
      'id':'{$id}',
      'text':'{$text}'
    }
  ]
}";
echo $body;
$request->setBody($body);

try
{
    $response = $request->send();
    echo $response->getBody();
}
catch (HttpException $ex)
{
    echo $ex;
}
}
//echo get_sentiment("en","helo","helo how are you");


function get_keyphrases($language,$id,$text)
{

// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require_once 'HTTP/Request2.php';

$request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/text/analytics/v2.0/keyPhrases');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => '50c63350c0f5463e9dee9482997401c2',
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$body= "{
  'documents': [
    {
      'language':'{$language}',
      'id':'{$id}',
      'text':'{$text}'
    }
  ]
}";
echo $body;
$request->setBody($body);

try
{
    $response = $request->send();
    echo $response->getBody();
}
catch (HttpException $ex)
{
    echo $ex;
}

}

//echo get_keyphrases("en","helo","gst and  demonitization is started in india");
function detect_language($id,$text)
{

// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require_once 'HTTP/Request2.php';

$request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/text/analytics/v2.0/languages');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => '50c63350c0f5463e9dee9482997401c2',
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
    'numberOfLanguagesToDetect' => '{integer}',
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$body= "{
  'documents': [
    {
      'id':'{$id}',
      'text':'{$text}'
    }
  ]
}";
$request->setBody($body);

try
{
    $response = $request->send();
    echo $response->getBody();
}
catch (HttpException $ex)
{
    echo $ex;
}


}
echo detect_language("helo","helo how are you");

?>