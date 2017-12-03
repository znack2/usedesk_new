<?php

namespace App\Http\Resources\Tickets;

use Illuminate\Http\Resources\Json\Resource;

class TicketResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'subject' => $this->subject,
            'type' => $this->type,
            'priority' => $this->priority,
            'channel' => $this->channel,
            'email_channel_subject' => $this->email_channel_subject,
            'email_channel_email' => $this->email_channel_email,
            'status_updated_at' => $this->status_updated_at,
            'last_updated_at' => $this->last_updated_at,
            'published_at' => $this->published_at,
            'last_viewed_at' => $this->last_viewed_at,
            'spam_score' => $this->spam_score,
            'notification_email' => $this->notification_email,
            'nps_sent' => $this->nps_sent,
            'group' => $this->group,
            'contact' => $this->contact,

            'zendesk_id' => $this->zendesk_id,
            'owner_id' => $this->owner_id,
            'additional_id' => $this->additional_id,
            'telephony_id' => $this->telephony_id,
            'social_id' => $this->social_id,
            

//            'status_id' => TicketStatus::collection($this->posts),
//            'client_id' => Client::collection($this->posts),
//            'assignee_id' => User::collection($this->posts),
//            'email_channel_id' => CompanyEmailChannel::collection($this->posts),
//            'company_id' => Company::collection($this->posts),
        ];
    }
}
