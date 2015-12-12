<?php

require_once 'apicore.php';

class CreativeGetAllService extends Baidu_Api_Client_Core {
	public function __construct() {
		parent::__construct('/creative/getAll');
	}
}

// New service
$service = new CreativeGetAllService();

// New request
$request = new APICreativeGetAllRequest();
$request->startDate = '2013-05-11';
$request->endDate = '2013-05-13';

// Call service
$output_response = $service->post(json_encode($request));

// Print response
print_r($output_response);

?>