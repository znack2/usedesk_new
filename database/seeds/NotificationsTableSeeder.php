<?php

class NotificationsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		//\DB::table('notifications')->delete();
        
		\DB::table('notifications')->insert(array (
			0 => 
			array (
				'id' => 1,
				'keyword' => 'ticket_new',
				'status' => 1,
			),
			1 => 
			array (
				'id' => 2,
				'keyword' => 'ticket_assigned_to_me',
				'status' => 1,
			),
			2 => 
			array (
				'id' => 3,
				'keyword' => 'user_mentioned',
				'status' => 1,
			),
			3 => 
			array (
				'id' => 4,
				'keyword' => 'ticket_assigned',
				'status' => 1,
			),
			4 => 
			array (
				'id' => 5,
				'keyword' => 'client_replied_to_unassigned',
				'status' => 1,
			),
			5 => 
			array (
				'id' => 6,
				'keyword' => 'client_replied_to_my',
				'status' => 1,
			),
			6 => 
			array (
				'id' => 7,
				'keyword' => 'client_replied_to_assigned',
				'status' => 1,
			),
			7 => 
			array (
				'id' => 8,
				'keyword' => 'user_replied_to_unassigned',
				'status' => 1,
			),
			8 => 
			array (
				'id' => 9,
				'keyword' => 'user_replied_to_my',
				'status' => 1,
			),
			9 => 
			array (
				'id' => 10,
				'keyword' => 'user_replied_to_assigned',
				'status' => 0,
			),
			10 => 
			array (
				'id' => 11,
				'keyword' => 'comment_to_assigned_ticket',
				'status' => 0,
			),
			11 => 
			array (
				'id' => 12,
				'keyword' => 'comment_to_unassigned_ticket',
				'status' => 0,
			),
			12 => 
			array (
				'id' => 13,
				'keyword' => 'comment_to_my_ticket',
				'status' => 1,
			),
			13 => 
			array (
				'id' => 14,
				'keyword' => 'user-valued-to-my',
				'status' => 1,
			),
			14 => 
			array (
				'id' => 15,
				'keyword' => 'user-valued-to-assigned',
				'status' => 1,
			),
			15 => 
			array (
				'id' => 16,
				'keyword' => 'ticket_assigned_to_group',
				'status' => 1,
			),
			16 => 
			array (
				'id' => 18,
				'keyword' => 'user_offline',
				'status' => 1,
			),
		));
	}

}
