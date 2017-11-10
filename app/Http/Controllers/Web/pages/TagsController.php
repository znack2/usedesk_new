<?php

class TagsController extends BaseController{

    public function getIndex()
    {
        return view('user.tags.index',[
            'tags_by_char',
            'tags_by_num',
            'num'
        ]);
    }

    public  function apiTags()
    {
        
    }
}