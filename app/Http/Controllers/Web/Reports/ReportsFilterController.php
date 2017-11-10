<?php

class ReportsFilterController extends BaseController {

    private $is_local;

    function __construct($is_local = false)
    {
        $this->is_local = $is_local;
    }

    public function getTypes()
    {
        
    }

    public function getChannelType()
    {
        return $this->response
                    ->json(self::$types);
    }

    public function getChannelList($types = null)
    {
        return $this->response
                    ->json($channels);
    }

    public function getTags()
    {

    }

    public function getUserGroups()
    {
        return $this->response
                    ->json($groups);
    }

    public function getUsers()
    {
        return $this->response
                    ->json($arUsers);
    }

    public function getRatings()
    {
        return $this->response
                    ->json($ratings);
    }

    public function getCommentExists()
    {
        return $this->response
                    ->json($res);
    }
}