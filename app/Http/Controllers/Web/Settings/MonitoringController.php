<?php

use UseDesk\Strings\Translit;
use \UseDesk\Twitter\Twitter;
use UseDesk\Validator\Token;

class MonitoringController extends BaseController
{
    
    public function getIndex($type = 'new') 
    {
       	return view('user.monitoring.index', [
            'type',
            'posts',
            'links',
            'keywords',
            'channels',
            'class',
            'classes'
        ]);
    }
    
    public function process() 
    {
       
    }

    public function clear() 
    {
       return redirect()->route('user.monitoring.get_index');
    }


}