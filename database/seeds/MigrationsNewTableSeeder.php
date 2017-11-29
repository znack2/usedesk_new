<?php

class MigrationsNewTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		//\DB::table('migrations_new')->delete();
        
		\DB::table('migrations_new')->insert(array (
			0 => 
			array (
				'migration' => '2017_11_09_140525_create_admins_table',
				'batch' => 1,
			),
			1 => 
			array (
				'migration' => '2017_11_09_140525_create_ai_clients_table',
				'batch' => 1,
			),
			2 => 
			array (
				'migration' => '2017_11_09_140525_create_ai_company_data_table',
				'batch' => 1,
			),
			3 => 
			array (
				'migration' => '2017_11_09_140525_create_ai_messages_table',
				'batch' => 1,
			),
			4 => 
			array (
				'migration' => '2017_11_09_140525_create_api_clients_table',
				'batch' => 1,
			),
			5 => 
			array (
				'migration' => '2017_11_09_140525_create_api_code_users_table',
				'batch' => 1,
			),
			6 => 
			array (
				'migration' => '2017_11_09_140525_create_api_methods_table',
				'batch' => 1,
			),
			7 => 
			array (
				'migration' => '2017_11_09_140525_create_api_request_log_table',
				'batch' => 1,
			),
			8 => 
			array (
				'migration' => '2017_11_09_140525_create_api_settings_table',
				'batch' => 1,
			),
			9 => 
			array (
				'migration' => '2017_11_09_140525_create_api_users_table',
				'batch' => 1,
			),
			10 => 
			array (
				'migration' => '2017_11_09_140525_create_black_white_list_table',
				'batch' => 1,
			),
			11 => 
			array (
				'migration' => '2017_11_09_140525_create_chat_api_token_table',
				'batch' => 1,
			),
			12 => 
			array (
				'migration' => '2017_11_09_140525_create_chat_greeting_table',
				'batch' => 1,
			),
			13 => 
			array (
				'migration' => '2017_11_09_140525_create_chat_messages_table',
				'batch' => 1,
			),
			14 => 
			array (
				'migration' => '2017_11_09_140525_create_chat_nickname_table',
				'batch' => 1,
			),
			15 => 
			array (
				'migration' => '2017_11_09_140525_create_chat_settings_table',
				'batch' => 1,
			),
			16 => 
			array (
				'migration' => '2017_11_09_140525_create_chat_table',
				'batch' => 1,
			),
			17 => 
			array (
				'migration' => '2017_11_09_140525_create_chat_user_status_log_table',
				'batch' => 1,
			),
			18 => 
			array (
				'migration' => '2017_11_09_140525_create_chat_user_status_table',
				'batch' => 1,
			),
			19 => 
			array (
				'migration' => '2017_11_09_140525_create_chats_copy_table',
				'batch' => 1,
			),
			20 => 
			array (
				'migration' => '2017_11_09_140525_create_chats_table',
				'batch' => 1,
			),
			21 => 
			array (
				'migration' => '2017_11_09_140525_create_client_additional_ids_table',
				'batch' => 1,
			),
			22 => 
			array (
				'migration' => '2017_11_09_140525_create_client_addresses_table',
				'batch' => 1,
			),
			23 => 
			array (
				'migration' => '2017_11_09_140525_create_client_companies_table',
				'batch' => 1,
			),
			24 => 
			array (
				'migration' => '2017_11_09_140525_create_client_emails_table',
				'batch' => 1,
			),
			25 => 
			array (
				'migration' => '2017_11_09_140525_create_client_messengers_table',
				'batch' => 1,
			),
			26 => 
			array (
				'migration' => '2017_11_09_140525_create_client_phones_table',
				'batch' => 1,
			),
			27 => 
			array (
				'migration' => '2017_11_09_140525_create_client_sites_table',
				'batch' => 1,
			),
			28 => 
			array (
				'migration' => '2017_11_09_140525_create_client_social_networks_table',
				'batch' => 1,
			),
			29 => 
			array (
				'migration' => '2017_11_09_140525_create_clients_table',
				'batch' => 1,
			),
			30 => 
			array (
				'migration' => '2017_11_09_140525_create_companies_table',
				'batch' => 1,
			),
			31 => 
			array (
				'migration' => '2017_11_09_140525_create_company_billings_table',
				'batch' => 1,
			),
			32 => 
			array (
				'migration' => '2017_11_09_140525_create_company_contacts_table',
				'batch' => 1,
			),
			33 => 
			array (
				'migration' => '2017_11_09_140525_create_company_custom_block_params_table',
				'batch' => 1,
			),
			34 => 
			array (
				'migration' => '2017_11_09_140525_create_company_custom_blocks_table',
				'batch' => 1,
			),
			35 => 
			array (
				'migration' => '2017_11_09_140525_create_company_demo_data_table',
				'batch' => 1,
			),
			36 => 
			array (
				'migration' => '2017_11_09_140525_create_company_email_channels_table',
				'batch' => 1,
			),
			37 => 
			array (
				'migration' => '2017_11_09_140525_create_company_ga_log_table',
				'batch' => 1,
			),
			38 => 
			array (
				'migration' => '2017_11_09_140525_create_company_integrations_log_table',
				'batch' => 1,
			),
			39 => 
			array (
				'migration' => '2017_11_09_140525_create_company_integrations_table',
				'batch' => 1,
			),
			40 => 
			array (
				'migration' => '2017_11_09_140525_create_company_working_days_table',
				'batch' => 1,
			),
			41 => 
			array (
				'migration' => '2017_11_09_140525_create_config_table',
				'batch' => 1,
			),
			42 => 
			array (
				'migration' => '2017_11_09_140525_create_delivery_list_table',
				'batch' => 1,
			),
			43 => 
			array (
				'migration' => '2017_11_09_140525_create_error_log_table',
				'batch' => 1,
			),
			44 => 
			array (
				'migration' => '2017_11_09_140525_create_failed_jobs_table',
				'batch' => 1,
			),
			45 => 
			array (
				'migration' => '2017_11_09_140525_create_fb_groups_table',
				'batch' => 1,
			),
			46 => 
			array (
				'migration' => '2017_11_09_140525_create_get_started_table',
				'batch' => 1,
			),
			47 => 
			array (
				'migration' => '2017_11_09_140525_create_gmail_accounts_table',
				'batch' => 1,
			),
			48 => 
			array (
				'migration' => '2017_11_09_140525_create_group_channel_permissions_table',
				'batch' => 1,
			),
			49 => 
			array (
				'migration' => '2017_11_09_140525_create_imap_ticket_table',
				'batch' => 1,
			),
			50 => 
			array (
				'migration' => '2017_11_09_140525_create_import_client_company_table',
				'batch' => 1,
			),
			51 => 
			array (
				'migration' => '2017_11_09_140525_create_import_client_table',
				'batch' => 1,
			),
			52 => 
			array (
				'migration' => '2017_11_09_140525_create_import_connection_table',
				'batch' => 1,
			),
			53 => 
			array (
				'migration' => '2017_11_09_140525_create_import_queue_table',
				'batch' => 1,
			),
			54 => 
			array (
				'migration' => '2017_11_09_140525_create_import_ticket_table',
				'batch' => 1,
			),
			55 => 
			array (
				'migration' => '2017_11_09_140525_create_import_user_group_table',
				'batch' => 1,
			),
			56 => 
			array (
				'migration' => '2017_11_09_140525_create_import_user_table',
				'batch' => 1,
			),
			57 => 
			array (
				'migration' => '2017_11_09_140525_create_integration_table',
				'batch' => 1,
			),
			58 => 
			array (
				'migration' => '2017_11_09_140525_create_invoices_table',
				'batch' => 1,
			),
			59 => 
			array (
				'migration' => '2017_11_09_140525_create_macros_actions_table',
				'batch' => 1,
			),
			60 => 
			array (
				'migration' => '2017_11_09_140525_create_macros_categories_table',
				'batch' => 1,
			),
			61 => 
			array (
				'migration' => '2017_11_09_140525_create_macros_files_table',
				'batch' => 1,
			),
			62 => 
			array (
				'migration' => '2017_11_09_140525_create_macros_history_table',
				'batch' => 1,
			),
			63 => 
			array (
				'migration' => '2017_11_09_140525_create_macroses_2_user_groups_table',
				'batch' => 1,
			),
			64 => 
			array (
				'migration' => '2017_11_09_140525_create_macroses_table',
				'batch' => 1,
			),
			65 => 
			array (
				'migration' => '2017_11_09_140525_create_macroses_to_macros_categories_table',
				'batch' => 1,
			),
			66 => 
			array (
				'migration' => '2017_11_09_140525_create_mailing_schedule_history_table',
				'batch' => 1,
			),
			67 => 
			array (
				'migration' => '2017_11_09_140525_create_mailing_schedule_table',
				'batch' => 1,
			),
			68 => 
			array (
				'migration' => '2017_11_09_140525_create_mandrill_table_status_table',
				'batch' => 1,
			),
			69 => 
			array (
				'migration' => '2017_11_09_140525_create_mandrill_ticket_table',
				'batch' => 1,
			),
			70 => 
			array (
				'migration' => '2017_11_09_140525_create_messenger_settings_table',
				'batch' => 1,
			),
			71 => 
			array (
				'migration' => '2017_11_09_140525_create_monitoring_2_monitoring_keywords_table',
				'batch' => 1,
			),
			72 => 
			array (
				'migration' => '2017_11_09_140525_create_monitoring_classes_table',
				'batch' => 1,
			),
			73 => 
			array (
				'migration' => '2017_11_09_140525_create_monitoring_keywords_table',
				'batch' => 1,
			),
			74 => 
			array (
				'migration' => '2017_11_09_140525_create_monitoring_table',
				'batch' => 1,
			),
			75 => 
			array (
				'migration' => '2017_11_09_140525_create_nonexistent_emails_table',
				'batch' => 1,
			),
			76 => 
			array (
				'migration' => '2017_11_09_140525_create_notification_limit_table',
				'batch' => 1,
			),
			77 => 
			array (
				'migration' => '2017_11_09_140525_create_notification_to_user_table',
				'batch' => 1,
			),
			78 => 
			array (
				'migration' => '2017_11_09_140525_create_notifications_table',
				'batch' => 1,
			),
			79 => 
			array (
				'migration' => '2017_11_09_140525_create_nps_settings_table',
				'batch' => 1,
			),
			80 => 
			array (
				'migration' => '2017_11_09_140525_create_nps_table',
				'batch' => 1,
			),
			81 => 
			array (
				'migration' => '2017_11_09_140525_create_password_restore_request_table',
				'batch' => 1,
			),
			82 => 
			array (
				'migration' => '2017_11_09_140525_create_payment_table',
				'batch' => 1,
			),
			83 => 
			array (
				'migration' => '2017_11_09_140525_create_quick_macroses_table',
				'batch' => 1,
			),
			84 => 
			array (
				'migration' => '2017_11_09_140525_create_regexp_helpers_table',
				'batch' => 1,
			),
			85 => 
			array (
				'migration' => '2017_11_09_140525_create_registration_requests_table',
				'batch' => 1,
			),
			86 => 
			array (
				'migration' => '2017_11_09_140525_create_reports_ticket_comments_table',
				'batch' => 1,
			),
			87 => 
			array (
				'migration' => '2017_11_09_140525_create_settings_log_table',
				'batch' => 1,
			),
			88 => 
			array (
				'migration' => '2017_11_09_140525_create_sla_changes_history_table',
				'batch' => 1,
			),
			89 => 
			array (
				'migration' => '2017_11_09_140525_create_sla_close_time_history_table',
				'batch' => 1,
			),
			90 => 
			array (
				'migration' => '2017_11_09_140525_create_sla_data_table',
				'batch' => 1,
			),
			91 => 
			array (
				'migration' => '2017_11_09_140525_create_sla_option_types_table',
				'batch' => 1,
			),
			92 => 
			array (
				'migration' => '2017_11_09_140525_create_sla_options_table',
				'batch' => 1,
			),
			93 => 
			array (
				'migration' => '2017_11_09_140525_create_sla_priorities_table',
				'batch' => 1,
			),
			94 => 
			array (
				'migration' => '2017_11_09_140525_create_sla_reply_history_table',
				'batch' => 1,
			),
			95 => 
			array (
				'migration' => '2017_11_09_140525_create_sla_table',
				'batch' => 1,
			),
			96 => 
			array (
				'migration' => '2017_11_09_140525_create_sms_confirmations_table',
				'batch' => 1,
			),
			97 => 
			array (
				'migration' => '2017_11_09_140525_create_social_monitoring_table',
				'batch' => 1,
			),
			98 => 
			array (
				'migration' => '2017_11_09_140525_create_stat_monitor_table',
				'batch' => 1,
			),
			99 => 
			array (
				'migration' => '2017_11_09_140525_create_system_updates_table',
				'batch' => 1,
			),
			100 => 
			array (
				'migration' => '2017_11_09_140525_create_telephony_channel_table',
				'batch' => 1,
			),
			101 => 
			array (
				'migration' => '2017_11_09_140525_create_text_settings_table',
				'batch' => 1,
			),
			102 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_close_time_table',
				'batch' => 1,
			),
			103 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_comment_copy_emails_table',
				'batch' => 1,
			),
			104 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_comment_files_table',
				'batch' => 1,
			),
			105 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_comment_statuses_table',
				'batch' => 1,
			),
			106 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_comments_table',
				'batch' => 1,
			),
			107 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_field_options_table',
				'batch' => 1,
			),
			108 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_field_types_table',
				'batch' => 1,
			),
			109 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_field_values_history_table',
				'batch' => 1,
			),
			110 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_field_values_table',
				'batch' => 1,
			),
			111 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_fields_table',
				'batch' => 1,
			),
			112 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_files_table',
				'batch' => 1,
			),
			113 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_filters_2_user_groups_table',
				'batch' => 1,
			),
			114 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_filters_sort_table',
				'batch' => 1,
			),
			115 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_filters_table',
				'batch' => 1,
			),
			116 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_references_table',
				'batch' => 1,
			),
			117 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_status_changes_table',
				'batch' => 1,
			),
			118 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_statuses_table',
				'batch' => 1,
			),
			119 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_tags_2_client_companies_table',
				'batch' => 1,
			),
			120 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_tags_2_quick_macroses_table',
				'batch' => 1,
			),
			121 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_tags_2_ticket_field_values_table',
				'batch' => 1,
			),
			122 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_tags_2_ticket_tags_changes_table',
				'batch' => 1,
			),
			123 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_tags_2_tickets_table',
				'batch' => 1,
			),
			124 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_tags_changes_table',
				'batch' => 1,
			),
			125 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_tags_table',
				'batch' => 1,
			),
			126 => 
			array (
				'migration' => '2017_11_09_140525_create_ticket_variables_table',
				'batch' => 1,
			),
			127 => 
			array (
				'migration' => '2017_11_09_140525_create_tickets_2_users_2_user_groups_table',
				'batch' => 1,
			),
			128 => 
			array (
				'migration' => '2017_11_09_140525_create_tickets_table',
				'batch' => 1,
			),
			129 => 
			array (
				'migration' => '2017_11_09_140525_create_trigger_action_files_table',
				'batch' => 1,
			),
			130 => 
			array (
				'migration' => '2017_11_09_140525_create_trigger_actions_table',
				'batch' => 1,
			),
			131 => 
			array (
				'migration' => '2017_11_09_140525_create_trigger_changes_table',
				'batch' => 1,
			),
			132 => 
			array (
				'migration' => '2017_11_09_140525_create_trigger_conditions_table',
				'batch' => 1,
			),
			133 => 
			array (
				'migration' => '2017_11_09_140525_create_trigger_history_table',
				'batch' => 1,
			),
			134 => 
			array (
				'migration' => '2017_11_09_140525_create_triggers_table',
				'batch' => 1,
			),
			135 => 
			array (
				'migration' => '2017_11_09_140525_create_twitter_accounts_table',
				'batch' => 1,
			),
			136 => 
			array (
				'migration' => '2017_11_09_140525_create_ugp_2_ug_table',
				'batch' => 1,
			),
			137 => 
			array (
				'migration' => '2017_11_09_140525_create_uh_accounts_table',
				'batch' => 1,
			),
			138 => 
			array (
				'migration' => '2017_11_09_140525_create_uh_accoutns_table',
				'batch' => 1,
			),
			139 => 
			array (
				'migration' => '2017_11_09_140525_create_uh_articles_table',
				'batch' => 1,
			),
			140 => 
			array (
				'migration' => '2017_11_09_140525_create_uh_categories_table',
				'batch' => 1,
			),
			141 => 
			array (
				'migration' => '2017_11_09_140525_create_uh_collections_table',
				'batch' => 1,
			),
			142 => 
			array (
				'migration' => '2017_11_09_140525_create_usedesk_widget_table',
				'batch' => 1,
			),
			143 => 
			array (
				'migration' => '2017_11_09_140525_create_user_group_permissions_table',
				'batch' => 1,
			),
			144 => 
			array (
				'migration' => '2017_11_09_140525_create_user_groups_table',
				'batch' => 1,
			),
			145 => 
			array (
				'migration' => '2017_11_09_140525_create_user_notifications_table',
				'batch' => 1,
			),
			146 => 
			array (
				'migration' => '2017_11_09_140525_create_user_ticket_views_table',
				'batch' => 1,
			),
			147 => 
			array (
				'migration' => '2017_11_09_140525_create_users_2_user_groups_table',
				'batch' => 1,
			),
			148 => 
			array (
				'migration' => '2017_11_09_140525_create_users_table',
				'batch' => 1,
			),
			149 => 
			array (
				'migration' => '2017_11_09_140525_create_vk_accounts_table',
				'batch' => 1,
			),
			150 => 
			array (
				'migration' => '2017_11_09_140525_create_vk_channels_table',
				'batch' => 1,
			),
			151 => 
			array (
				'migration' => '2017_11_09_140525_create_vk_messages_table',
				'batch' => 1,
			),
			152 => 
			array (
				'migration' => '2017_11_09_140525_create_whatshelp_settings_table',
				'batch' => 1,
			),
			153 => 
			array (
				'migration' => '2017_11_09_140525_create_widget_mails_table',
				'batch' => 1,
			),
			154 => 
			array (
				'migration' => '2017_11_09_140525_create_widget_table',
				'batch' => 1,
			),
			155 => 
			array (
				'migration' => '2017_11_09_140525_create_zapier_settings_table',
				'batch' => 1,
			),
			156 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ai_messages_table',
				'batch' => 1,
			),
			157 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_api_clients_table',
				'batch' => 1,
			),
			158 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_api_code_users_table',
				'batch' => 1,
			),
			159 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_api_users_table',
				'batch' => 1,
			),
			160 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_black_white_list_table',
				'batch' => 1,
			),
			161 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_chat_settings_table',
				'batch' => 1,
			),
			162 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_chat_user_status_log_table',
				'batch' => 1,
			),
			163 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_chats_table',
				'batch' => 1,
			),
			164 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_client_additional_ids_table',
				'batch' => 1,
			),
			165 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_client_addresses_table',
				'batch' => 1,
			),
			166 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_client_companies_table',
				'batch' => 1,
			),
			167 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_client_emails_table',
				'batch' => 1,
			),
			168 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_client_messengers_table',
				'batch' => 1,
			),
			169 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_client_phones_table',
				'batch' => 1,
			),
			170 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_client_sites_table',
				'batch' => 1,
			),
			171 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_client_social_networks_table',
				'batch' => 1,
			),
			172 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_clients_table',
				'batch' => 1,
			),
			173 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_company_billings_table',
				'batch' => 1,
			),
			174 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_company_contacts_table',
				'batch' => 1,
			),
			175 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_company_custom_block_params_table',
				'batch' => 1,
			),
			176 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_company_custom_blocks_table',
				'batch' => 1,
			),
			177 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_company_demo_data_table',
				'batch' => 1,
			),
			178 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_company_email_channels_table',
				'batch' => 1,
			),
			179 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_company_ga_log_table',
				'batch' => 1,
			),
			180 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_company_integrations_log_table',
				'batch' => 1,
			),
			181 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_company_working_days_table',
				'batch' => 1,
			),
			182 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_fb_groups_table',
				'batch' => 1,
			),
			183 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_get_started_table',
				'batch' => 1,
			),
			184 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_group_channel_permissions_table',
				'batch' => 1,
			),
			185 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_invoices_table',
				'batch' => 1,
			),
			186 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_macros_actions_table',
				'batch' => 1,
			),
			187 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_macros_categories_table',
				'batch' => 1,
			),
			188 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_macros_files_table',
				'batch' => 1,
			),
			189 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_macros_history_table',
				'batch' => 1,
			),
			190 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_macroses_2_user_groups_table',
				'batch' => 1,
			),
			191 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_macroses_table',
				'batch' => 1,
			),
			192 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_macroses_to_macros_categories_table',
				'batch' => 1,
			),
			193 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_mailing_schedule_history_table',
				'batch' => 1,
			),
			194 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_messenger_settings_table',
				'batch' => 1,
			),
			195 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_monitoring_table',
				'batch' => 1,
			),
			196 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_nonexistent_emails_table',
				'batch' => 1,
			),
			197 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_nps_table',
				'batch' => 1,
			),
			198 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_payment_table',
				'batch' => 1,
			),
			199 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_registration_requests_table',
				'batch' => 1,
			),
			200 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_reports_ticket_comments_table',
				'batch' => 1,
			),
			201 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_settings_log_table',
				'batch' => 1,
			),
			202 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_sla_changes_history_table',
				'batch' => 1,
			),
			203 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_sla_close_time_history_table',
				'batch' => 1,
			),
			204 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_sla_options_table',
				'batch' => 1,
			),
			205 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_sla_reply_history_table',
				'batch' => 1,
			),
			206 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_sla_table',
				'batch' => 1,
			),
			207 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_text_settings_table',
				'batch' => 1,
			),
			208 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_close_time_table',
				'batch' => 1,
			),
			209 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_comment_copy_emails_table',
				'batch' => 1,
			),
			210 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_comment_files_table',
				'batch' => 1,
			),
			211 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_comments_table',
				'batch' => 1,
			),
			212 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_field_options_table',
				'batch' => 1,
			),
			213 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_field_values_history_table',
				'batch' => 1,
			),
			214 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_field_values_table',
				'batch' => 1,
			),
			215 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_fields_table',
				'batch' => 1,
			),
			216 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_files_table',
				'batch' => 1,
			),
			217 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_filters_2_user_groups_table',
				'batch' => 1,
			),
			218 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_filters_sort_table',
				'batch' => 1,
			),
			219 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_filters_table',
				'batch' => 1,
			),
			220 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_status_changes_table',
				'batch' => 1,
			),
			221 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_tags_2_client_companies_table',
				'batch' => 1,
			),
			222 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_tags_2_quick_macroses_table',
				'batch' => 1,
			),
			223 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_tags_2_ticket_field_values_table',
				'batch' => 1,
			),
			224 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_tags_2_ticket_tags_changes_table',
				'batch' => 1,
			),
			225 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_tags_2_tickets_table',
				'batch' => 1,
			),
			226 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ticket_tags_changes_table',
				'batch' => 1,
			),
			227 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_tickets_2_users_2_user_groups_table',
				'batch' => 1,
			),
			228 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_tickets_table',
				'batch' => 1,
			),
			229 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_trigger_action_files_table',
				'batch' => 1,
			),
			230 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_trigger_actions_table',
				'batch' => 1,
			),
			231 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_trigger_changes_table',
				'batch' => 1,
			),
			232 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_trigger_conditions_table',
				'batch' => 1,
			),
			233 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_trigger_history_table',
				'batch' => 1,
			),
			234 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_triggers_table',
				'batch' => 1,
			),
			235 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_twitter_accounts_table',
				'batch' => 1,
			),
			236 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_ugp_2_ug_table',
				'batch' => 1,
			),
			237 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_uh_categories_table',
				'batch' => 1,
			),
			238 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_uh_collections_table',
				'batch' => 1,
			),
			239 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_usedesk_widget_table',
				'batch' => 1,
			),
			240 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_user_groups_table',
				'batch' => 1,
			),
			241 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_user_notifications_table',
				'batch' => 1,
			),
			242 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_user_ticket_views_table',
				'batch' => 1,
			),
			243 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_users_2_user_groups_table',
				'batch' => 1,
			),
			244 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_users_table',
				'batch' => 1,
			),
			245 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_vk_accounts_table',
				'batch' => 1,
			),
			246 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_vk_channels_table',
				'batch' => 1,
			),
			247 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_vk_messages_table',
				'batch' => 1,
			),
			248 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_widget_mails_table',
				'batch' => 1,
			),
			249 => 
			array (
				'migration' => '2017_11_09_140529_add_foreign_keys_to_widget_table',
				'batch' => 1,
			),
		));
	}

}
