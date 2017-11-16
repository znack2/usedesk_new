<?php

namespace App\Models;

class TriggerCondition extends BaseModel
{

    public $timestamps = false;
    public $regexp_matches = [];

    protected $table = 'trigger_conditions';
    protected $fillable = ['boolean', 'target', 'condition', 'value', 'trigger_id', 'word_form'];

    const BOOLEAN_AND = 'and';
    const BOOLEAN_OR = 'or';

    const TARGET_CLIENT_NAME = 'client_name';
    const TARGET_CLIENT_EMAIL = 'client_email';
    const TARGET_CLIENT_TYPE = 'client_type';
    const TARGET_CHANNEL = 'channel';
    const TARGET_STATUS = 'status';
    const TARGET_ASSIGNEE = 'assignee';
    const TARGET_SUBJECT = 'subject';
    const TARGET_COMMENT = 'comment';
    const TARGET_TAG = 'tag';
    const TARGET_PUBLISHED_AT = 'published_at';
    const TARGET_LAST_UPDATED_AT = 'last_updated_at';
    const TARGET_LAST_USER_COMMENTED_AT = 'last_user_commented_at';
    const TARGET_LAST_CLIENT_COMMENTED_AT = 'last_client_commented_at';
    const TARGET_ATTACHMENT = 'attach';
    const TARGET_NPS_RATING = 'nps_rating';
    const TARGET_NPS_COMMENT = 'nps_comment';
    const TARGET_NPS_COMMENT_TEXT = 'nps_comment_text';
    const TARGET_GROUP = 'group';
    const TARGET_TICKET_PRIORITY = 'ticket_priority';
    const TARGET_SLA_BEFORE_NEXT_FAIL = 'sla_before_next_fail';
    const TARGET_SLA_AFTER_LAST_FAIL = 'sla_after_last_fail';
    const TARGET_CLIENT_COMPANY = 'client_company';

    const CONDITION_DEFAULT_EQUALS = 'equals';
    const CONDITION_DEFAULT_NOT_EQUALS = 'not_equals';

    const CONDITION_TICKET_FIELD_EQUALS = 'ticket_field_equals';
    const CONDITION_TICKET_FIELD_NOT_EQUAL = 'ticket_field_is_not_equal';

    const CONDITION_TEXT_CONTAINS = 'text_contains';
    const CONDITION_TEXT_NOT_CONTAINS = 'text_not_contains';
    const CONDITION_TEXT_EQUALS = 'text_equals';
    const CONDITION_TEXT_NOT_EQUALS = 'text_not_equals';
    const CONDITION_TEXT_STARTS_WITH = 'text_starts_with';
    const CONDITION_TEXT_ENDS_WITH = 'text_ends_with';
    const CONDITION_TEXT_CONTAINS_REGEXP = 'text_contains_regexp';

    const CONDITION_DATETIME_PASSED = 'datetime_passed';
    const CONDITION_DATETIME_NOT_PASSED = 'datetime_not_passed';
    const CONDITION_DATETIME_EQUALS = 'datetime_equals';
    const CONDITION_DATETIME_LESS_THAN = 'datetime_less_than';
    const CONDITION_DATETIME_MORE_THAN = 'datetime_more_than';
    const CONDITION_DATETIME_TIME_RANGE = 'datetime_time_range';
    const CONDITION_DATETIME_WORKING_TIME = 'datetime_working_time';
    //STATUS CONDITION
    const CONDITION_STATUS_CHANGE_TO = 'status_change_to';
    const CONDITION_STATUS_CHANGE_FROM = 'status_change_from';
    const CONDITION_STATUS_NOT_CHANGE_TO = 'status_not_change_to';
    const CONDITION_STATUS_NOT_CHANGE_FROM = 'status_not_change_from';
    //---------------
    const CONDITION_TICKET_PRIORITY_NOT_EQUALS = 'ticket_priority_not_equals';
    const CONDITION_TICKET_PRIORITY_EQUALS = 'ticket_priority_equals';
    const CONDITION_TICKET_PRIORITY_MORE = 'ticket_priority_more';
    const CONDITION_TICKET_PRIORITY_LESS = 'ticket_priority_less';

    const CONDITION_ATTACHMENT_NOT_CONTAINS = 'attachment_not_contains';
    const CONDITION_ATTACHMENT_CONTAINS = 'attachment_contains';
    const CONDITION_ATTACHMENT = 'attachment';

    const CONDITION_GROUP_NOT_EQUALS = 'group_not_equals';
    const CONDITION_GROUP_EQUALS = 'group_equals';

    const CONDITION_NPS_COMMENT_ADDED = 'nps_comment_added';

    const CONDITION_SLA_CALENDAR_LESS = 'sla_calendar_less';
    const CONDITION_SLA_CALENDAR_MORE = 'sla_calendar_more';
    const CONDITION_SLA_CALENDAR_EQUAL = 'sla_calendar_equal';
    const CONDITION_SLA_WORKING_TIME_LESS = 'sla_working_time_less';
    const CONDITION_SLA_WORKING_TIME_MORE = 'sla_working_time_more';
    const CONDITION_SLA_WORKING_TIME_EQUAL = 'sla_working_time_equal';

    const VALUE_DATETIME_WORKING_TIME = 'working_time';
    const VALUE_DATETIME_NOT_WORKING_TIME = 'not_working_time';

    const VALUE_ATTACHMENT_NOT_CONTAINS =  'attachment_not_contains';
    const VALUE_ATTACHMENT_CONTAINS =  'attachment_contains';

    const VALUE_NPS_COMMENT_ADDED =  'nps_comment_added';
    const VALUE_NPS_COMMENT_NOT_ADDED =  'nps_comment_not_added';
    const VALUE_GROUP = "group";
    const VALUE_TICKET_PRIORITY = "ticket_priority";

    const VALIDATION_C_REPEAT_NOT_ALLOWED = 'c_repeat_not_allowed';
    const VALIDATION_V_REPEAT_NOT_ALLOWED = 'v_repeat_not_allowed';
    const VALIDATION_C_NOT_ALLOWED = 'c_not_allowed';

    public function trigger()
    {
        return $this->belongsTo('Trigger');
    }


}
