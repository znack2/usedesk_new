<?php

class TicketFieldTypesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		//\DB::table('ticket_field_types')->delete();
        
		\DB::table('ticket_field_types')->insert(array (
			0 => 
			array (
				'id' => 1,
				'key' => 'text',
			),
			1 => 
			array (
				'id' => 2,
				'key' => 'list',
			),
			2 => 
			array (
				'id' => 3,
				'key' => 'checkbox',
			),
		));
	}

}
