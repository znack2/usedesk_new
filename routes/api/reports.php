<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	//general

    /* ================== reports ================== */

	$api->get('/reports/general', 					['uses' => 'ReportsController@getGenerateGeneral', 			'as' => 'user.reports.get_generate_general']);
	$api->get('/reports/users', 					['uses' => 'ReportsController@getGenerateUsers', 			'as' => 'user.reports.get_generate_users']);
	$api->get('/reports/index', 					['uses' => 'ReportsController@getIndex', 					'as' => 'user.reports.get_index']);
	$api->get('/reports/groups', 					['uses' => 'ReportsController@getGenerateGroups', 			'as' => 'user.reports.get_generate_groups']);
	$api->get('/reports/get-data/{dataType}', 		['uses' => 'ReportsController@getData', 					'as' => 'user.reports.get_data']);
	$api->get('/reports/get-user-csv/', 			['uses' => 'ReportsController@getUserCsv', 					'as' => 'user.reports.get_user_csv']);
	$api->get('/reports/get-status-csv', 			['uses' => 'ReportsController@getStatusCsv', 				'as' => 'user.reports.get_status_csv']);

    /* ================== nps ================== */

	$api->get('/reports/nps', 						['uses' => 'ReportsController@getGenerateNps', 				'as' => 'user.reports.get_generate_nps']);
	$api->get('/nps/getreports', 					['uses' => 'ReportsController@generateReportsCsv', 			'as' => 'user.nps.getreports']);

    /* ================== chat ================== */

	$api->get('/reports/chat', 						['uses' => 'ReportsController@getGenerateChat', 			'as' => 'user.reports.get_generate_chat']);
	$api->get('/reports/chat/xls', 					['uses' => 'ReportsController@getChatMissedXls', 			'as' => 'user.reports.get_chat_xls']);

    /* ================== sla ================== */

	$api->get('/reports/sla', 						['uses' => 'ReportsController@getGenerateSla', 				'as' => 'user.reports.get_generate_sla']);
	$api->get('/reports/sla/csv', 					['uses' => 'ReportsController@getSlaCsv', 					'as' => 'user.reports.get_sla_csv']);
	$api->get('/reports/sla-tickets', 				['uses' => 'ReportsController@getSlaTickets', 				'as' => 'user.reports.get_sla_tickets']);

    /* ================== export ================== */

	$api->get('/export/reports/general', 			['uses' => 'ExportToCsvController@getExportGeneralReport',  'as' => 'user.export_to_csv.get_export_general_report']);
	$api->post('/export/reports/general',  			['uses' => 'ExportToCsvController@postExportGeneralReport', 'as' => 'user.export_to_csv.post_export_general_report']);
});
