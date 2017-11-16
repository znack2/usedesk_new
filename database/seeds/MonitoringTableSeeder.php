<?php

class MonitoringTableSeeder extends Seeder {

    public function run()
    {
        foreach(Company::get()->toArray() as $company) {
            if (!Monitoring::where('company_id', '=', $company['id'])->exists()) {
                Monitoring::create([
                    'company_id' => $company['id'],
                    'enable_admin' => 0,
                    'enable_user_vk' => 0,
                    'enable_user_twitter' => 0,
                    'enable_user_facebook' => 0,
                    'last_update_vk' => '0000-00-00 00:00:00',
                    'last_update_twitter' => '0000-00-00 00:00:00',
                    'last_update_facebook' => '0000-00-00 00:00:00',
                ]);
            }
        }
    }

}