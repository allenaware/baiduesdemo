<?php

require_once 'apicore.php';

class ReportRtbService extends Baidu_Api_Client_Core {
	public function __construct() {
		parent::__construct('/report/rtb');
	}
}

// New service
$service = new ReportRtbService();

// New request
$request = new APIReportRtbRequest();
$request->startDate = '2013-05-11';
$request->endDate = '2013-05-13';

// Call service
$output_response = $service->post(json_encode($request));

// Print response
print_r($output_response);

?>