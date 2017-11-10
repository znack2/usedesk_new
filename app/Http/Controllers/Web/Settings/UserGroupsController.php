<?php

use App\Repository\UserGroupsRepository;

class UserGroupsController extends BaseController {

    protected $userGroupsRepository;

    function __construct(UserGroupsRepository $userGroupsRepository)
    {
        $this->userGroupsRepository = $userGroupsRepository;
    }

    public function getIndex()
    {
       return $view('user.user_groups.index', [
            'groups'
        ]);
    }

    public function getEdit($id = null)
    {
        return $view('user.user_groups.edit', [
            'group',
            'groups',
            'permissions',
            'users',
            'channels',
            'admins'
        ]);
    }

    public function postEdit($id = null)
    {
         return redirect()->route('user.user_groups.get_index');
    }

    public function getDelete($id)
    {
        return redirect()->route('user.user_groups.get_index');
    }

    public function getPermissionsAjax($id)
    {
       
    }
}