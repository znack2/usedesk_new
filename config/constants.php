<?php

    /*
    |--------------------------------------------------------------------------
    | CONSTANTS FOR MODELS
    |--------------------------------------------------------------------------
    |
    | Laravel supports both SMTP and PHP's "mail" function as drivers for the
    | sending of e-mail. You may specify which one you're using throughout
    | your application here. By default, Laravel is setup for SMTP mail.
    |
    | Supported: "smtp", "sendmail", "mailgun", "mandrill", "ses",
    |            "sparkpost", "log", "array"
    |
    */


return [
    'BlackWhiteList' => [
        'TYPE_BLACK' => 'black',
        'TYPE_WHITE' => 'white',
    ],    
    'ChatUserStatusLog' => [
        'ACTION_CONNECTED' => 'connected',
        'ACTION_DISCONNECTED' => 'disconnected',
    ],    
    'Client' => [
        'TYPE_VIP' => 'vip',
        'TYPE_SPAMMER' => 'spammer',
    ],    
    'ClientAddress' => [
        'TYPE_HOME' => 'home',
        'TYPE_WORK' => 'work',
        'TYPE_POSTAL' => 'postal',
    ],    
    'ClientMessenger' => [
        'TYPE_IMESSAGE' => 'imessage',
        'TYPE_SKYPE' => 'skype',
        'TYPE_WHATSAPP' => 'whatsapp',
        'TYPE_GTALK' => 'gtalk',
        'TYPE_TELEGRAM' => 'telegram',
        'TYPE_OTHER' => 'other',
    ],   
     'ClientPhone' => [
        'TYPE_HOME' => 'home',
        'TYPE_MOBILE' => 'mobile',
        'TYPE_STATIONARY' => 'stationary',
        'TYPE_FAX' => 'fax',
        'TYPE_OTHER' => 'other',
    ],    
    'ClientSocialNetwork' => [
        'TYPE_TWITTER' => 'twitter',
        'TYPE_FACEBOOK' => 'facebook',
        'TYPE_VK' => 'vk',
        'TYPE_OK' => 'ok',
        'TYPE_INSTAGRAM' => 'instagram',
        'TYPE_YOUTUBE' => 'youtube',
        'TYPE_GPLUS' => 'gplus',
        'TYPE_OTHER' => 'other',
    ],    
    'Company' => [
        'BLOCK_NONE' => 'none',
        'BLOCK_ACTIVITY' => 'activity',
        'BLOCK_FULL' => 'full',
    ],    
    'CompanyBilling' => [
       
        'TYPE_DEFAULT' => 'default',
        'TYPE_FIXED' => 'fixed',

        'DATA_PLAN_TRIAL' => 'trial',
        'DATA_PLAN_FREE' => 'free',
        'DATA_PLAN_PAID' => 'paid',

        'PAYMENT_TYPE_BANK_CARD' => 'bank_card',
        'PAYMENT_TYPE_SETTLEMENT_ACCOUNT' => 'settlement_account',

        'INVOICING_PERIOD_MONTH' => 'month',
        'INVOICING_PERIOD_YEAR' => 'year',
    ],    
    'CompanyCustomBlock' => [
        'TYPE_STATIC' => 'static',
        'TYPE_DYNAMIC' => 'dynamic',
        'RETAIL_NAME' => 'Retail CRM',
        'RETAIL_TITLE' => 'Retail CRM',
        'RETAIL_TEXT' => '',
        'YANDEX_NAME' => 'Яндекс',
        'YANDEX_TITLE' => '{{ticket_subject}} в яндексе',
        'YANDEX_TEXT' => '<p><a href="https://yandex.ru/search?text={{ticket_subject}}" target="_blank">Искать в яндексе по теме письма</a></p>',
    ],    
    'CompanyEmailChannel' => [
        'CONNECTION_INTERNAL' => 'internal',
        'CONNECTION_EXTERNAL' => 'external',

        'TYPE_SYNC' => 'sync_engine',
        'FROM_NAME_COMPANY' => 'company',
        'FROM_NAME_USER' => 'user',

        'IGNORE_TIME' => '30', // ignore comment if it was posted in less than 30 sec after last comment
        'NO_SUBJECT' => 'No subject',
        
    ],    
    'CompanyWorkingDay' => [
        'DAY_MONDAY' => 'monday',
        'DAY_TUESDAY' => 'tuesday',
        'DAY_WEDNESDAY' => 'wednesday',
        'DAY_THURSDAY' => 'thursday',
        'DAY_FRIDAY' => 'friday',
        'DAY_SATURDAY' => 'saturday',
        'DAY_SUNDAY' => 'sunday',
    ],    
    'ConfigModel' => [
        'KEY_TRIAL_PERIOD' => 'trial_period',
        'KEY_PAYMENT_PERIOD' => 'payment_period',
        'KEY_PRICE_PER_USER' => 'price_per_user',
        'KEY_INVOICING_DAY' => 'invoicing_day',
        'KEY_COMPANY_NAME' => 'company_name',
        'KEY_COMPANY_INN' => 'company_inn',
        'KEY_COMPANY_PPC' => 'company_ppc',
        'KEY_COMPANY_BIN' => 'company_bin',
        'KEY_COMPANY_GIRO' => 'company_giro',
        'KEY_COMPANY_CA' => 'company_ca',
        'KEY_COMPANY_BANK' => 'company_bank',
        'KEY_COMPANY_LEGAL_ADDRESS' => 'company_legal_address',
        'KEY_SPAM_SCORE' => 'spam_score',
        'KEY_SMS_CONFIRMATION' => 'sms_confirmation',
        'KEY_NUM_PUCTURES_IN_LETTER' => 'num_pictures_in_latter',
        'KEY_UNSUBSCRIBE_IN_LETTER' => 'unsubscribe_in_letter',
        'KEY_NUM_LINKS_IN_LETTER' => 'num_links_in_letter',
    ],    
    'GetStarted' => [
        'KEY_CHANNELS' => 'channels',
        'KEY_TICKETS' => 'tickets',
        'KEY_USERS' => 'users',
        'KEY_GROUPS' => 'groups',
        'KEY_TRIGGERS' => 'triggers',
        'KEY_MACROSES' => 'macroses',
        
    ],    
    'Integration' => [
       
        'TYPE_PAID' => 'paid',
        'TYPE_FREE' => 'free',

        'TYPE_VK' => 'vk',
        'TYPE_TWITTER' => 'twitter',
        'TYPE_FACEBOOK' => 'fb',
        'TYPE_JIVO' => 'jivo',
        'TYPE_MONITOR' => 'monitor',
        'TYPE_FULLCONTACT' => 'fullcontact',
        'TYPE_API' => 'api',
        'TYPE_SUPPORT' => 'support',
        'TYPE_WORK_TIME' => 'work_time',
        'TYPE_SLA' => 'sla',
        'TYPE_AI' => 'ai',
        'TYPE_TELEPHONY' => 'telephony',
        'TYPE_GRAVITEL' => 'gravitel',
        'TYPE_ZAPIER' => 'zapier',
        'TYPE_CHAT' => 'chat',
        'TYPE_ADDITIONAL_FIELDS' => 'additional_fields',
        'TYPE_WHATSHELP' => 'whatshelp',
        'TYPE_MESSENGER' => 'messenger',
        'TYPE_GLAVRED' => 'glavred',
        'TYPE_SPELLER' => 'speller',
        'TYPE_COBROWSING' => 'cobrowsing',
        'TYPE_RETAIL_CRM' => 'retail_crm',
        'TYPE_SYNC_ENGINE' => 'sync_engine',
    ],    
    'Invoice' => [
        'STATUS_PAID' => 'paid',
        'STATUS_NOT_PAID' => 'not_paid',
        'STATUS_AWAITING_CONFIRMATION' => 'awaiting_confirmation',
        
    ],    
    'MailingSchedule' => [
        'STATUS_NOTHING' => 'nothing',
        'STATUS_SOME' => 'some',
        'STATUS_ALL' => 'all',
        
    ],    
    'Monitoring' => [
       
        'ENABLE_ADMIN' => 'enable_admin',
        'ENABLE_VK' => 'enable_user_vk',
        'ENABLE_FACEBOOK' => 'enable_user_facebook',
        'ENABLE_TWITTER' => 'enable_user_twitter',
    ],    
    'Notification' => [
        'TYPE_TICKET_NEW' => 'ticket_new',//????? ?????
        'TYPE_TICKET_ASSIGNED_TO_ME' => 'ticket_assigned_to_me', //????? ???????? ?? ????
        'TYPE_TICKET_ASSIGNED_TO_GROUP' => 'ticket_assigned_to_group', //????? ???????? ?? ????
        'TYPE_TICKET_REFERENCE_ME' => 'user_mentioned',// ???????????? ???????? ? ??????
        'TYPE_TICKET_ASSIGNED' => 'ticket_assigned',//????? ????????
        'TYPE_CLIENT_REPLIED_TO_UNASSIGNED' => 'client_replied_to_unassigned', // ?????? ??????? ?? ???????????? ?????
        'TYPE_CLIENT_REPLIED_TO_MY' => 'client_replied_to_my', // ?????? ??????? ???
        'TYPE_CLIENT_REPLIED_TO_ASSIGNED' => 'client_replied_to_assigned', // ?????? ??????? ?????????????
        'TYPE_USER_REPLIED_TO_UNASSIGNED' => 'user_replied_to_unassigned', //
        'TYPE_USER_REPLIED_TO_MY' => 'user_replied_to_my', // ???????????? ??????? ???
        'TYPE_USER_REPLIED_TO_ASSIGNED' => 'user_replied_to_assigned',
        'TYPE_COMMENT_TO_ASSIGNED_TICKET' => 'comment_to_assigned_ticket',
        'TYPE_COMMENT_TO_UNASSIGNED_TICKET' => 'comment_to_unassigned_ticket',
        'TYPE_COMMENT_TO_MY_TICKET' => 'comment_to_my_ticket',
        'USER_VALUED_TO_MY' => 'user-valued-to-my',
        'USER_VALUED_TO_ASSIGNED' => 'user-valued-to-assigned',
    ],    
    'Nps' => [
        'RATING_GOOD' => 1,
        'RATING_NORMAL' => 2,
        'RATING_BAD' => 3,
    ],     
    'Payment' => [
        'STATUS_NEW' => 'new',
        'STATUS_PENDING' => 'pending',
        'STATUS_PAID' => 'paid',
        'STATUS_FAILED' => 'failed',
    ],    
    'SlaOptionType' => [
        'FIRST_REPLY_TIME' => 'first_reply_time',
        'NEXT_REPLY_TIME' => 'next_reply_time',
        'CLOSE_TIME' => 'close_time',
    ],    
    'SlaPriority' => [
        'LOW' => 'low',
        'MEDIUM' => 'medium',
        'URGENT' => 'urgent',
        'EXTREME' => 'extreme',
    ],    
    'SystemUpdate' => [
        'TYPE_PROBLEM' => 'problem',
        'TYPE_FEATURE' => 'feature',
        'TYPE_ARTICLE' => 'article',
    ],    
    'Ticket' => [
        'TYPE_QUESTION' => 'question',
        'TYPE_TASK' => 'task',
        'TYPE_PROBLEM' => 'problem',
        'TYPE_INCIDENT' => 'incident',
        'PRIORITY_LOW' => 'low',
        'PRIORITY_MEDIUM' => 'medium',
        'PRIORITY_URGENT' => 'urgent',
        'PRIORITY_EXTREME' => 'extreme',
        'CHANNEL_VK' => 'vk',
        'CHANNEL_FB' => 'facebook',
        'CHANNEL_EMAIL' => 'email',
        'CHANNEL_API' => 'api',
        'CHANNEL_GRAVITEL' => 'gravitel',
        'CHANNEL_MANGO' => 'mango',
        'CHANNEL_TELEPHONY' => 'telephony',
        'CHANNEL_WHATSHELP' => 'whatshelp',
        'UPDATE_BY_EMAIL_REGEXP' => 'by_email_from_regexp',
        'UPDATE_BY_PHONE_REGEXP' => 'by_phone_from_regexp',
        'UPDATE_BY_NAME_REGEXP' => 'by_name_from_regexp',
        'USEDESK_CHAT' => 'usedesk_chat',
        
    ],    
    'TicketCommentCopyEmail' => [
        'TYPE_CC' => 'cc',
        'TYPE_BCC' => 'bcc',
        
    ],    
    'TicketFieldType' => [
        'TYPE_LIST' => 'list',
        'TYPE_TEXT' => 'text',
        'TYPE_CHECKBOX' => 'checkbox',

        
    ],    
    'TicketReference' => [
        'READEN' => 0,
        'NOT_READEN' => 1,
    ],    
    'TicketStatus' => [
       
        'SYSTEM_NONE' => 'none',
        'SYSTEM_NEW' => 'new',
        'SYSTEM_OPENED' => 'opened',
        'SYSTEM_SOLVED' => 'solved',
        'SYSTEM_CLOSED' => 'closed',
        'SYSTEM_DELETED' => 'deleted',
        'SYSTEM_PENDING' => 'pending',
        'SYSTEM_IN_PROGRESS' => 'in_progress',
        'SYSTEM_SPAM' => 'spam',
        'SYSTEM_DELIVERY' => 'delivery',
        'SYSTEM_MERGED' => 'merged',
    ],    
    'TicketVariable' => [
        'VARIABLE_COMPANY_NAME' => 'company_name',
        'VARIABLE_COMPANY_EMAIL' => 'company_email',
        'VARIABLE_COMPANY_PHONE' => 'company_phone',
        'VARIABLE_USER_NAME' => 'user_name',
        'VARIABLE_USER_EMAIL' => 'user_email',
        'VARIABLE_USER_PHONE' => 'user_phone',
        'VARIABLE_USER_POSITION' => 'user_position',
        'VARIABLE_CLIENT_NAME' => 'client_name',
        'VARIABLE_CLIENT_EMAIL' => 'client_email',
        'VARIABLE_CLIENT_PHONE' => 'client_phone',
        'VARIALBE_CLIENT_POSITION' => 'client_position',
        'VARIABLE_CLIENT_COMPANY_NAME' => 'client_company_name',
        'VARIABLE_TICKET_ID' => 'ticket_id',
        'VARIABLE_TICKET_SUBJECT' => 'ticket_subject',
        'NPS_RATING' => 'nps_rating',
        'NPS_COMMENT' => 'nps_comment',
        'NPS' => 'nps',
        'TICKET_MESSAGE' => 'ticket_message',
        'FIRST_TICKET_MESSAGE' => 'ticket_message_first',
        'LAST_TICKET_MESSAGE' => 'ticket_message_last',
        'LAST_USER_MESSAGE' => 'user_message_last',
        'VARIABLE_TICKET_ATTACHMENTS' => 'ticket_attachments',
        'VARIABLE_LAST_TICKET_COMMENT_ATTACHMENTS' => 'last_ticket_comment_attachments',
        'VARIABLE_FIRST_TICKET_COMMENT_ATTACHMENTS' => 'first_ticket_comment_attachments',
        
    ],    
    'TriggerChange' => [
        'TARGET_TYPE' => 'type',
        'TARGET_PRIORITY' => 'priority',
        'TARGET_STATUS' => 'status',
        'TARGET_ASSIGNEE' => 'assignee',
        'TARGET_TAGS' => 'tags',
        'TARGET_NEW_TAGS' => 'new_tags',
        'TARGET_REMOVED_TAGS' => 'removed_tags',
        'TARGET_UPDATE_CLIENT' => 'client',
        'TARGET_TICKET_MERGE' => 'merge',
        'TARGET_TICKET_USER_MERGE' => 'user_merge',
        'TARGET_TICKET_USER_MERGE_MAIN' => 'user_merge_main',
        'TARGET_SUBJECT' => 'subject',
        'TARGET_MESSAGE' => 'message',
        'TARGET_COMMENT' => 'comment',
        'TARGET_NEW_TICKET' => 'new_ticket',
        'TARGET_USE_MACROS' => 'use_macros',
        'TARGET_USER_MESSAGE' => 'user_message',
        'TARGET_SEND_EMAIL' => 'send_email',
        'TARGET_GROUP' => 'group',
        'TARGET_SLA_FIRST_REPLY_TIME' => 'sla_first_reply_time',
        'TARGET_SLA_NEXT_REPLY_TIME' => 'sla_next_reply_time',
        'TARGET_SLA_CLOSE_TIME' => 'sla_close_time',
        'TARGET_TICKET_FIELD' => 'ticket_field',
        'TARGET_CLIENT_COMPANY' => 'client_company',
        'TARGET_CHANNEL' => 'ticket_channel',
        'TARGET_CLIENT_CONTACT' => 'client_contact',
        
    ],    
    'TriggerCondition' => [
        'BOOLEAN_AND' => 'and',
        'BOOLEAN_OR' => 'or',

        'TARGET_CLIENT_NAME' => 'client_name',
        'TARGET_CLIENT_EMAIL' => 'client_email',
        'TARGET_CLIENT_TYPE' => 'client_type',
        'TARGET_CHANNEL' => 'channel',
        'TARGET_STATUS' => 'status',
        'TARGET_ASSIGNEE' => 'assignee',
        'TARGET_SUBJECT' => 'subject',
        'TARGET_COMMENT' => 'comment',
        'TARGET_TAG' => 'tag',
        'TARGET_PUBLISHED_AT' => 'published_at',
        'TARGET_LAST_UPDATED_AT' => 'last_updated_at',
        'TARGET_LAST_USER_COMMENTED_AT' => 'last_user_commented_at',
        'TARGET_LAST_CLIENT_COMMENTED_AT' => 'last_client_commented_at',
        'TARGET_ATTACHMENT' => 'attach',
        'TARGET_NPS_RATING' => 'nps_rating',
        'TARGET_NPS_COMMENT' => 'nps_comment',
        'TARGET_NPS_COMMENT_TEXT' => 'nps_comment_text',
        'TARGET_GROUP' => 'group',
        'TARGET_TICKET_PRIORITY' => 'ticket_priority',
        'TARGET_SLA_BEFORE_NEXT_FAIL' => 'sla_before_next_fail',
        'TARGET_SLA_AFTER_LAST_FAIL' => 'sla_after_last_fail',
        'TARGET_CLIENT_COMPANY' => 'client_company',

        'CONDITION_DEFAULT_EQUALS' => 'equals',
        'CONDITION_DEFAULT_NOT_EQUALS' => 'not_equals',

        'CONDITION_TICKET_FIELD_EQUALS' => 'ticket_field_equals',
        'CONDITION_TICKET_FIELD_NOT_EQUAL' => 'ticket_field_is_not_equal',

        'CONDITION_TEXT_CONTAINS' => 'text_contains',
        'CONDITION_TEXT_NOT_CONTAINS' => 'text_not_contains',
        'CONDITION_TEXT_EQUALS' => 'text_equals',
        'CONDITION_TEXT_NOT_EQUALS' => 'text_not_equals',
        'CONDITION_TEXT_STARTS_WITH' => 'text_starts_with',
        'CONDITION_TEXT_ENDS_WITH' => 'text_ends_with',
        'CONDITION_TEXT_CONTAINS_REGEXP' => 'text_contains_regexp',

        'CONDITION_DATETIME_PASSED' => 'datetime_passed',
        'CONDITION_DATETIME_NOT_PASSED' => 'datetime_not_passed',
        'CONDITION_DATETIME_EQUALS' => 'datetime_equals',
        'CONDITION_DATETIME_LESS_THAN' => 'datetime_less_than',
        'CONDITION_DATETIME_MORE_THAN' => 'datetime_more_than',
        'CONDITION_DATETIME_TIME_RANGE' => 'datetime_time_range',
        'CONDITION_DATETIME_WORKING_TIME' => 'datetime_working_time',
    //STATUS CONDITION
        'CONDITION_STATUS_CHANGE_TO' => 'status_change_to',
        'CONDITION_STATUS_CHANGE_FROM' => 'status_change_from',
        'CONDITION_STATUS_NOT_CHANGE_TO' => 'status_not_change_to',
        'CONDITION_STATUS_NOT_CHANGE_FROM' => 'status_not_change_from',
    //---------------
        'CONDITION_TICKET_PRIORITY_NOT_EQUALS' => 'ticket_priority_not_equals',
        'CONDITION_TICKET_PRIORITY_EQUALS' => 'ticket_priority_equals',
        'CONDITION_TICKET_PRIORITY_MORE' => 'ticket_priority_more',
        'CONDITION_TICKET_PRIORITY_LESS' => 'ticket_priority_less',

        'CONDITION_ATTACHMENT_NOT_CONTAINS' => 'attachment_not_contains',
        'CONDITION_ATTACHMENT_CONTAINS' => 'attachment_contains',
        'CONDITION_ATTACHMENT' => 'attachment',

        'CONDITION_GROUP_NOT_EQUALS' => 'group_not_equals',
        'CONDITION_GROUP_EQUALS' => 'group_equals',

        'CONDITION_NPS_COMMENT_ADDED' => 'nps_comment_added',

        'CONDITION_SLA_CALENDAR_LESS' => 'sla_calendar_less',
        'CONDITION_SLA_CALENDAR_MORE' => 'sla_calendar_more',
        'CONDITION_SLA_CALENDAR_EQUAL' => 'sla_calendar_equal',
        'CONDITION_SLA_WORKING_TIME_LESS' => 'sla_working_time_less',
        'CONDITION_SLA_WORKING_TIME_MORE' => 'sla_working_time_more',
        'CONDITION_SLA_WORKING_TIME_EQUAL' => 'sla_working_time_equal',

        'VALUE_DATETIME_WORKING_TIME' => 'working_time',
        'VALUE_DATETIME_NOT_WORKING_TIME' => 'not_working_time',

        'VALUE_ATTACHMENT_NOT_CONTAINS' =>  'attachment_not_contains',
        'VALUE_ATTACHMENT_CONTAINS' =>  'attachment_contains',

        'VALUE_NPS_COMMENT_ADDED' =>  'nps_comment_added',
        'VALUE_NPS_COMMENT_NOT_ADDED' =>  'nps_comment_not_added',
        'VALUE_GROUP' => "group",
        'VALUE_TICKET_PRIORITY' => "ticket_priority",
        'VALIDATION_C_REPEAT_NOT_ALLOWED' => 'c_repeat_not_allowed',
        'VALIDATION_V_REPEAT_NOT_ALLOWED' => 'v_repeat_not_allowed',
        'VALIDATION_C_NOT_ALLOWED' => 'c_not_allowed',
    ],    
    'User' => [
        'ROLE_ADMIN' => 'admin',
        'ROLE_EMPLOYEE' => 'employee',
        'ROLE_SUPPORT' => 'support',
        'REPLY_BEHAVIOR_CURRENT' => 'current',
        'REPLY_BEHAVIOR_NEXT' => 'next',
        'REPLY_BEHAVIOR_LIST' => 'list',
    ],    
    'UserGroupPermission' => [
        'PERMISSION_TICKETS' => 'tickets',
        'PERMISSION_CLIENTS' => 'clients',
        'PERMISSION_REPORTS' => 'reports',
        'PERMISSION_CHANNELS' => 'channels',
        'PERMISSION_MACROSES' => 'macroses',
        'PERMISSION_TRIGGERS' => 'triggers',
        'PERMISSION_SETTINGS' => 'settings',
        'PERMISSION_BILLING' => 'billing',
        'PERMISSION_SUPPORT' => 'support',
        'PERMISSION_BLOCKS' => 'blocks',
    ],    
    'UserNotification' => [
        'TYPE_TICKET_NEW' => 'ticket_new',
        'TYPE_TICKET_ASSIGNED_TO_ME' => 'ticket_assigned_to_me',
        'TYPE_TICKET_REFERENCE_ME' => 'ticket_reference_me',
        'TYPE_TICKET_ASSIGNED' => 'ticket_assigned',
        'TYPE_CLIENT_REPLIED_TO_UNASSIGNED' => 'client_replied_to_unassigned',
        'TYPE_CLIENT_REPLIED_TO_MY' => 'client_replied_to_my',
        'TYPE_CLIENT_REPLIED_TO_ASSIGNED' => 'client_replied_to_assigned',
        'TYPE_USER_REPLIED_TO_UNASSIGNED' => 'user_replied_to_unassigned',
        'TYPE_USER_REPLIED_TO_MY' => 'user_replied_to_my',
        'TYPE_USER_REPLIED_TO_ASSIGNED' => 'user_replied_to_assigned',
    ],    
    'BaseAction' => [
        'ACTION_UPDATE_TYPE' => 'update_type',
        'ACTION_UPDATE_PRIORITY' => 'update_priority',
        'ACTION_CREATE_COMMENT' => 'create_comment',
        'ACTION_CREATE_PRIVATE_COMMENT' => 'create_private_comment',
        'ACTION_UPDATE_STATUS' => 'update_status',
        'ACTION_UPDATE_ASSIGNEE' => 'update_assignee',
        'ACTION_UPDATE_CLIENT' => 'update_client',
        'ACTION_ADD_TAGS' => 'add_tags',
        'ACTION_DELETE_TAGS' => 'delete_tags',
        'ACTION_UPDATE_SUBJECT' => 'update_subject',
        'ACTION_USER_MESSAGE' => 'user_message',
        'ACTION_SEND_EMAIL' => 'send_email',
        'ACTION_UPDATE_GROUP' => 'update_group',
        'ACTION_GET_QUERY' => 'post_query',
        'ACTION_POST_QUERY' => 'get_query',
        'ACTION_UPDATE_COMPANY' => 'update_company',
        'ACTION_UPDATE_CHANNEL_N' => 'update_channel_n',
        'ACTION_UPDATE_MESSAGE_TYPE_N' => 'update_message_type_n',
        'ACTION_UPDATE_CLIENT_BY_EMAIL_N' => 'update_client_by_email_n',
    ],
];

    // 'NpsSetting' => [
    //     'LANG_EN' => 'en',
    //     'LANG_RU' => 'ru',
    //     'LANG_ES' => 'es',
    //     'LANG_PL' => 'pl',
    // ],   
    //user

        // 'LANG_EN' => 'en',
        // 'LANG_RU' => 'ru',
        // 'LANG_ES' => 'es',


    

        