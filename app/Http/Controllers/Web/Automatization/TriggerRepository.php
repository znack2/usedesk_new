<?php

use App\Repository\TriggerRepository;

class TriggersController extends BaseController {

    protected $triggerRepository;

    function __construct(TriggerRepository $triggerRepository)
    {
        $this->triggerRepository = $triggerRepository;
    }

    public function getIndex($status = null) 
    {
        return view('user.triggers.index', [
            'triggersEnabled',
            'triggersDisabled',
            'deleted'
        ]);
    }

    public function getEdit($id = null) 
    {
        return view('user.triggers.edit', [
            'trigger'
        ]);
    }

    public function postEdit($id = null) 
    {
        // return ['redirect' => URL::route('user.triggers.get_index')];
    }
    
    public function getDelete($id) 
    {
        return back();
    }
}