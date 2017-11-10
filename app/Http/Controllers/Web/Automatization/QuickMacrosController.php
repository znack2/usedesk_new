<?php

use App\Repository\MacrosRepository;

class QuickMacrosController extends BaseController
{
    protected $macrosRepository;

    function __construct(MacrosRepository $macrosRepository)
    {
        $this->macrosRepository = $macrosRepository;
    }

    public function getQuickMacros()
    {
        return view('user.macroses.quick_macroses');
    }

    public function chatDeleteQuickMacros()
    {
        
    }

    public function chatSaveQuickMacros()
    {
       return json_encode(['status'=>'error']);
    }

    public function createQuickMacroses()
    {
       return json_encode(['status'=>true]);
    }

    public function getQuickMacrossList()
    {
       
    }

    public function deleteQuickMacross()
    {
        
    }

    public function updateQuickMacross()
    {
       
    }
}