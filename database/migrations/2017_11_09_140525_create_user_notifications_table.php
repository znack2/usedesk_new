<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserNotificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_notifications', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ticket_new')->default(1);
			$table->integer('ticket_assigned_to_me')->default(1);
			$table->integer('ticket_assigned')->default(1);
			$table->integer('client_replied_to_unassigned')->default(1);
			$table->integer('client_replied_to_my')->default(1);
			$table->integer('client_replied_to_assigned')->default(1);
			$table->integer('user_replied_to_unassigned')->default(1);
			$table->integer('user_replied_to_my')->default(1);
			$table->integer('user_replied_to_assigned')->default(1);
			$table->integer('ticket_reference_me')->default(1);
			$table->integer('user_id')->unsigned()->index('user_notifications_user_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_notifications');
	}

}
