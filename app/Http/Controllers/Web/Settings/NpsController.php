<?php

class NpsController extends BaseController
{
    protected $categoryRepository;
    protected $service;

    function __construct(CategoryRepository $categoryRepository,Curl $curl)
    {
        $this->categoryRepository = $categoryRepository;
        $this->service = $curl
    }
    //nps
    public function npsSettings()
    {
        return $view
        (
            'user.nps.settings',
            [
                'condition'
                'type'
                'active'
                'text'
                'status'
                'emails'=>$email_channel,
                'vk'=>$vk_channel,
                'facebook'=>$facebook_channel,
                'languages'
                'csi_lang' => $lang
            ]
        );
    }

    public function saveNpsSettings()
    {
        return redirect()->route('user.nps.settings');
    }

    public function nps($client, $ticket)
    {
        return $view('user.nps.form', [
            'client'
             'ticket'
        ]);
    }

    public function saveNpsRating()
    {

    }

    public function defaultNps()
    {
        return redirect()->route('user.nps.settings');
    }
}