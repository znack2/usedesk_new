<?php

namespace App\Models;

class TriggerChange extends BaseModel
{

    const TARGET_TYPE = 'type';
    const TARGET_PRIORITY = 'priority';
    const TARGET_STATUS = 'status';
    const TARGET_ASSIGNEE = 'assignee';
    const TARGET_TAGS = 'tags';
    const TARGET_NEW_TAGS = 'new_tags';
    const TARGET_REMOVED_TAGS = 'removed_tags';
    const TARGET_UPDATE_CLIENT = 'client';
    const TARGET_TICKET_MERGE = 'merge';
    const TARGET_TICKET_USER_MERGE = 'user_merge';
    const TARGET_TICKET_USER_MERGE_MAIN = 'user_merge_main';
    const TARGET_SUBJECT = 'subject';
    const TARGET_MESSAGE = 'message';
    const TARGET_COMMENT = 'comment';
    const TARGET_NEW_TICKET = 'new_ticket';
    const TARGET_USE_MACROS = 'use_macros';
    const TARGET_USER_MESSAGE = 'user_message';
    const TARGET_SEND_EMAIL = 'send_email';
    const TARGET_GROUP = 'group';
    const TARGET_SLA_FIRST_REPLY_TIME = 'sla_first_reply_time';
    const TARGET_SLA_NEXT_REPLY_TIME = 'sla_next_reply_time';
    const TARGET_SLA_CLOSE_TIME = 'sla_close_time';
    const TARGET_TICKET_FIELD = 'ticket_field';
    const TARGET_CLIENT_COMPANY = 'client_company';
    const TARGET_CHANNEL = 'ticket_channel';
    const TARGET_CLIENT_CONTACT = 'client_contact';

    public $timestamps = false;

    protected $table = 'trigger_changes';
    protected $fillable = [
        'trigger_id',
        'user_id',
        'ticket_id',
        'data',
        'changed_at',
        'company_id'
    ];

    public function trigger()
    {
        return $this->belongsTo('Trigger');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function ticket()
    {
        return $this->belongsTo('Ticket');
    }
}
