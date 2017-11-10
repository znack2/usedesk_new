<?php

//Обновления в системе https://secure.usedesk.ru/system-updates

class SystemUpdatesController extends BaseController {

    public function getIndex() 
    {
       return view('user.system_updates.index', [
            'systemUpdates'
        ]);
    }

}
