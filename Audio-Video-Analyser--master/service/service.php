<?php
require_once "HTTP/Request2.php";
// if(file_exists("HTTP/Request2.php"))
// echo "Hello";
// else
// echo "not available";
// exit;
require_once "/home/trendsep/public_html/sih2018/service/download.php";
//require_once 'HTTP/Request2.php';
// global service key
$GLOBALS["subscription_key"] ="b99be3af54e147b49ee8c6412198fda2";


// // Get BreakDown Code + outputjson using url
function get_breakdown($url)	{
    
	$request = new Http_Request2('https://videobreakdown.azure-api.net/Breakdowns/Api/Partner/Breakdowns?name=a&privacy=Public&videoUrl=' . $url . '&language=en-US');
	$url = $request->getUrl();
	$headers = array(
		'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key"]  ,
	);
	$request->setHeader($headers);
	$request->setMethod(HTTP_Request2::METHOD_POST);
	try{
		$response = $request->send();
		return substr($response->getBody(),1,-1);
		}catch(HttpException $ex)	{
		echo $ex;
        exit;
		}
	}
	
//get vtt url using breaskdown

function vtt_getter($breakdown_id,$name,$lang=1){
    if($lang==1)$lang="English";
$request = new Http_Request2('https://videobreakdown.azure-api.net/Breakdowns/Api/Partner/Breakdowns/'.$breakdown_id.'/VttUrl?language='.$lang);
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key"] ,
);

$request->setHeader($headers);

// $parameters = array(
//     // Request parameters
//     'language' => '{string}',
// );

//$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
//$request->setBody("{body}");

try
{
    $response = $request->send();
 //'/home/trendsep/public_html/sih2018/service/transcripts/' .
// echo $response->getBody();
  download('/home/trendsep/public_html/sih2018/public/transcript/' .$name.'.vtt',substr($response->getBody(), 1, -1));
}
catch (HttpException $ex)
{
    echo $ex;
    return 0;
}

}




// get the processing status using breakdown id
function process($breakdown_id){
	$link = 'https://videobreakdown.azure-api.net/Breakdowns/Api/Partner/Breakdowns/'. $breakdown_id. '/State';
    $request = new Http_Request2($link);
	$url = $request->getUrl();
	$headers = array(
    	'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key"] ,
	);
	$request->setHeader($headers);
	$request->setMethod(HTTP_Request2::METHOD_GET);
    try	{
		$response = $request->send();
		return $response->getBody();
		}catch(HttpException $ex){
		    echo $ex;
		}
	}

// get the data using breakdown id
function breakdown_id_to_json($breakdown_id){
	$link = 'https://videobreakdown.azure-api.net/Breakdowns/Api/Partner/Breakdowns/' . $breakdown_id . '?language=en-US';
	$request = new Http_Request2($link);
	$url = $request->getUrl();
	$headers = array(
    	'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key"] ,
	);
	$request->setHeader($headers);
    $request->setMethod(HTTP_Request2::METHOD_GET);
	try	{
	    	$response = $request->send();
		    return $response->getBody();
		}catch(Exception $ex){
		    return $ex;
		}
	}
	

	
	function face_updation($breakdown_id,$face_id,$new_name){
	      $request = new Http_Request2('https://videobreakdown.azure-api.net/Breakdowns/Api/Partner/Breakdowns/UpdateFaceName/'.$breakdown_id.'?faceId='.$face_id.'&newName='.$new_name);
	      
          $url = $request->getUrl();
          $headers = array(
                // Request headers
                'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key"],
            );
            $request->setHeader($headers);
            $request->setMethod(HTTP_Request2::METHOD_PUT);
            try{
                $response = $request->send();
                return $response->getBody();
            }catch (HttpException $ex){
            return $ex;
        }
    }




?>
