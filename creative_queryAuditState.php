<?php

require_once 'apicore.php';

class CreativeQueryAuditStateService extends Baidu_Api_Client_Core {
	public function __construct() {
		parent::__construct('/creative/queryAuditState');
	}
}

// New service
$service = new CreativeQueryAuditStateService();

// New request
$request = new APICreativeGetRequest();
$request->creativeIds = array(20100, 20101, 20102, 20103);

// Call service
$output_response = $service->post(json_encode($request));

// Print response
print_r($output_response);

?>