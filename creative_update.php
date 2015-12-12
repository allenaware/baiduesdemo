<?php

require_once 'apicore.php';

class CreativeAddService extends Baidu_Api_Client_Core {
	public function __construct() {
		parent::__construct('/creative/update');
	}
}

// New service
$service = new CreativeAddService();

// New request
$request = new APICreativeAddRequest();
$creativeList = array();
$creative = new APICreative();
$creative->creativeId = 11;
$creative->landingPage = 'http://baidu.com/landingpage5555555555.html';
//$creative->type = 0;
//$creative->targetUrl = 'http://baidu.com/targeturl.html';
//$creative->monitorUrls = array('http://baidu.com/monitorurl.html');
//$creative->width = 960;
//$creative->height = 90;
//$creative->creativeTradeId = 190103;
//$creative->binaryData = file_get_contents('960_90.jpg');
#$creative->creativeUrl = 'http://baidu.com/image.jpg';
$creativeList[] = $creative;

$request->request = $creativeList;

// Call service
$output_response = $service->post(json_encode($request));

// Print response
print_r($output_response);

?>