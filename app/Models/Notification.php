<?php

namespace App\Models;

class Notification extends BaseModel
{
    const TYPE_TICKET_NEW = 'ticket_new';//????? ?????
    const TYPE_TICKET_ASSIGNED_TO_ME = 'ticket_assigned_to_me'; //????? ???????? ?? ????
    const TYPE_TICKET_ASSIGNED_TO_GROUP = 'ticket_assigned_to_group'; //????? ???????? ?? ????
    const TYPE_TICKET_REFERENCE_ME = 'user_mentioned';// ???????????? ???????? ? ??????
    const TYPE_TICKET_ASSIGNED = 'ticket_assigned';//????? ????????
    const TYPE_CLIENT_REPLIED_TO_UNASSIGNED = 'client_replied_to_unassigned'; // ?????? ??????? ?? ???????????? ?????
    const TYPE_CLIENT_REPLIED_TO_MY = 'client_replied_to_my'; // ?????? ??????? ???
    const TYPE_CLIENT_REPLIED_TO_ASSIGNED = 'client_replied_to_assigned'; // ?????? ??????? ?????????????
    const TYPE_USER_REPLIED_TO_UNASSIGNED = 'user_replied_to_unassigned'; //
    const TYPE_USER_REPLIED_TO_MY = 'user_replied_to_my'; // ???????????? ??????? ???
    const TYPE_USER_REPLIED_TO_ASSIGNED = 'user_replied_to_assigned';
    const TYPE_COMMENT_TO_ASSIGNED_TICKET = 'comment_to_assigned_ticket';
    const TYPE_COMMENT_TO_UNASSIGNED_TICKET = 'comment_to_unassigned_ticket';
    const TYPE_COMMENT_TO_MY_TICKET = 'comment_to_my_ticket';
    const USER_VALUED_TO_MY = 'user-valued-to-my';
    const USER_VALUED_TO_ASSIGNED = 'user-valued-to-assigned';
    public $timestamps = false;

    protected $table = 'notifications';

    protected $fillable = [
        'id',
        'keyword',
        'status',
    ];
}