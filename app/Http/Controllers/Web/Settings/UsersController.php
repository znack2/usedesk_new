<?php

use App\Repository\UsersRepository;

class UsersController extends BaseController {

    protected $usersRepository;
    protected $service;

    function __construct(UsersRepository $usersRepository,Mail $mail)
    {
        $this->usersRepository = $usersRepository;
        $this->service = $mail
        $this->passwordHelper = new PasswordHelper;
    }

    public function getIndex() 
    {
        return view('user.users.index', [
            'users'
            'admins' 
            'employees'
            'supports'
            'allow_create'
        ]);
    }

    public function getEdit($id = null) 
    {
        return view('user.users.edit', [
            'user'
            'groups'
            'firstGroup'
            'toomuchusers'
            'groupsWithUser'
            'triggers'
            'macros'
            'tickets'
        ]);
    }

    public function getCreate($role = null) 
    {
        return view('user.users.edit', [
            'user',
            'groups',
            'firstGroup',
            'toomuchusers',
            'groupsWithUser',
            'triggers',
            'macros',
            'tickets',
            'create_all'
        ]);
    }

    public function postEdit($id = null) 
    {
        
    }

    public function getDelete($id) 
    {
       return redirect()->route('user.users.get_index');
    }
}