<?php

Route::prefix('api')->group(function () {
	//general

    /* ================== reports ================== */

	Route::get('/reports/general', 					['uses' => 'Reports\ReportsController@getGenerateGeneral', 			'as' => 'user.reports.get_generate_general']);
	Route::get('/reports/users', 					['uses' => 'Reports\ReportsController@getGenerateUsers', 			'as' => 'user.reports.get_generate_users']);
	Route::get('/reports/index', 					['uses' => 'Reports\ReportsController@getIndex', 					'as' => 'user.reports.get_index']);
	Route::get('/reports/groups', 					['uses' => 'Reports\ReportsController@getGenerateGroups', 			'as' => 'user.reports.get_generate_groups']);
	Route::get('/reports/get-data/{dataType}', 		['uses' => 'Reports\ReportsController@getData', 					'as' => 'user.reports.get_data']);
	Route::get('/reports/get-user-csv/', 			['uses' => 'Reports\ReportsController@getUserCsv', 					'as' => 'user.reports.get_user_csv']);
	Route::get('/reports/get-status-csv', 			['uses' => 'Reports\ReportsController@getStatusCsv', 				'as' => 'user.reports.get_status_csv']);

    /* ================== nps ================== */

	Route::get('/reports/nps', 						['uses' => 'Reports\ReportsController@getGenerateNps', 				'as' => 'user.reports.get_generate_nps']);
	Route::get('/nps/getreports', 					['uses' => 'Reports\ReportsController@generateReportsCsv', 			'as' => 'user.nps.getreports']);

    /* ================== chat ================== */

	Route::get('/reports/chat', 					['uses' => 'Reports\ReportsController@getGenerateChat', 			'as' => 'user.reports.get_generate_chat']);
	Route::get('/reports/chat/xls', 				['uses' => 'Reports\ReportsController@getChatMissedXls', 			'as' => 'user.reports.get_chat_xls']);

    /* ================== sla ================== */

	Route::get('/reports/sla', 						['uses' => 'Reports\ReportsController@getGenerateSla', 				'as' => 'user.reports.get_generate_sla']);
	Route::get('/reports/sla/csv', 					['uses' => 'Reports\ReportsController@getSlaCsv', 					'as' => 'user.reports.get_sla_csv']);
	Route::get('/reports/sla-tickets', 				['uses' => 'Reports\ReportsController@getSlaTickets', 				'as' => 'user.reports.get_sla_tickets']);

    /* ================== export ================== */

	Route::get('/export/reports/general', 			['uses' => 'ExportToCsvController@getExportGeneralReport',  'as' => 'user.export_to_csv.get_export_general_report']);
	Route::post('/export/reports/general',  		['uses' => 'ExportToCsvController@postExportGeneralReport', 'as' => 'user.export_to_csv.post_export_general_report']);
});
