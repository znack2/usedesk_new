<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if(env('APP_ENV') == 'testing') {
		    ini_set('memory_limit', '2048M');
		}
    	DB::disableQueryLog();

        // $this->call('MonitoringTableSeeder');
  		// $this->call('TicketStatusesTableSeeder');
		// $this->call('SlaOptionTypesTableSeeder');
		// $this->call('TicketFieldTypesTableSeeder');
		// $this->call('IntegrationTableSeeder');
		// $this->call('NotificationsTableSeeder');
		// $this->call('ApiMethodsTableSeeder');
		// $this->call('TicketVariablesTableSeeder');
		// $this->call('ChatApiTokenTableSeeder');
		// $this->call('ChatNicknameTableSeeder');
		// $this->call('ConfigTableSeeder');
		// $this->call('AdminTableSeeder');
		// $this->call('MailingScheduleTableSeeder');
		// $this->call('MigrationsNewTableSeeder');
		// $this->call('CompanySeeder');
		$this->call('CompanyCustomBlockSeeder');
		$this->command->info('Starting');
    }
}
