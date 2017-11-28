<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Horizon\Horizon;
use App\Models\User;
use App\Observers\UserObserver;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        User::observe(UserObserver::class);
//        Client
//        Ticket
//        Sla
//        SlaOption
//        ClientCompany
//        TriggerCondition
//        TriggerChange
//        TicketFieldValue
//        TicketField
//        TicketComment
//        CompanyWorkingDay
//        CompanyIntegration
//        CompanyBilling
//        ClientEmail

//        usergroup
//        ticketFieldOption
//        companyCustomBlockParam
//        companyCustomBlock
//        copanyContacts
//        twitter
//        blackWhiteList
//        TicketReference
//        npsSetting
//        nps



        //only admin can see it
        // Horizon::auth(function($auth){
        //     return ($auth()->user()->id == 1) && ($auth()->user()->role == 'ADMIN');
        // });

// just without wrap data
//        Resource::withoutWrapping();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
