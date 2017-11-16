<?php

class TicketVariablesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		//\DB::table('ticket_variables')->delete();
        
		\DB::table('ticket_variables')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Название компании',
				'key' => 'company_name',
				'description' => '',
				'enabled' => 1,
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Почта компании',
				'key' => 'company_email',
				'description' => '',
				'enabled' => 1,
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'Телефон компании',
				'key' => 'company_phone',
				'description' => '',
				'enabled' => 1,
			),
			3 => 
			array (
				'id' => 4,
				'name' => 'Имя агента',
				'key' => 'user_name',
				'description' => '',
				'enabled' => 1,
			),
			4 => 
			array (
				'id' => 5,
				'name' => 'Почта агента',
				'key' => 'user_email',
				'description' => '',
				'enabled' => 1,
			),
			5 => 
			array (
				'id' => 6,
				'name' => 'Телефон агента',
				'key' => 'user_phone',
				'description' => '',
				'enabled' => 1,
			),
			6 => 
			array (
				'id' => 7,
				'name' => 'Должность агента',
				'key' => 'user_position',
				'description' => '',
				'enabled' => 1,
			),
			7 => 
			array (
				'id' => 8,
				'name' => 'Имя клиента',
				'key' => 'client_name',
				'description' => '',
				'enabled' => 1,
			),
			8 => 
			array (
				'id' => 9,
				'name' => 'Email клиента',
				'key' => 'client_email',
				'description' => '',
				'enabled' => 1,
			),
			9 => 
			array (
				'id' => 10,
				'name' => 'Телефон клиента',
				'key' => 'client_phone',
				'description' => '',
				'enabled' => 1,
			),
			10 => 
			array (
				'id' => 11,
				'name' => 'Должность клиента',
				'key' => 'client_position',
				'description' => '',
				'enabled' => 1,
			),
			11 => 
			array (
				'id' => 12,
				'name' => 'Номер запроса',
				'key' => 'ticket_id',
				'description' => '',
				'enabled' => 1,
			),
			12 => 
			array (
				'id' => 13,
				'name' => 'Тема письма',
				'key' => 'ticket_subject',
				'description' => '',
				'enabled' => 1,
			),
			13 => 
			array (
				'id' => 14,
				'name' => 'Nps',
				'key' => 'nps',
				'description' => NULL,
				'enabled' => 1,
			),
			14 => 
			array (
				'id' => 15,
				'name' => 'Nps rating',
				'key' => 'nps_rating',
				'description' => NULL,
				'enabled' => 1,
			),
			15 => 
			array (
				'id' => 16,
				'name' => 'Nps comment',
				'key' => 'nps_comment',
				'description' => NULL,
				'enabled' => 1,
			),
			16 => 
			array (
				'id' => 17,
				'name' => 'Первое сообщение',
				'key' => 'ticket_message_first',
				'description' => NULL,
				'enabled' => 1,
			),
			17 => 
			array (
				'id' => 19,
				'name' => 'Последнее сообщение',
				'key' => 'ticket_message_last',
				'description' => NULL,
				'enabled' => 1,
			),
			18 => 
			array (
				'id' => 21,
				'name' => 'Сообщение клиента или агента',
				'key' => 'ticket_message',
				'description' => NULL,
				'enabled' => 1,
			),
			19 => 
			array (
				'id' => 23,
				'name' => 'Последнее сообщение агента',
				'key' => 'user_message_last',
				'description' => NULL,
				'enabled' => 1,
			),
			20 => 
			array (
				'id' => 26,
				'name' => 'Имя компании клиента',
				'key' => 'client_company_name',
				'description' => NULL,
				'enabled' => 1,
			),
			21 => 
			array (
				'id' => 28,
				'name' => 'Все вложения запроса',
				'key' => 'ticket_attachments',
				'description' => NULL,
				'enabled' => 1,
			),
			22 => 
			array (
				'id' => 30,
				'name' => 'Вложения в первом комментарии',
				'key' => 'first_ticket_comment_attachments',
				'description' => NULL,
				'enabled' => 1,
			),
			23 => 
			array (
				'id' => 32,
				'name' => 'Вложения в последнем комментарии',
				'key' => 'last_ticket_comment_attachments',
				'description' => NULL,
				'enabled' => 1,
			),
			24 => 
			array (
				'id' => 36,
				'name' => 'Переписка в виде цитаты',
				'key' => 'quoted_ticket_comments',
				'description' => NULL,
				'enabled' => 1,
			),
		));
	}

}
