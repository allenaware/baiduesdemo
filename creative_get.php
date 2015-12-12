<?php

require_once 'apicore.php';

class CreativeGetService extends Baidu_Api_Client_Core {
	public function __construct() {
		parent::__construct('/creative/get');
	}
}

// New service
$service = new CreativeGetService();

// New request
$request = new APICreativeGetRequest();
$request->creativeIds = array(20100, 20101, 20102, 20103);

// Call service
$output_response = $service->post(json_encode($request));

// Print response
print_r($output_response);

?>