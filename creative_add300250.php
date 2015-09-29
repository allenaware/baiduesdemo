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
$creative->targetUrl = 'http://clksvr.bayescom.com:8080/click?auction=%%ID%%&dest=dest12&adspot=test&account=hello_world&campaign=%%CREATIVE_ID%%&devicetype=test&osv=test&ip=test';
$creative->landingPage = 'https://itunes.apple.com';
$creative->monitorUrls = array('http://winsvr.bayescom.com:8081/win?auction=%%ID%%&price=%%PRICE%%&adspot=test&account=hello_world&deviceString=test&exchange=bes');
$creative->width = 300;
$creative->height = 250;
$creative->creativeId = 16;
$creative->creativeTradeId = 7101;
$creative->advertiserId = 8;
$creative->adviewType = 2;
$file = '300_250.jpg';
$image = file_get_contents($file);
$creative->binaryData = base64_encode($image);
//$creative->binaryData = base64_encode('123');
$creative->creativeUrl = 'http://pic.bayescom.com/ad_resource/zls/zls_bigword_300x250.jpg';
$creativeList[] = $creative;

$request->request = $creativeList;

// Call service
$output_response = $service->post(stripslashes(json_encode($request)));

// Print response
print_r($output_response);

?>
