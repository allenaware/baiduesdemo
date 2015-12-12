<?php

require_once 'apicore.php';

class ReportConsumeService extends Baidu_Api_Client_Core {
	public function __construct() {
		parent::__construct('/report/consume');
	}
}

// New service
$service = new ReportConsumeService();

// New request
$request = new APIReportConsumeRequest();
$request->startDate = '2013-05-20';
$request->endDate = '2013-05-21';

// Call service
$output_response = $service->post(json_encode($request));

// Print response
print_r($output_response);

?>