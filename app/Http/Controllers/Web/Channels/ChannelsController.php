<?php

use Illuminate\Support\Facades\Crypt;
use UseDesk\Email\ImapConnection;
use UseDesk\Email\SmtpConnection;
use UseDesk\Google\GmailApi;

// CRUD каналов https://secure.usedesk.ru/settings/channels  Методы для создания каналов разных типов.
class ChannelsController extends BaseController {

    protected $channelRepository;

    function __construct(ChannelRepository $channelRepository)
    {
        $this->EmailChannelRepository = $EmailChannelRepository;
        // $this->ticketStatusRepository = $ticketStatusRepository;
        // $this->ticketRepository = $ticketRepository;
        // $this->chatRepository = $chatRepository;
        // $this->ticketCommentRepository = $ticketCommentRepository;
        // $this->triggerRepository = $triggerRepository;

        $this->channelRepository = $channelRepository;
        $this->service = $validation;
    }
    
    public function getIndex() 
    {
        return view('user.company_email_channels.index', [
            'emailChannels',
            'apiClients'
        ]);
    }

    public function getEdit($id = null) 
    {
       
    }

    public function postEdit($id = null) 
    {
       
    }

    public function getDelete($id) 
    {
       
    }

    public function ajaxDeleteChannel()
    {
       
    }
}


