<?php

require_once 'apicore.php';

class CreativeAddService extends Baidu_Api_Client_Core {
	public function __construct() {
		parent::__construct('/creative/add');
	}
}

// New service
$service = new CreativeAddService();

// New request
$request = new APICreativeAddRequest();
$creativeList = array();
$creative = new APICreative();
$creative->type = 1;
$creative->targetUrl = 'http://baidu.com/targeturl.html';
$creative->landingPage = 'http://baidu.com/landingpage.html';
$creative->monitorUrls = array('http://baidu.com/monitorurl.html');
$creative->width = 960;
$creative->height = 90;
$creative->creativeId = 12;
$creative->creativeTradeId = 190103;
$creative->advertiserId = 5;
$file = '960_90.jpg';
$image = file_get_contents($file);
$creative->binaryData = base64_encode($image);
//$creative->binaryData = base64_encode('123');
$creative->creativeUrl = '';
$creativeList[] = $creative;

$request->request = $creativeList;

// Call service
$output_response = $service->post(stripslashes(json_encode($request)));

// Print response
print_r($output_response);

?>