<?php
class JsonReportFormat extends ReportFormatBase {
	public static function display(&$report, &$request) {
		$page_template = array(
			'content'=>$report->renderReportPage('json/report','json/page')
		);
		
		header("Content-type: application/json");
		header("Pragma: no-cache");
		header("Expires: 0");

		PhpReports::renderPage($page_template,'json/page');
	}
}