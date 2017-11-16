<?php

class AdminTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		//\DB::table('admins')->delete();

		$admin = Admin::firstOrCreate(['id' => 1]);
		$admin->email = 'support@usedesk.ru';
		$admin->setPassword('7gknPQa4');
		$admin->access_admin_management = true;
		$admin->access_company_management = true;
		$admin->access_config_management = true;
		$admin->save();

		$clientAdmin = Admin::firstOrCreate(['id' => 2]);
		$clientAdmin->email = 'client@usedesk.ru';
		$clientAdmin->setPassword('snJX3dbf');
		$clientAdmin->access_admin_management = true;
		$clientAdmin->access_company_management = true;
		$clientAdmin->access_config_management = true;
		$clientAdmin->save();

	}

}
