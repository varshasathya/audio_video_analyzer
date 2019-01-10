<?php
include_once "./HTTP/Request2.php";

// global service key
$GLOBALS["vid_subscription_key"] ="b99be3af54e147b49ee8c6412198fda2";


// Get BreakDown Code + outputjson using url
function get_breakdown($url)	{
    
	$request = new Http_Request2('https://videobreakdown.azure-api.net/Breakdowns/Api/Partner/Breakdowns?name=a&privacy=Public&videoUrl=' . $url . '&language=en-US');
	$url = $request->getUrl();
	$headers = array(
		'Ocp-Apim-Subscription-Key' => $GLOBALS["vid_subscription_key"]  ,
	);
	$request->setHeader($headers);
	$request->setMethod(HTTP_Request2::METHOD_POST);
	try{
		$response = $request->send();
		return substr($response->getBody(),1,-1);
		}catch(HttpException $ex)	{
		//echo $ex;
        exit;
		}
    
	}
	
		
//get vtt url using breaskdown

function vtt_getter($breakdown_id,$name){
    echo "getter".$breakdown_id.$name;
$request = new Http_Request2('https://videobreakdown.azure-api.net/Breakdowns/Api/Partner/Breakdowns/'.$breakdown_id.'/VttUrl?language=English');
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
   //return $response->getBody();
   
   $path="/home/trendsep/public_html/sih2018/public/transcript/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$response->getBody());
        
        $fp = fopen($path.$name.".vtt", 'w+');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_exec ($ch);
        curl_close ($ch);
        fclose($fp);
        return 1;
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
    	'Ocp-Apim-Subscription-Key' => $GLOBALS["vid_subscription_key"] ,
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
    	'Ocp-Apim-Subscription-Key' => $GLOBALS["vid_subscription_key"] ,
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
	      $request = new Http_Request2('https://videobreakdown.azure-api.net/Breakdowns/Api/Partner/Breakdowns/UpdateFaceName/'.$breakdown_id.'?faceId='.$faceid.'&newName='.$new_name);
          $url = $request->getUrl();
          $headers = array(
                // Request headers
                'Ocp-Apim-Subscription-Key' => $GLOBALS["vid_subscription_key"],
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

// print_r (breakdown_id_to_json("c512b6b1f3"));
//breakdown_id_to_json


?>
