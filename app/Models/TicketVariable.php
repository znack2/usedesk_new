<?php

namespace App\Models;

class TicketVariable extends BaseModel {

    const VARIABLE_COMPANY_NAME = 'company_name';
    const VARIABLE_COMPANY_EMAIL = 'company_email';
    const VARIABLE_COMPANY_PHONE = 'company_phone';
    const VARIABLE_USER_NAME = 'user_name';
    const VARIABLE_USER_EMAIL = 'user_email';
    const VARIABLE_USER_PHONE = 'user_phone';
    const VARIABLE_USER_POSITION = 'user_position';
    const VARIABLE_CLIENT_NAME = 'client_name';
    const VARIABLE_CLIENT_EMAIL = 'client_email';
    const VARIABLE_CLIENT_PHONE = 'client_phone';
    const VARIALBE_CLIENT_POSITION = 'client_position';
    const VARIABLE_CLIENT_COMPANY_NAME = 'client_company_name';
    const VARIABLE_TICKET_ID = 'ticket_id';
    const VARIABLE_TICKET_SUBJECT = 'ticket_subject';
    const NPS_RATING = 'nps_rating';
    const NPS_COMMENT = 'nps_comment';
    const NPS = 'nps';
    const TICKET_MESSAGE = 'ticket_message';
    const FIRST_TICKET_MESSAGE = 'ticket_message_first';
    const LAST_TICKET_MESSAGE = 'ticket_message_last';
    const LAST_USER_MESSAGE = 'user_message_last';
    const VARIABLE_TICKET_ATTACHMENTS = 'ticket_attachments';
    const VARIABLE_LAST_TICKET_COMMENT_ATTACHMENTS = 'last_ticket_comment_attachments';
    const VARIABLE_FIRST_TICKET_COMMENT_ATTACHMENTS = 'first_ticket_comment_attachments';
    public $timestamps = false;

    protected $table = 'ticket_variables';
    protected $fillable = ['name', 'key', 'description', 'enabled'];
}
