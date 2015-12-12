<?php

require_once 'apicore.php';

class AdvertiserGetAllService extends Baidu_Api_Client_Core {
	public function __construct() {
		parent::__construct('/advertiser/getAll');
	}
}

// New service
$service = new AdvertiserGetAllService();

// New request
$request = new APIAdvertiserGetAllRequest();
$request->startDate = '2013-05-21';
$request->endDate = '2013-05-21';

// Call service
$output_response = $service->post(json_encode($request));

// Print response
$result=mb_convert_encoding($output_response, "gb2312", "utf-8");
print_r($result);

?>