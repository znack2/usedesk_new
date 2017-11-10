<?php

use UseDesk\Strings\Translit;
use \UseDesk\Twitter\Twitter;
use UseDesk\Validator\Token;

class MonitoringSettingsController extends BaseController
{
    public function getSettings() 
    {
        return $view('user.monitoring.settings', [
            'monitor',
            'keywords',
            'classes',
            'accounts'
        ]);
    }

    public function postSettings() 
    {
        return redirect()->route
                     ->back();
    }

    public function postDeleteKeyword($id) 
    {
      
    }

    public function postDeleteClass($id) 
    {
        
    }


}