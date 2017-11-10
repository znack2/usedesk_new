<?php

//Настройка профиля юзера https://secure.usedesk.ru/profile
class ProfileController extends BaseController {

    public function getIndex() 
    {
        return view('user.profile.index', [
            'user'
        ]);
    }

    public function postSave() 
    {
        return back();
    }

    public function getDeleteAvatar() 
    {
        return back();
    }

    public function postSaveNotification() 
    {
        return back();
    }

}
