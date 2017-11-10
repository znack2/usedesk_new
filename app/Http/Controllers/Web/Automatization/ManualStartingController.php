<?php

class ManualStartingController extends BaseController {

    protected $triigerRepository;

    function __construct(TriigerRepository $triigerRepository)
    {
        $this->triigerRepository = $triigerRepository;
    }
    
    public function getManualStarting() 
    {
        return view('user.triggers.manual_starting', [
            'triggers',
            'triggerHistory',
        ]);
    }

    public function getManualStartingStart($id) 
    {
        return back();
    }

    public function postUpdatePositions() 
    {
        
    }

    public function downloadActionFile($id) 
    {
        return $this->response->download($file->file, $fileName);
    }

    public function deleteAllActionFiles($action_id) 
    {
        
    }
}