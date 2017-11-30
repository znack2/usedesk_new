<?php

class SlaOptionTypesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		//\DB::table('sla_option_types')->delete();
        
		\DB::table('sla_option_types')->insert(array (
			0 => 
			array (
				'id' => 1,
				'key' => 'first_reply_time',
			),
			1 => 
			array (
				'id' => 2,
				'key' => 'next_reply_time',
			),
			2 => 
			array (
				'id' => 3,
				'key' => 'close_time',
			),
		));
	}

}
