<?php

$factory->define(App\Models\Account::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Models\Admin::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->safeEmail,
        'password' => bcrypt($faker->password),
        'access_admin_management' => $faker->boolean,
        'access_company_management' => $faker->boolean,
        'access_config_management' => $faker->boolean,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\AiMessage::class, function (Faker\Generator $faker) {
    return [
        'ticket_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'ai_chat_id' => $faker->word,
        'message' => $faker->text,
    ];
});

$factory->define(App\Models\ApiClient::class, function (Faker\Generator $faker) {
    return [
        'client_id' => $faker->word,
        'client_secret' => $faker->word,
        'client_name' => $faker->word,
        'company_id' => $faker->randomNumber(),
        'redirect_uri' => $faker->word,
    ];
});

$factory->define(App\Models\Article::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'text' => $faker->text,
        'public' => $faker->boolean,
        'category_id' => $faker->randomNumber(),
        'order' => $faker->randomNumber(),
    ];
});

$factory->define(App\Models\BaseModel::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Models\BlackWhiteList::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->safeEmail,
        'type' => $faker->word,
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->word,
        'order' => $faker->randomNumber(),
        'collection_id' => $faker->randomNumber(),
    ];
});

$factory->define(App\Models\Chat::class, function (Faker\Generator $faker) {
    return [
        'widget_id' => $faker->word,
        'default_status' => $faker->word,
        'channel_id' => $faker->randomNumber(),
    ];
});

$factory->define(App\Models\ChatSettings::class, function (Faker\Generator $faker) {
    return [
        'channel_id' => $faker->randomNumber(),
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'company_email' => $faker->word,
        'color' => $faker->word,
        'status' => $faker->boolean,
        'auto_init' => $faker->boolean,
        'z_index' => $faker->randomNumber(),
        'language' => $faker->word,
        'reaction' => $faker->boolean,
        'reaction_text' => $faker->text,
        'icon' => $faker->word,
        'attachment' => $faker->boolean,
        'topics' => $faker->word,
        'work_time' => $faker->boolean,
        'greeting_text' => $faker->text,
        'start_text' => $faker->text,
        'powered_by' => $faker->word,
        'is_email' => $faker->boolean,
        'trigger_name' => $faker->word,
        'docs' => $faker->boolean,
        'b_сolor' => $faker->word,
        'header_text_color' => $faker->word,
    ];
});

$factory->define(App\Models\ChatUserStatusLog::class, function (Faker\Generator $faker) {
    return [
        'user_id' => function () {
             return factory(App\Models\User::class)->create()->id;
        },
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'action' => $faker->word,
        'date' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\Models\Client::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'avatar' => $faker->word,
        'position' => $faker->word,
        'note' => $faker->text,
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'zendesk_id' => $faker->word,
        'spammer' => $faker->boolean,
        'vip' => $faker->boolean,
        'client_company_id' => function () {
             return factory(App\Models\ClientCompany::class)->create()->id;
        },
        'phones_id' => function () {
             return factory(App\Models\ClientPhone::class)->create()->id;
        },
        'sites_id' => function () {
             return factory(App\Models\ClientSite::class)->create()->id;
        },
        'social_networks_id' => function () {
             return factory(App\Models\ClientSocialNetwork::class)->create()->id;
        },
        'additional_ids_id' => function () {
             return factory(App\Models\ClientAdditionalId::class)->create()->id;
        },
        'messengers_id' => function () {
             return factory(App\Models\ClientMessenger::class)->create()->id;
        },
        'addresses_id' => function () {
             return factory(App\Models\ClientAddress::class)->create()->id;
        },
        'emails_id' => function () {
             return factory(App\Models\ClientEmail::class)->create()->id;
        },
        'tickets_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'ticket_comments_id' => function () {
             return factory(App\Models\TicketComment::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\ClientAdditionalId::class, function (Faker\Generator $faker) {
    return [
        'client_id' => $faker->randomNumber(),
        'value' => $faker->word,
        'name' => $faker->name,
    ];
});

$factory->define(App\Models\ClientAddress::class, function (Faker\Generator $faker) {
    return [
        'country' => $faker->country,
        'city' => $faker->city,
        'address' => $faker->word,
        'type' => $faker->word,
        'client_id' => function () {
             return factory(App\Models\Client::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\ClientCompany::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'note' => $faker->word,
        'domains' => $faker->text,
        'phone' => $faker->phoneNumber,
        'address' => $faker->word,
        'vip' => $faker->boolean,
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'avatar' => $faker->word,
        'clients_id' => function () {
             return factory(App\Models\Client::class)->create()->id;
        },
        'ticket_tags_2_client_companies' => function () {
             return factory(App\Models\TicketTag::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\ClientEmail::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->safeEmail,
        'client_id' => function () {
             return factory(App\Models\Client::class)->create()->id;
        },
        'fullcontact' => $faker->boolean,
        'status' => $faker->word,
    ];
});

$factory->define(App\Models\ClientMessenger::class, function (Faker\Generator $faker) {
    return [
        'identity' => $faker->word,
        'type' => $faker->word,
        'client_id' => function () {
             return factory(App\Models\Client::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\ClientPhone::class, function (Faker\Generator $faker) {
    return [
        'phone' => $faker->phoneNumber,
        'type' => $faker->word,
        'client_id' => function () {
             return factory(App\Models\Client::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\ClientSite::class, function (Faker\Generator $faker) {
    return [
        'url' => $faker->url,
        'client_id' => function () {
             return factory(App\Models\Client::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\ClientSocialNetwork::class, function (Faker\Generator $faker) {
    return [
        'url' => $faker->url,
        'type' => $faker->word,
        'client_id' => function () {
             return factory(App\Models\Client::class)->create()->id;
        },
        'uid' => $faker->word,
        'fullcontact' => $faker->boolean,
    ];
});

$factory->define(App\Models\Company::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'logotype' => $faker->word,
        'timezone' => $faker->word,
        'signature_enabled' => $faker->boolean,
        'blocked' => $faker->word,
        'last_login_at' => $faker->dateTimeBetween(),
        'registered_at' => $faker->dateTimeBetween(),
        'import_enabled' => $faker->boolean,
        'get_started' => $faker->boolean,
        'lang' => $faker->word,
        'working_days_id' => function () {
             return factory(App\Models\CompanyWorkingDay::class)->create()->id;
        },
        'users_id' => function () {
             return factory(App\Models\User::class)->create()->id;
        },
        'sla_id' => function () {
             return factory(App\Models\Sla::class)->create()->id;
        },
        'email_channels_id' => function () {
             return factory(App\Models\CompanyEmailChannel::class)->create()->id;
        },
        'tickets_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'invoices_id' => function () {
             return factory(App\Models\Invoice::class)->create()->id;
        },
        'triggers_id' => function () {
             return factory(App\Models\Trigger::class)->create()->id;
        },
        'macroses_id' => function () {
             return factory(App\Models\Macros::class)->create()->id;
        },
        'user_groups_id' => function () {
             return factory(App\Models\UserGroup::class)->create()->id;
        },
        'black_white_list_id' => function () {
             return factory(App\Models\BlackWhiteList::class)->create()->id;
        },
        'mailing_schedule_history' => function () {
             return factory(App\Models\MailingSchedule::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\CompanyBilling::class, function (Faker\Generator $faker) {
    return [
        'users_number' => $faker->randomNumber(),
        'data_plan' => $faker->word,
        'payment_type' => $faker->word,
        'card_number' => $faker->word,
        'card_token' => $faker->word,
        'invoicing_period' => $faker->word,
        'next_invoice' => $faker->dateTimeBetween(),
        'type' => $faker->word,
        'amount' => $faker->randomFloat(),
        'contract_number' => $faker->word,
        'contract_date' => $faker->date(),
        'company_name' => $faker->word,
        'company_inn' => $faker->word,
        'company_ppc' => $faker->word,
        'company_bin' => $faker->word,
        'company_legal_address' => $faker->word,
        'company_actual_address' => $faker->word,
        'company_address_match' => $faker->boolean,
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'additional_fields' => $faker->randomNumber(),
        'sended_at' => $faker->dateTimeBetween(),
        'mandrill_limit' => $faker->randomNumber(),
        'current_message' => $faker->randomNumber(),
        'is_send' => $faker->boolean,
        'ga_client_id' => $faker->word,
        'ga_sent' => $faker->boolean,
    ];
});

$factory->define(App\Models\CompanyContacts::class, function (Faker\Generator $faker) {
    return [
        'city' => $faker->city,
        'address' => $faker->word,
        'phones' => $faker->text,
        'emails' => $faker->text,
        'account_details' => $faker->text,
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\CompanyCustomBlock::class, function (Faker\Generator $faker) {
    return [
        'company_id' => 1,
        // function () {
        //      return factory(App\Models\Company::class)->create()->id;
        // },
        'type' => 'static',
        'name' => $faker->name,
        'title' => $faker->word,
        'text' => $faker->text,
        'url' => $faker->url,
        'secret_key' => $faker->word,
        'sort' => $faker->randomNumber(),
        'active' => $faker->boolean,
    ];
});

$factory->define(App\Models\CompanyCustomBlockParam::class, function (Faker\Generator $faker) {
    return [
        'company_custom_block_id' => $faker->randomNumber(),
        'key' => $faker->word,
        'value' => $faker->word,
        'block_id' => function () {
             return factory(App\Models\CompanyCustomBlock::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\CompanyEmailChannel::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'signature' => $faker->text,
        'incoming_connection' => $faker->word,
        'internal_email' => $faker->word,
        'imap_host' => $faker->word,
        'imap_port' => $faker->randomNumber(),
        'imap_username' => $faker->word,
        'imap_password' => $faker->word,
        'outgoing_connection' => $faker->word,
        'from_name' => $faker->word,
        'from_email' => $faker->word,
        'smtp_host' => $faker->word,
        'smtp_port' => $faker->randomNumber(),
        'smtp_username' => $faker->word,
        'smtp_password' => $faker->word,
        'unencrypted_connection' => $faker->boolean,
        'auto_reply' => $faker->boolean,
        'auto_reply_message' => $faker->text,
        'has_problem' => $faker->boolean,
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'type' => $faker->word,
        'token' => $faker->word,
        'group_id' => $faker->randomNumber(),
        'quotes' => $faker->boolean,
        'csi' => $faker->boolean,
        'key' => $faker->word,
        'redirect_url' => $faker->word,
        'deleted' => $faker->boolean,
        'deleted_at' => $faker->dateTimeBetween(),
        'imap_encrypted' => $faker->word,
        'smtp_encrypted' => $faker->word,
        'problem_sent' => $faker->boolean,
        'sync_engine_id' => $faker->word,
        'editor_quote' => $faker->boolean,
        'email_channel_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'group_channel_permissions' => function () {
             return factory(App\Models\UserGroup::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\CompanyIntegration::class, function (Faker\Generator $faker) {
    return [
        'integration_id' => $faker->randomNumber(),
        'company_id' => $faker->randomNumber(),
        'status' => $faker->boolean,
    ];
});

$factory->define(App\Models\CompanyWorkingDay::class, function (Faker\Generator $faker) {
    return [
        'day' => $faker->word,
        'start' => $faker->time(),
        'end' => $faker->time(),
        'is_working' => $faker->boolean,
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\ConfigModel::class, function (Faker\Generator $faker) {
    return [
        'key' => $faker->word,
        'value' => $faker->text,
    ];
});

$factory->define(App\Models\DeliveryList::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->safeEmail,
    ];
});

$factory->define(App\Models\FbGroup::class, function (Faker\Generator $faker) {
    return [
        'fb_id' => $faker->word,
        'channel_id' => $faker->randomNumber(),
        'is_active' => $faker->boolean,
        'company_id' => $faker->randomNumber(),
        'token' => $faker->word,
        'date_create' => $faker->dateTimeBetween(),
        'updated_time' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\Models\ForbiddenDomain::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Models\GetStarted::class, function (Faker\Generator $faker) {
    return [
        'key' => $faker->word,
        'done' => $faker->boolean,
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\GmailAccount::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomNumber(),
        'channel_id' => $faker->randomNumber(),
        'is_active' => $faker->randomNumber(),
        'company_id' => $faker->randomNumber(),
        'gmail_user_id' => $faker->word,
        'refresh_token' => $faker->word,
        'date_create' => $faker->dateTimeBetween(),
        'historyId' => $faker->randomNumber(),
    ];
});

$factory->define(App\Models\Integration::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'keyword' => $faker->word,
        'short_description' => $faker->word,
        'type' => $faker->word,
        'month_price' => $faker->randomNumber(),
        'year_price' => $faker->randomNumber(),
        'long_description' => $faker->text,
        'icon' => $faker->word,
        'default_status' => $faker->boolean,
        'status' => $faker->boolean,
    ];
});

$factory->define(App\Models\Invoice::class, function (Faker\Generator $faker) {
    return [
        'amount' => $faker->randomFloat(),
        'status' => $faker->word,
        'document_copy' => $faker->word,
        'deadline' => $faker->dateTimeBetween(),
        'blocking' => $faker->boolean,
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\Macros::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'message' => $faker->text,
        'enabled' => $faker->boolean,
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'for_user_id' => $faker->randomNumber(),
        'privacy' => $faker->word,
        'sort' => $faker->boolean,
        'changed_by_user' => function () {
             return factory(App\Models\User::class)->create()->id;
        },
        'deleted' => $faker->boolean,
        'files_id' => function () {
             return factory(App\Models\MacrosFile::class)->create()->id;
        },
        'macroses_2_user_groups' => function () {
             return factory(App\Models\UserGroup::class)->create()->id;
        },
        'macroses_to_macros_categories' => function () {
             return factory(App\Models\MacrosCategory::class)->create()->id;
        },
        'actions_id' => function () {
             return factory(App\Models\MacrosAction::class)->create()->id;
        },
        'macros_history_id' => function () {
             return factory(App\Models\MacrosHistory::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\MacrosAction::class, function (Faker\Generator $faker) {
    return [
        'action' => $faker->word,
        'value' => $faker->text,
        'macros_id' => function () {
             return factory(App\Models\Macros::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\MacrosCategory::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'depth' => $faker->boolean,
        'parent_id' => function () {
             return factory(App\Models\MacrosCategory::class)->create()->id;
        },
        'company_id' => $faker->randomNumber(),
        'sort' => $faker->boolean,
        'macroses_to_macros_categories' => function () {
             return factory(App\Models\Macros::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\MacrosFile::class, function (Faker\Generator $faker) {
    return [
        'file' => $faker->word,
        'macros_id' => function () {
             return factory(App\Models\Macros::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\MacrosHistory::class, function (Faker\Generator $faker) {
    return [
        'macros_id' => function () {
             return factory(App\Models\Macros::class)->create()->id;
        },
        'ticket_id' => $faker->randomNumber(),
        'used_at' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\Models\MailingSchedule::class, function (Faker\Generator $faker) {
    return [
        'status' => $faker->word,
        'time_elapsed' => $faker->randomNumber(),
        'template' => $faker->word,
        'mailing_schedule_history' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\MessengerSettings::class, function (Faker\Generator $faker) {
    return [
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'facebook_url' => $faker->word,
        'vk_url' => $faker->word,
        'viber_url' => $faker->word,
        'tg_url' => $faker->word,
        'whatsapp_token' => $faker->word,
    ];
});

$factory->define(App\Models\Monitoring::class, function (Faker\Generator $faker) {
    return [
        'company_id' => $faker->randomNumber(),
        'enable_admin' => $faker->boolean,
        'enable_user_vk' => $faker->boolean,
        'enable_user_twitter' => $faker->boolean,
        'enable_user_facebook' => $faker->boolean,
        'day_to_archive' => $faker->randomNumber(),
        'max_word_count' => $faker->randomNumber(),
        'monitoring_2_monitoring_keywords' => function () {
             return factory(App\Models\MonitoringKeyword::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\MonitoringClass::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'company_id' => $faker->randomNumber(),
        'title' => $faker->word,
    ];
});

$factory->define(App\Models\MonitoringKeyword::class, function (Faker\Generator $faker) {
    return [
        'word' => $faker->word,
        'last_update_vk' => $faker->dateTimeBetween(),
        'last_update_twitter' => $faker->dateTimeBetween(),
        'last_update_facebook' => $faker->dateTimeBetween(),
        'monitoring_2_monitoring_keywords' => function () {
             return factory(App\Models\Monitoring::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\MonitoringPost::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Models\MonitoringPostProperties::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Models\Notification::class, function (Faker\Generator $faker) {
    return [
        'keyword' => $faker->word,
        'status' => $faker->boolean,
    ];
});

$factory->define(App\Models\NotificationToUser::class, function (Faker\Generator $faker) {
    return [
        'notification_id' => $faker->randomNumber(),
        'user_id' => $faker->randomNumber(),
        'status' => $faker->boolean,
    ];
});

$factory->define(App\Models\Nps::class, function (Faker\Generator $faker) {
    return [
        'client_id' => $faker->randomNumber(),
        'ticket_id' => $faker->randomNumber(),
        'rating' => $faker->randomNumber(),
        'company_id' => $faker->randomNumber(),
        'ticket_comment_id' => $faker->randomNumber(),
        'comment' => $faker->text,
    ];
});

$factory->define(App\Models\NpsSetting::class, function (Faker\Generator $faker) {
    return [
        'company_id' => $faker->randomNumber(),
        'channel_type' => $faker->word,
        'condition' => $faker->randomNumber(),
        'text' => $faker->text,
        'active' => $faker->boolean,
        'ticket_status' => $faker->word,
        'csi_lang' => $faker->word,
        'use_custom_view' => $faker->randomNumber(),
        'custom_view_code' => $faker->text,
    ];
});

$factory->define(App\Models\PasswordRestoreRequest::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->safeEmail,
        'hash' => $faker->word,
    ];
});

$factory->define(App\Models\Payment::class, function (Faker\Generator $faker) {
    return [
        'payu_ref' => $faker->randomNumber(),
        'amount' => $faker->randomFloat(),
        'status' => $faker->text,
        'invoice_id' => $faker->randomNumber(),
        'company_id' => $faker->randomNumber(),
        'date_create' => $faker->dateTimeBetween(),
        'date_update' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\Models\QuickMacros::class, function (Faker\Generator $faker) {
    return [
        'value' => $faker->text,
        'date' => $faker->dateTimeBetween(),
        'company_id' => $faker->randomNumber(),
        'user_id' => $faker->randomNumber(),
        'ticket_tags_2_quick_macroses' => function () {
             return factory(App\Models\TicketTag::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\RegexpHelper::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'regexp' => $faker->word,
        'replace' => $faker->word,
        'description' => $faker->word,
    ];
});

$factory->define(App\Models\RegistrationRequest::class, function (Faker\Generator $faker) {
    return [
        'data' => $faker->text,
        'sms_confirmation_id' => function () {
             return factory(App\Models\SmsConfirmation::class)->create()->id;
        },
        'requested_at' => $faker->dateTimeBetween(),
        'confirmed' => $faker->boolean,
    ];
});

$factory->define(App\Models\ReportsTicketComments::class, function (Faker\Generator $faker) {
    return [
        'ticket_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'ticket_comment_id' => $faker->randomNumber(),
        'user_id' => function () {
             return factory(App\Models\User::class)->create()->id;
        },
        'group_id' => $faker->randomNumber(),
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'comment_time' => $faker->randomNumber(),
        'work_time' => $faker->randomNumber(),
        'published_at' => $faker->dateTimeBetween(),
        'is_first' => $faker->boolean,
        'comment_id' => function () {
             return factory(App\Models\TicketComment::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\SCollection::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->word,
        'public' => $faker->boolean,
        'order' => $faker->randomNumber(),
        'account_id' => $faker->randomNumber(),
    ];
});

$factory->define(App\Models\SettingsLog::class, function (Faker\Generator $faker) {
    return [
        'model_id' => $faker->randomNumber(),
        'model_name' => $faker->word,
        'type' => $faker->word,
        'module' => $faker->word,
        'user_id' => $faker->randomNumber(),
        'company_id' => $faker->randomNumber(),
        'admin_id' => $faker->randomNumber(),
        'changes' => $faker->text,
        'changed_at' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\Models\Sla::class, function (Faker\Generator $faker) {
    return [
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'channel_id' => $faker->randomNumber(),
        'use_work_time' => $faker->boolean,
        'is_filled' => $faker->boolean,
        'options_id' => function () {
             return factory(App\Models\SlaOption::class)->create()->id;
        },
        'company_email_channel_id' => function () {
             return factory(App\Models\CompanyEmailChannel::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\SlaCloseTimeHistory::class, function (Faker\Generator $faker) {
    return [
        'ticket_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'company_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'user_id' => function () {
             return factory(App\Models\User::class)->create()->id;
        },
        'group_id' => function () {
             return factory(App\Models\UserGroup::class)->create()->id;
        },
        'sla_option_id' => $faker->randomNumber(),
        'close_time' => $faker->randomNumber(),
        'work_time' => $faker->randomNumber(),
        'diff' => $faker->randomNumber(),
        'by_first' => $faker->boolean,
        'success' => $faker->boolean,
    ];
});

$factory->define(App\Models\SlaData::class, function (Faker\Generator $faker) {
    return [
        'ticket_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'sla_option_id' => function () {
             return factory(App\Models\SlaOption::class)->create()->id;
        },
        'ended_at' => $faker->dateTimeBetween(),
        'pause' => $faker->boolean,
        'paused_at' => $faker->dateTimeBetween(),
        'sort' => $faker->boolean,
    ];
});

$factory->define(App\Models\SlaOption::class, function (Faker\Generator $faker) {
    return [
        'sla_id' => function () {
             return factory(App\Models\Sla::class)->create()->id;
        },
        'sla_option_type_id' => function () {
             return factory(App\Models\SlaOptionType::class)->create()->id;
        },
        'priority_id' => function () {
             return factory(App\Models\SlaPriority::class)->create()->id;
        },
        'value' => $faker->randomNumber(),
        'sla_data_id' => function () {
             return factory(App\Models\SlaData::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\SlaOptionType::class, function (Faker\Generator $faker) {
    return [
        'key' => $faker->word,
    ];
});

$factory->define(App\Models\SlaPriority::class, function (Faker\Generator $faker) {
    return [
        'key' => $faker->word,
    ];
});

$factory->define(App\Models\SlaReplyHistory::class, function (Faker\Generator $faker) {
    return [
        'ticket_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'ticket_comment_id' => $faker->randomNumber(),
        'user_id' => function () {
             return factory(App\Models\User::class)->create()->id;
        },
        'group_id' => function () {
             return factory(App\Models\UserGroup::class)->create()->id;
        },
        'company_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'sla_option_id' => function () {
             return factory(App\Models\SlaOption::class)->create()->id;
        },
        'comment_time' => $faker->randomNumber(),
        'work_time' => $faker->randomNumber(),
        'diff' => $faker->randomNumber(),
        'published_at' => $faker->dateTimeBetween(),
        'is_first' => $faker->boolean,
        'success' => $faker->boolean,
        'comment_id' => function () {
             return factory(App\Models\TicketComment::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\SmsConfirmation::class, function (Faker\Generator $faker) {
    return [
        'to' => $faker->word,
        'code' => $faker->word,
    ];
});

$factory->define(App\Models\SystemUpdate::class, function (Faker\Generator $faker) {
    return [
        'type' => $faker->word,
        'name' => $faker->name,
        'content' => $faker->text,
        'button_name' => $faker->word,
        'button_url' => $faker->word,
        'last_updated_at' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\Models\TextSettings::class, function (Faker\Generator $faker) {
    return [
        'use_typographer' => $faker->boolean,
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\Ticket::class, function (Faker\Generator $faker) {
    return [
        'subject' => $faker->word,
        'type' => $faker->word,
        'priority' => $faker->word,
        'status_id' => function () {
             return factory(App\Models\TicketStatus::class)->create()->id;
        },
        'client_id' => function () {
             return factory(App\Models\Client::class)->create()->id;
        },
        'assignee_id' => function () {
             return factory(App\Models\User::class)->create()->id;
        },
        'channel' => $faker->word,
        'email_channel_id' => function () {
             return factory(App\Models\CompanyEmailChannel::class)->create()->id;
        },
        'email_channel_subject' => $faker->word,
        'email_channel_email' => $faker->word,
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'social_id' => $faker->word,
        'status_updated_at' => $faker->dateTimeBetween(),
        'last_updated_at' => $faker->dateTimeBetween(),
        'published_at' => $faker->dateTimeBetween(),
        'last_viewed_at' => $faker->dateTimeBetween(),
        'zendesk_id' => $faker->word,
        'owner_id' => $faker->randomNumber(),
        'spam_score' => $faker->randomFloat(),
        'notification_email' => $faker->word,
        'nps_sent' => $faker->boolean,
        'group' => $faker->randomNumber(),
        'telephony_id' => $faker->word,
        'additional_id' => $faker->word,
        'contact' => $faker->word,
        'chats_id' => function () {
             return factory(App\Models\UChats::class)->create()->id;
        },
        'ticket_tags_2_tickets' => function () {
             return factory(App\Models\TicketTag::class)->create()->id;
        },
        'comments_id' => function () {
             return factory(App\Models\TicketComment::class)->create()->id;
        },
        'trigger_changes_id' => function () {
             return factory(App\Models\TriggerChange::class)->create()->id;
        },
        'user_ticket_views_id' => function () {
             return factory(App\Models\UserTicketView::class)->create()->id;
        },
        'sla_data_id' => function () {
             return factory(App\Models\SlaData::class)->create()->id;
        },
        'sla_close_time_history_id' => function () {
             return factory(App\Models\SlaCloseTimeHistory::class)->create()->id;
        },
        'sla_reply_history_id' => function () {
             return factory(App\Models\SlaReplyHistory::class)->create()->id;
        },
        'ticket_field_values_id' => function () {
             return factory(App\Models\TicketFieldValue::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\TicketCloseTime::class, function (Faker\Generator $faker) {
    return [
        'ticket_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'company_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'user_id' => $faker->randomNumber(),
        'group_id' => $faker->randomNumber(),
        'close_time' => $faker->randomNumber(),
        'work_time' => $faker->randomNumber(),
        'by_first' => $faker->boolean,
    ];
});

$factory->define(App\Models\TicketComment::class, function (Faker\Generator $faker) {
    return [
        'type' => $faker->word,
        'message' => $faker->text,
        'is_html' => $faker->boolean,
        'from' => $faker->word,
        'user_id' => function () {
             return factory(App\Models\User::class)->create()->id;
        },
        'client_id' => function () {
             return factory(App\Models\Client::class)->create()->id;
        },
        'ticket_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'trigger_id' => $faker->randomNumber(),
        'group_id' => $faker->randomNumber(),
        'is_first' => $faker->boolean,
        'time' => $faker->randomNumber(),
        'by_mandrill' => $faker->boolean,
        'mandrill_id' => $faker->word,
        'mandrill_delivered' => $faker->boolean,
        'mandrill_readed' => $faker->boolean,
        'published_at' => $faker->dateTimeBetween(),
        'extra_headers' => $faker->word,
        'vk_id' => $faker->randomNumber(),
        'twitter_id' => $faker->word,
        'mandrill_bounce' => $faker->boolean,
        'files_id' => function () {
             return factory(App\Models\TicketCommentFile::class)->create()->id;
        },
        'copy_email_id' => function () {
             return factory(App\Models\TicketCommentCopyEmail::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\TicketCommentCopyEmail::class, function (Faker\Generator $faker) {
    return [
        'ticket_comment_id' => function () {
             return factory(App\Models\TicketComment::class)->create()->id;
        },
        'type' => $faker->word,
        'email' => $faker->safeEmail,
    ];
});

$factory->define(App\Models\TicketCommentFile::class, function (Faker\Generator $faker) {
    return [
        'file' => $faker->word,
        'ticket_comment_id' => function () {
             return factory(App\Models\TicketComment::class)->create()->id;
        },
        'file_name' => $faker->word,
    ];
});

$factory->define(App\Models\TicketField::class, function (Faker\Generator $faker) {
    return [
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'ticket_field_type_id' => function () {
             return factory(App\Models\TicketFieldType::class)->create()->id;
        },
        'name' => $faker->name,
        'value' => $faker->text,
        'required' => $faker->boolean,
        'add_tag' => $faker->boolean,
        'add_filter' => $faker->boolean,
        'sort' => $faker->randomNumber(),
        'active' => $faker->boolean,
        'hidden' => $faker->boolean,
        'api' => $faker->boolean,
        'deleted' => $faker->boolean,
        'options_id' => function () {
             return factory(App\Models\TicketFieldOption::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\TicketFieldOption::class, function (Faker\Generator $faker) {
    return [
        'ticket_field_id' => function () {
             return factory(App\Models\TicketField::class)->create()->id;
        },
        'value' => $faker->word,
    ];
});

$factory->define(App\Models\TicketFieldType::class, function (Faker\Generator $faker) {
    return [
        'key' => $faker->word,
    ];
});

$factory->define(App\Models\TicketFieldValue::class, function (Faker\Generator $faker) {
    return [
        'ticket_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'ticket_field_id' => function () {
             return factory(App\Models\TicketField::class)->create()->id;
        },
        'value' => $faker->word,
    ];
});

$factory->define(App\Models\TicketFieldValueHistory::class, function (Faker\Generator $faker) {
    return [
        'ticket_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'ticket_field_id' => function () {
             return factory(App\Models\TicketField::class)->create()->id;
        },
        'value' => $faker->word,
        'changed_at' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\Models\TicketFilter::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'data' => $faker->text,
        'user_id' => function () {
             return factory(App\Models\User::class)->create()->id;
        },
        'for_all_company_id' => $faker->randomNumber(),
        'for_group_id' => $faker->randomNumber(),
        'parent_id' => $faker->randomNumber(),
        'company_id' => $faker->randomNumber(),
        'integration_id' => $faker->randomNumber(),
        'public' => $faker->boolean,
        'groups_id' => function () {
             return factory(App\Models\TicketFilterToUserGroups::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\TicketFilterToUserGroups::class, function (Faker\Generator $faker) {
    return [
        'ticket_filter_id' => function () {
             return factory(App\Models\TicketFilter::class)->create()->id;
        },
        'user_group_id' => $faker->randomNumber(),
    ];
});

$factory->define(App\Models\TicketReference::class, function (Faker\Generator $faker) {
    return [
        'ticket_comment_id' => $faker->randomNumber(),
        'user_id' => $faker->randomNumber(),
        'status' => $faker->word,
        'email' => $faker->safeEmail,
    ];
});

$factory->define(App\Models\TicketStatus::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'key' => $faker->word,
        'tickets_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\TicketStatusChange::class, function (Faker\Generator $faker) {
    return [
        'ticket_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'ticket_status_id' => function () {
             return factory(App\Models\TicketStatus::class)->create()->id;
        },
        'changed_at' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\Models\TicketTag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'ticket_tags_2_tickets' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\TicketTagsChange::class, function (Faker\Generator $faker) {
    return [
        'ticket_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'changed_at' => $faker->dateTimeBetween(),
        'ticket_tags_2_ticket_tags_changes' => function () {
             return factory(App\Models\TicketTag::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\TicketVariable::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'key' => $faker->word,
        'description' => $faker->text,
        'enabled' => $faker->boolean,
    ];
});

$factory->define(App\Models\Trigger::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'enabled' => $faker->boolean,
        'manual_starting' => $faker->boolean,
        'position' => $faker->randomNumber(),
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'use_word_forms' => $faker->boolean,
        'deleted' => $faker->boolean,
        'conditions_id' => function () {
             return factory(App\Models\TriggerCondition::class)->create()->id;
        },
        'actions_id' => function () {
             return factory(App\Models\TriggerAction::class)->create()->id;
        },
        'trigger_history_id' => function () {
             return factory(App\Models\TriggerHistory::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\TriggerAction::class, function (Faker\Generator $faker) {
    return [
        'action' => $faker->word,
        'value' => $faker->text,
        'trigger_id' => function () {
             return factory(App\Models\Trigger::class)->create()->id;
        },
        'files_id' => function () {
             return factory(App\Models\TriggerActionFile::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\TriggerActionFile::class, function (Faker\Generator $faker) {
    return [
        'file' => $faker->word,
        'trigger_action_id' => function () {
             return factory(App\Models\TriggerAction::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\TriggerChange::class, function (Faker\Generator $faker) {
    return [
        'trigger_id' => function () {
             return factory(App\Models\Trigger::class)->create()->id;
        },
        'user_id' => function () {
             return factory(App\Models\User::class)->create()->id;
        },
        'ticket_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'data' => $faker->text,
        'changed_at' => $faker->dateTimeBetween(),
        'old_status' => $faker->randomNumber(),
        'new_status' => $faker->randomNumber(),
        'company_id' => $faker->randomNumber(),
    ];
});

$factory->define(App\Models\TriggerCondition::class, function (Faker\Generator $faker) {
    return [
        'boolean' => $faker->word,
        'target' => $faker->word,
        'condition' => $faker->word,
        'value' => $faker->text,
        'word_form' => $faker->text,
        'trigger_id' => function () {
             return factory(App\Models\Trigger::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\TriggerHistory::class, function (Faker\Generator $faker) {
    return [
        'trigger_id' => function () {
             return factory(App\Models\Trigger::class)->create()->id;
        },
        'updated_users' => $faker->randomNumber(),
        'updated_tickets' => $faker->randomNumber(),
        'started_at' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\Models\TwitterAccount::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomNumber(),
        'channel_id' => $faker->randomNumber(),
        'is_active' => $faker->boolean,
        'company_id' => $faker->randomNumber(),
        'oauth_token' => $faker->word,
        'oauth_token_secret' => $faker->word,
        'date_create' => $faker->dateTimeBetween(),
        'updated_time' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\Models\TwitterMonitoringPost::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Models\TwitterMonitoringUser::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Models\UChats::class, function (Faker\Generator $faker) {
    return [
        'token' => $faker->word,
        'socket_id' => $faker->word,
        'company_id' => $faker->randomNumber(),
        'connected_at' => $faker->dateTimeBetween(),
        'disconnected_at' => $faker->dateTimeBetween(),
        'client_id' => $faker->randomNumber(),
        'user_id' => $faker->randomNumber(),
        'status' => $faker->boolean,
        'ticket_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'is_missed' => $faker->boolean,
        'online' => $faker->boolean,
        'url' => $faker->url,
        'email' => $faker->safeEmail,
        'browser' => $faker->text,
        'missed_at' => $faker->dateTimeBetween(),
        'html' => $faker->text,
        'bot_id' => $faker->randomNumber(),
        'platform' => $faker->word,
    ];
});

$factory->define(App\Models\UsedeskWidget::class, function (Faker\Generator $faker) {
    return [
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'company_email_channel_id' => $faker->randomNumber(),
        'title' => $faker->word,
        'color' => $faker->word,
        'icon' => $faker->word,
        'attachment' => $faker->boolean,
        'topics' => $faker->text,
        'auto_init' => $faker->boolean,
        'z_index' => $faker->randomNumber(),
        'docs' => $faker->boolean,
        'language' => $faker->word,
        'support_account_id' => $faker->randomNumber(),
        'show_badge' => $faker->boolean,
        'badge_text' => $faker->text,
        'badge_text_color' => $faker->word,
        'badge_color' => $faker->word,
        'badge_show_timeout' => $faker->randomNumber(),
        'aligment' => $faker->word,
        'main_icon' => $faker->word,
        'badge_font_size' => $faker->randomNumber(),
        'powered_by' => $faker->word,
        'custom_fields' => $faker->text,
        'skipping_fields' => $faker->text,
        'channel_id' => function () {
             return factory(App\Models\CompanyEmailChannel::class)->create()->id;
        },
        'account_id' => function () {
             return factory(App\Models\Account::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->safeEmail,
        'password' => bcrypt($faker->password),
        'avatar' => $faker->word,
        'my_signature' => $faker->text,
        'use_signature' => $faker->text,
        'name' => $faker->name,
        'position' => $faker->word,
        'phone' => $faker->phoneNumber,
        'note' => $faker->text,
        'role' => $faker->word,
        'user_group_id' => $faker->randomNumber(),
        'is_first' => $faker->boolean,
        'reply_behavior' => $faker->word,
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'last_su_viewed' => $faker->dateTimeBetween(),
        'remember_token' => str_random(10),
        'zendesk_id' => $faker->word,
        'lang' => $faker->word,
        'confirmation_code' => $faker->word,
        'confirmed' => $faker->boolean,
        'default_group' => $faker->randomNumber(),
        'status' => $faker->boolean,
        'deleted' => $faker->boolean,
        'deleted_at' => $faker->dateTimeBetween(),
        'users_2_user_groups' => function () {
             return factory(App\Models\UserGroup::class)->create()->id;
        },
        'assigned_tickets_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'ticket_comments_id' => function () {
             return factory(App\Models\TicketComment::class)->create()->id;
        },
        'user_ticket_views_id' => function () {
             return factory(App\Models\UserTicketView::class)->create()->id;
        },
        'ticket_filters_id' => function () {
             return factory(App\Models\TicketFilter::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\UserGroup::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
        'deleted' => $faker->boolean,
        'deleted_at' => $faker->dateTimeBetween(),
        'ugp_2_ug' => function () {
             return factory(App\Models\UserGroupPermission::class)->create()->id;
        },
        'users_2_user_groups' => function () {
             return factory(App\Models\User::class)->create()->id;
        },
        'macroses_2_user_groups' => function () {
             return factory(App\Models\Macros::class)->create()->id;
        },
        'group_channel_permissions' => function () {
             return factory(App\Models\CompanyEmailChannel::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\UserGroupPermission::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'ugp_2_ug' => function () {
             return factory(App\Models\UserGroup::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\UserNotification::class, function (Faker\Generator $faker) {
    return [
        'ticket_new' => $faker->randomNumber(),
        'ticket_assigned_to_me' => $faker->randomNumber(),
        'ticket_assigned' => $faker->randomNumber(),
        'client_replied_to_unassigned' => $faker->randomNumber(),
        'client_replied_to_my' => $faker->randomNumber(),
        'client_replied_to_assigned' => $faker->randomNumber(),
        'user_replied_to_unassigned' => $faker->randomNumber(),
        'user_replied_to_my' => $faker->randomNumber(),
        'user_replied_to_assigned' => $faker->randomNumber(),
        'ticket_reference_me' => $faker->randomNumber(),
        'user_id' => function () {
             return factory(App\Models\User::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\UserTicketView::class, function (Faker\Generator $faker) {
    return [
        'user_id' => function () {
             return factory(App\Models\User::class)->create()->id;
        },
        'ticket_id' => function () {
             return factory(App\Models\Ticket::class)->create()->id;
        },
        'last_viewed_at' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\Models\VkAccount::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomNumber(),
        'channel_id' => $faker->randomNumber(),
        'is_active' => $faker->boolean,
        'company_id' => $faker->randomNumber(),
        'token' => $faker->word,
        'date_create' => $faker->dateTimeBetween(),
        'updated_time' => $faker->dateTimeBetween(),
        'vk_user_id' => $faker->randomNumber(),
    ];
});

$factory->define(App\Models\VkChannel::class, function (Faker\Generator $faker) {
    return [
        'company_email_channel_id' => $faker->randomNumber(),
        'company_id' => $faker->randomNumber(),
        'vk_group_id' => $faker->randomNumber(),
        'secret_key' => $faker->word,
        'vk_submit_string' => $faker->word,
        'group_key' => $faker->word,
    ];
});

$factory->define(App\Models\VkMessage::class, function (Faker\Generator $faker) {
    return [
        'message' => $faker->text,
        'company_id' => $faker->randomNumber(),
        'company_email_channel_id' => $faker->randomNumber(),
        'read' => $faker->boolean,
    ];
});

$factory->define(App\Models\VkMonitoringPost::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Models\VkMonitoringUser::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Models\Widget::class, function (Faker\Generator $faker) {
    return [
        'channel_id' => $faker->randomNumber(),
        'position' => $faker->word,
        'button_text' => $faker->word,
        'button_color' => $faker->word,
        'button_text_color' => $faker->word,
        'display_email' => $faker->boolean,
        'company_email' => $faker->word,
        'display_phone' => $faker->boolean,
        'company_phone' => $faker->word,
        'company_id' => function () {
             return factory(App\Models\Company::class)->create()->id;
        },
    ];
});

