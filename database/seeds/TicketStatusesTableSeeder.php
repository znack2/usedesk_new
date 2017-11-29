<?php

class TicketStatusesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		//\DB::table('ticket_statuses')->delete();
        
		\DB::table('ticket_statuses')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Opened',
				'key' => 'opened',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Solved',
				'key' => 'solved',
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'Closed',
				'key' => 'closed',
			),
			3 => 
			array (
				'id' => 4,
				'name' => 'Deleted',
				'key' => 'deleted',
			),
			4 => 
			array (
				'id' => 5,
				'name' => 'Pending',
				'key' => 'pending',
			),
			5 => 
			array (
				'id' => 6,
				'name' => 'In progress',
				'key' => 'in_progress',
			),
			6 => 
			array (
				'id' => 7,
				'name' => 'Spam',
				'key' => 'spam',
			),
			7 => 
			array (
				'id' => 8,
				'name' => 'New',
				'key' => 'new',
			),
			8 => 
			array (
				'id' => 9,
				'name' => 'Delivery',
				'key' => 'delivery',
			),
			9 => 
			array (
				'id' => 10,
				'name' => 'Merged',
				'key' => 'merged',
			),
		));
	}

}
