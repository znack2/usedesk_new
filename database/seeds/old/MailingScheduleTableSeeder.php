<?php

class MailingScheduleTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		//\DB::table('mailing_schedule')->delete();
        
		\DB::table('mailing_schedule')->insert(array (
			0 => 
			array (
				'id' => 1,
				'status' => 'nothing',
				'time_elapsed' => 24,
				'template' => '1.0',
			),
			1 => 
			array (
				'id' => 2,
				'status' => 'some',
				'time_elapsed' => 24,
				'template' => '1.1',
			),
			2 => 
			array (
				'id' => 3,
				'status' => 'all',
				'time_elapsed' => 24,
				'template' => '1.2',
			),
			3 => 
			array (
				'id' => 4,
				'status' => 'nothing',
				'time_elapsed' => 168,
				'template' => '3.0',
			),
			4 => 
			array (
				'id' => 6,
				'status' => 'all',
				'time_elapsed' => 168,
				'template' => '3.2',
			),
			5 => 
			array (
				'id' => 7,
				'status' => 'nothing',
				'time_elapsed' => 336,
				'template' => '4.0',
			),
			6 => 
			array (
				'id' => 8,
				'status' => 'some',
				'time_elapsed' => 336,
				'template' => '4.1',
			),
			7 => 
			array (
				'id' => 9,
				'status' => 'all',
				'time_elapsed' => 336,
				'template' => '4.1',
			),
			8 => 
			array (
				'id' => 11,
				'status' => 'some',
				'time_elapsed' => 600,
				'template' => '6.1',
			),
			9 => 
			array (
				'id' => 12,
				'status' => 'all',
				'time_elapsed' => 600,
				'template' => '6.1',
			),
			10 => 
			array (
				'id' => 13,
				'status' => 'nothing',
				'time_elapsed' => 24,
				'template' => '0.5',
			),
		));
	}

}
