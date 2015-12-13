<?php

require_once 'apicore.php';

class AdvertiserAddService extends Baidu_Api_Client_Core {
	public function __construct() {
		parent::__construct('/advertiser/add');
	}
}

// New service
$service = new AdvertiserAddService();

// New request
$request = new APIAdvertiserAddRequest();
$advertiserList = array();
$advertiser = new APIAdvertiser();
$advertiser->advertiserId = 8;

$advertiser->advertiserName = mb_convert_encoding("117go", "UTF-8", "gb2312");
$advertiser->advertiserLiteName= mb_convert_encoding("117go", "UTF-8", "gb2312");
$advertiserList[] = $advertiser;

$request->request = $advertiserList;

// Call service
$output_response = $service->post(json_encode($request));

// Print response
$result=mb_convert_encoding($output_response, "gb2312", "utf-8");
print_r($result);

?>
