<?php
class CsvReportFormat extends ReportFormatBase {
	public static function display(&$report, &$request) {		
		$page_template = array(
			'content'=>$report->renderReportPage('csv/report','csv/page')
		);
		
		$file_name = preg_replace(array('/[\s]+/','/[^0-9a-zA-Z\-_\.]/'),array('_',''),$report->options['Name']);
		
		header("Content-type: application/csv");
		header("Content-Disposition: attachment; filename=".$file_name.".csv");
		header("Pragma: no-cache");
		header("Expires: 0");

		PhpReports::renderPage($page_template,'csv/page');
	}
}