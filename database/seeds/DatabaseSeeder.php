<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call('MonitoringTableSeeder');
    	$this->call('TicketStatusesTableSeeder');
		$this->call('SlaOptionTypesTableSeeder');
		$this->call('TicketFieldTypesTableSeeder');
		$this->call('IntegrationTableSeeder');
		$this->call('NotificationsTableSeeder');
		$this->call('ApiMethodsTableSeeder');
		$this->call('TicketVariablesTableSeeder');
		$this->call('ChatApiTokenTableSeeder');
		$this->call('ChatNicknameTableSeeder');
		$this->call('ConfigTableSeeder');
		$this->call('AdminTableSeeder');
		$this->call('MailingScheduleTableSeeder');
		$this->call('MigrationsNewTableSeeder');
    }
}
