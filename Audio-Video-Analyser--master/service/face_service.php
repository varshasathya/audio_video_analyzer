<?php
// /require_once "/home/trendsep/public_html/sih2018/service/HTTP/Request2.php";
require_once 'HTTP/Request2.php';
// global service key
$GLOBALS["subscription_key_face"] ="66eae5acc8994216b5f07767540e93b0";


function face_detect($link){
    
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/detect');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
    'returnFaceId' => 'true',
    
);// 'returnFaceLandmarks' => 'false',
    // 'returnFaceAttributes' => '{string}',

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);
$data="{'url':'".$link."'}";
// Request body
$request->setBody($data);

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


/*
function find_similar($json){
    
$request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/findsimilars');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody($json);

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

function face_group($json){
    // 
    // {
    // "faceId": "c5c24a82-6845-4031-9d5d-978df9175426",
    // "largeFaceListId": "sample_list",
    // "maxNumOfCandidatesReturned": 10,
    // "mode": "matchPerson"
    // }
    // 
    
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/group');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' =>  $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);


$request->setBody($json);

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



function face_group($json){
    
//     {
//     "faceIds": [
//         "c5c24a82-6845-4031-9d5d-978df9175426",
//         "015839fb-fbd9-4f79-ace9-7675fc2f1dd9",
//         "65d083d4-9447-47d1-af30-b626144bf0fb",
//         "fce92aed-d578-4d2e-8114-068f8af4492e",
//         "30ea1073-cc9e-4652-b1e3-d08fb7b95315",
//         "be386ab3-af91-4104-9e6d-4dae4c9fddb7",
//         "fbd2a038-dbff-452c-8e79-2ee81b1aa84e",
//         "b64d5e15-8257-4af2-b20a-5a750f8940e7"
//     ]
// }
    
    
    
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/group');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody($json);

try
{
    $response = $request->send();
    return $response->getBody();
}
catch (HttpException $ex)
{
    echo $ex;
}
}*/



function face_identify($json){
    
    
//     {
//     "PersonGroupId": "sample_group",
//     "faceIds": [
//         "c5c24a82-6845-4031-9d5d-978df9175426",
//         "65d083d4-9447-47d1-af30-b626144bf0fb"
//     ],
//     "maxNumOfCandidatesReturned": 1,
//     "confidenceThreshold": 0.5
// }

    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/identify');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody($json);

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

/*
function face_verify($json){
//     {
//     "faceId": "c5c24a82-6845-4031-9d5d-978df9175426",
//     "personId": "815df99c-598f-4926-930a-a734b3fd651c",
//     "largePersonGroupId": "sample_group"
// }
    
    
$request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/verify');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody($json);

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

//function copied by vis



function facelist_addface($json){
    
    //  "url": "http://example.com/1.jpg" json url
    
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/facelists/{faceListId}/persistedFaces');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
    'userData' => '{string}',
    'targetFace' => '{string}',
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody($json);

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


function facelist_create($json){
    //"name": "sample_list",
    //"userData": "User-provided data attached to the face list." json format
    
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/facelists/{faceListId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_PUT);

// Request body
$request->setBody($json);

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


function facelist_delete($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/facelists/{faceListId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_DELETE);

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


function facelist_deleteface($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/facelists/{faceListId}/persistedFaces/{persistedFaceId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_DELETE);

// Request body
$request->setBody("{body}");

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

function facelist_get($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/facelists/{faceListId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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


function facelist_face($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/facelists');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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


function facelist_update($json){
    //"name": "list1",
    //"userData": "User-provided data attached to the face list." json data
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/facelists/{faceListId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_PATCH);

// Request body
$request->setBody($json);

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


function largefacelist_addface($json){
    //"url": "http://example.com/1.jpg" json data
    
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largefacelists/{largeFaceListId}/persistedfaces');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
    'userData' => '{string}',
    'targetFace' => '{string}',
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody($json);

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


function largefacelist_create($json){
    //"name": "large-face-list-name",
    //"userData": "User-provided data attached to the large face list." json format
    
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largefacelists/{largeFaceListId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_PUT);

// Request body
$request->setBody($json);

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


function largefacelist_delete($json){
    
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largefacelists/{largeFaceListId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_DELETE);

// Request body
$request->setBody("{body}");

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


function largefacelist_deleteface($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largefacelists/{largeFaceListId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_DELETE);

// Request body
$request->setBody("{body}");

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


function largefacelist_get($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largefacelists/{largeFaceListId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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


function largefacelist_getface($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largefacelists/{largeFaceListId}/persistedfaces/{persistedFaceId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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


function largefacelist_gettrainingstatus($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largefacelists/{largeFaceListId}/training');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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


function largefacelist_list($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largefacelists');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
    'start' => '{string}',
    'top' => '1000',
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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


function largefacelist_listface($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largefacelists/{largeFaceListId}/persistedfaces');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
    'start' => '{string}',
    'top' => '1000',
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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


function largefacelist_train($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largefacelists/{largeFaceListId}/train');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody("{body}");

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

function largefacelist_update($json){
    //"name": "large-face-list-name",
    //"userData": "User-provided data attached to the large face list." json format
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largefacelists/{largeFaceListId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_PATCH);

// Request body
$request->setBody($json);

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

function largefacelist_updateface($json){
    //"userData": "User-provided data attached to the large face list face."   json format
    
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largefacelists/{largeFaceListId}/persistedfaces/{persistedFaceId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_PATCH);

// Request body
$request->setBody($json);

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



function largepersongroup_create($json){
    //"name": "large-person-group-name",
    //"userData": "User-provided data attached to the large person group." json data
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups/{largePersonGroupId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_PUT);

// Request body
$request->setBody($json);

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


function largepersongroup_delete($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups/{largePersonGroupId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_DELETE);

// Request body
$request->setBody("{body}");

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


function largepersongroup_get($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups/{largePersonGroupId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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



function largepersongroup_gettrainingstatus($json){
        $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups/{largePersonGroupId}/training');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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



function largepersongroup_list($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
    'start' => '{string}',
    'top' => '1000',
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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


function largepersongroup_train($json){
       $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups/{largePersonGroupId}/train');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody("{body}");

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



function largepersongroup_update($json){
     //    "name": "large-person-group-name",
   // "userData": "User-provided data attached to the large person group."  json data
   
   $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups/{largePersonGroupId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_PATCH);

// Request body
$request->setBody($json);

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

function largepersongroupperson_addface($json){
    //"url": "http://example.com/1.jpg"  json data
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups/{largePersonGroupId}/persons/{personId}/persistedfaces');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
    'userData' => '{string}',
    'targetFace' => '{string}',
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody("{body}");

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


function largepersongroupperson_create($json){
    //"name": "person-name",
   // "userData": "User-provided data attached to the person."
   $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups/{largePersonGroupId}/persons');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody($json);

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

function largepersongroupperson_delete($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups/{largePersonGroupId}/persons/{personId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_DELETE);

// Request body
$request->setBody("{body}");

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


function largepersongroupperson_deleteface($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups/{largePersonGroupId}/persons/{personId}/persistedfaces/{persistedFaceId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_DELETE);

// Request body
$request->setBody("{body}");

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

function largepersongroupperson_get($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups/{largePersonGroupId}/persons/{personId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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


function largepersongroupperson_getface($json){
 $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups/{largePersonGroupId}/persons/{personId}/persistedfaces/{persistedFaceId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

try
{
    $response = $request->send();
    return $response->getBody();
}
catch (HttpException $ex)
{
    echo $ex;
}   
}*/

function largepersongroupperson_list($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups/{largePersonGroupId}/persons');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
    'start' => '{string}',
    'top' => '1000',
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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

/*
function largepersongroupperson_update($json){
    //"name": "person-name",
    //"userData": "User-provided data attached to the person." json format
    
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups/{largePersonGroupId}/persons/{personId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_PATCH);

// Request body
$request->setBody($json);

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


function largepersongroupperson_updateface($json){
    // "userData": "User-provided data attached to the person face."  json data
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/largepersongroups/{largePersonGroupId}/persons/{personId}/persistedfaces/{persistedFaceId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_PATCH);

// Request body
$request->setBody($json);

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

*/

function persongroup_create($json){
    //"name": "group1",
   // "userData": "user-provided data attached to the person group."
   
   $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/'.$json['videoname']);
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_PUT);

// Request body
$request->setBody($json['json']);

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




/*

function persongroup_delete($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/{personGroupId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_DELETE);

// Request body
$request->setBody("{body}");

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


function persongroup_get($json){
            $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/{personGroupId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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
*/

function persongroup_gettrainingstatus($video_id){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/'.$video_id.'/training');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
//$request->setBody($json);

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

/*

function persongroup_list($json){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
    'start' => '{string}',
    'top' => '1000',
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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
*/

function persongroup_train($video_id){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/'.$video_id.'/train');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
//$request->setBody($json);

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
/*

function persongroup_update($json){
     //   "name": "group1",
    //"userData": "user-provided data attached to the person group."   json data
    
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/{personGroupId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_PATCH);

// Request body
$request->setBody("{body}");

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
*/

function persongroupperson_addface($personId,$json,$video_id){
    //"url": "http://example.com/1.jpg" json data
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/'.$video_id.'/persons/'.$personId.'/persistedFaces');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
    // 'userData' => '{string}',
    // 'targetFace' => '{string}',
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody($json);

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


function persongroupperson_create($json,$video_id){
        //"name": "Person1",
   // "userData": "User-provided data attached to the person."  json data
   
   $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/'.$video_id.'/persons');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody($json);

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

/*
function persongroupperson_delete(){
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/{personGroupId}/persons/{personId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_DELETE);

// Request body
$request->setBody("{body}");

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


function persongroupperson_deleteface(){
        $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/{personGroupId}/persons/{personId}/persistedFaces/{persistedFaceId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_DELETE);

// Request body
$request->setBody("{body}");

try
{
    $response = $request->send();
    return $response->getBody();
}
catch (HttpException $ex)
{
    echo $ex;
}

}*/


function persongroupperson_get($personGroupId,$personId){
    $link = 'https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/'.$personGroupId.'/persons/'.$personId;
        $request = new Http_Request2($link);
       // echo $link;
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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

/*
function persongroupperson_getface(){
$request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/{personGroupId}/persons/{personId}/persistedFaces/{persistedFaceId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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
*/

function persongroupperson_list($personGroupId){
   // echo 'https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/'.$personGroupId.'/persons';
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/'.$personGroupId.'/persons');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
    'start' => '0',
    'top' => '1000',
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

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

/*
function persongroupperson_update(){
    //"name": "Person1",
   // "userData": "user-provided data attached to the person." json data
   
   $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/{personGroupId}/persons/{personId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_PATCH);

// Request body
$request->setBody("{body}");

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

function persongroupperson_updateface(){
    //"userData": "User-provided data attached to the face." json data
    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/{personGroupId}/persons/{personId}/persistedFaces/{persistedFaceId}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => $GLOBALS["subscription_key_face"],
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_PATCH);

// Request body
$request->setBody("{body}");

try
{
    $response = $request->send();
    return $response->getBody();
}
catch (HttpException $ex)
{
    echo $ex;
}
}*/