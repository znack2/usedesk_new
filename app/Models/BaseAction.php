<?php

namespace App\Models;

abstract class BaseAction extends BaseModel {

    const ACTION_UPDATE_TYPE = 'update_type';
    const ACTION_UPDATE_PRIORITY = 'update_priority';
    const ACTION_CREATE_COMMENT = 'create_comment';
    const ACTION_CREATE_PRIVATE_COMMENT = 'create_private_comment';
    const ACTION_UPDATE_STATUS = 'update_status';
    const ACTION_UPDATE_ASSIGNEE = 'update_assignee';
    const ACTION_UPDATE_CLIENT = 'update_client';
    const ACTION_ADD_TAGS = 'add_tags';
    const ACTION_DELETE_TAGS = 'delete_tags';
    const ACTION_UPDATE_SUBJECT = 'update_subject';
    const ACTION_USER_MESSAGE = 'user_message';
    const ACTION_SEND_EMAIL = 'send_email';
    const ACTION_UPDATE_GROUP = 'update_group';
    const ACTION_GET_QUERY = 'post_query';
    const ACTION_POST_QUERY = 'get_query';
    const ACTION_UPDATE_COMPANY = 'update_company';

    const ACTION_UPDATE_CHANNEL_N = 'update_channel_n';
    const ACTION_UPDATE_MESSAGE_TYPE_N = 'update_message_type_n';
    const ACTION_UPDATE_CLIENT_BY_EMAIL_N = 'update_client_by_email_n';
}
