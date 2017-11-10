<?php

class MacrosesCategoryController extends BaseController
{
    protected $categoryRepository;
    protected $service;

    function __construct(CategoryRepository $categoryRepository,Curl $curl)
    {
        $this->categoryRepository = $categoryRepository;
        $this->service = $curl
    }

//black-list  страница настроек https://devsecure.usedesk.ru/settings/black-white-list
    public function getIndex() 
    {
        return view('user.black_white_list.index', [
            'blackList' => $blackList,
            'whiteList' => $whiteList,
        ]);
    }

    public function postSave() 
    {
        return back();
    }

//ai - страница настроек интеграции   https://secure.usedesk.ru/ai/settings
    public function aiSettings()
    {
        return view('user.ai.settings_form', [
            'settings'
        ]);
    }
    //сохранение настроек
    public function editAiSettings()
    {
        return redirect()->route('user.ai.settings');
    }
//sla
    public function getIndex()
    {
        return view('user.sla.index', [
            'options'
            'use_work_time'
        ]);
    }

    public function postSave()
    {
        return back(); 
    }
// Настройка проверки теста https://secure.usedesk.ru/settings/text-settings
    public function getIndex()
    {
        return view('user.text_settings.index', [
            'textSettings'
        ]);
    }

    public function postSave()
    {
        return back();
    }
//session
    public function saveToSession()
    {
        
    }
}