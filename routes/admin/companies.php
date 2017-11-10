<?php


use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->get('/companies',                              	['uses' => 'CompaniesController@getIndex', 							'as' => 'admin.companies.get_index']);
	$api->get('/companies/export',                       	['uses' => 'CompaniesController@getExport', 						'as' => 'admin.companies.get_export']);
	$api->get('/companies/{id}/profile',                 	['uses' => 'CompaniesController@getProfile', 						'as' => 'admin.companies.get_profile']);
	$api->post('/companies/{id}/profile',                	['uses' => 'CompaniesController@postProfile', 						'as' => 'admin.companies.post_profile']);
	$api->get('/companies/{id}/statistic',               	['uses' => 'CompaniesController@getStatistic', 						'as' => 'admin.companies.get_statistic']);
	$api->get('/companies/{id}/invoices',                	['uses' => 'CompaniesController@getInvoices', 						'as' => 'admin.companies.get_invoices']);
	$api->post('/companies/{id}/create-invoice',         	['uses' => 'CompaniesController@postCreateInvoice', 				'as' => 'admin.companies.post_create_invoice']);
	$api->get('/companies/{id}/mailing',                 	['uses' => 'CompaniesController@getMailing', 						'as' => 'admin.companies.get_mailing']);
	$api->get('/companies/{id}/mailing/{msid}/send',     	['uses' => 'CompaniesController@getSendMailing', 					'as' => 'admin.companies.get_send_mailing']);
	$api->post('/companies/change-status/{company_id}',  	['uses' => 'CompaniesController@postChangeStatus', 					'as' => 'admin.companies.post_change_status']);
	$api->get('/companies/importVelobikeClients',        	['uses' => 'CompaniesController@getVelobikeClientsImportPage', 		'as' => 'admin.companies.get_velobike_clients_import_page']);
	$api->post('/companies/uploadVelobikeClientsFromFile', 	['uses' => 'CompaniesController@uploadVelobikeClientsFromFile', 	'as' => 'admin.companies.upload_velobike_clients_from_file']);
	$api->get('/companies/getCompanyJson/{company_id}',  	['uses' => 'CompaniesController@convertCompanyDataToJson', 			'as' => 'admin.companies.get_company_json']);
	$api->get('/companies/{id}/companyJsonPage',         	['uses' => 'CompaniesController@getCompanyJsonPage', 				'as' => 'admin.companies.get_company_json_page']);
	$api->get('/companies/getCompanyEml/{company_id}',   	['uses' => 'CompaniesController@convertCompanyTicketsToEml', 		'as' => 'admin.companies.get_company_eml']);
	$api->get('/companies/{id}/companyEmlPage',          	['uses' => 'CompaniesController@getCompanyEmlPage', 				'as' => 'admin.companies.get_company_eml_page']);
	$api->get('/companies/importShellyClients',          	['uses' => 'CompaniesController@getShellyClientsImportPage', 		'as' => 'admin.companies.get_shelly_clients_import_page']);
	$api->post('/companies/uploadShellyClientsFromFile', 	['uses' => 'CompaniesController@uploadShellyClientsFromFile', 		'as' => 'admin.companies.upload_shelly_clients_from_file']);
	$api->get('/companies/getDoublesPage',               	['uses' => 'CompaniesController@getDoublesPage', 					'as' => 'admin.companies.get_doubles_page']);
	$api->post('/companies/makeCompanyClientsCache/{id}',	['uses' => 'CompaniesController@makeCompanyClientsCache', 			'as' => 'admin.companies.make_companies_clients_cache']);
	$api->post('/companies/findDoublesByEmail',          	['uses' => 'CompaniesController@findDoublesByEmail', 				'as' => 'admin.companies.find_doubles_by_email']);
	$api->get('/companies/ga-log', 					  		['uses' => 'CompaniesController@getGaLog', 							'as' => 'admin.companies.ga_log']);
});
