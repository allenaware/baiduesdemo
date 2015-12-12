<?php

require_once 'apicore.php';

class AdvertiserGetService extends Baidu_Api_Client_Core {
	public function __construct() {
		parent::__construct('/advertiser/get');
	}
}

// New service
$service = new AdvertiserGetService();

// New request
$request = new APIAdvertiserGetRequest();
$request->advertiserIds = array(1, 2, 3, 4);

// Call service
$output_response = $service->post(json_encode($request));

// Print response
$result=mb_convert_encoding($output_response, "gb2312", "utf-8");
print_r($result);

?>