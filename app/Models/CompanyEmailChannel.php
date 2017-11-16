<?php

namespace App\Models;

use UseDesk\Email\SmtpConnection;

class CompanyEmailChannel extends BaseModel
{

    const CONNECTION_INTERNAL = 'internal';
    const CONNECTION_EXTERNAL = 'external';

    const TYPE_SYNC = 'sync_engine';
    const FROM_NAME_COMPANY = 'company';
    const FROM_NAME_USER = 'user';

    const IGNORE_TIME = 30; // ignore comment if it was posted in less than 30 sec after last comment
    const NO_SUBJECT = 'No subject';

    public $timestamps = false;

    protected $table = 'company_email_channels';

    //TODO: добавить поле 'is_fb_group' когда будем реализовывать кроспостинг
    protected $fillable = [
        'name',
        'signature',
        'incoming_connection',
        'internal_email',
        'imap_host',
        'imap_username',
        'imap_password',
        'imap_port',
        'outgoing_connection',
        'from_name',
        'from_email',
        'smtp_host',
        'smtp_port',
        'smtp_username',
        'smtp_password',
        'unencrypted_connection',
        'auto_reply',
        'auto_reply_message',
        'has_problem',
        'company_id',
        'type',
        'token',
        'key',
        'redirect_url',
        'group_id',
        'quotes'
    ];

    /**
     * @return BelongsTo
     */
    public function company()
    {
        return $this->belongsTo('Company');
    }

    /**
     * @return HasMany
     */
    public function tickets()
    {
        return $this->hasMany('Ticket', 'email_channel_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function fbGroup()
    {
        return $this->hasOne('FbGroup', 'channel_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function twitter()
    {
        return $this->hasOne('TwitterAccount', 'channel_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function vk()
    {
        return $this->hasOne('VkAccount', 'channel_id');
    }

    /**
     * @return BelongsToMany
     */
    public function groups()
    {
        return $this->belongsToMany('UserGroup', 'group_channel_permissions', 'channel_id', 'group_id');
    }
}