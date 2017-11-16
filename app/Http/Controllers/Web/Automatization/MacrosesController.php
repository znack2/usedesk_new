<?php

use App\Repository\MacrosRepository;

class MacrosesController extends BaseController {

    protected $macrosRepository;

    function __construct(MacrosRepository $macrosRepository)
    {
        $this->macrosRepository = $macrosRepository;
    }
    
    public function getIndex($status = null) 
    {
       return $view('user.macroses.index', [
            'result',
            'deleted'
        ]);
    }

    public function getEdit($id = null) 
    {
       return $view('user.macroses.edit_iframe', [
            'user',
            'macros',
            'groups',
            'firstGroup',
            'success',
            'category_id'
        ]);
    }

    public function postSave() 
    {
       // return ['redirect' => URL::route('user.macroses.get_edit', ['id'=> $macros_id, 'success' => 'Y'])];
    }

    public function getDelete($id, $isPost = false)
    {
       return redirect()->route('user.macroses.get_index');
    }
}