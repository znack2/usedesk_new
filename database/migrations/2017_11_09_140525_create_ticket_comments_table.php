<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('type', array('public','private'));
			$table->mediumText('message')->nullable();
			$table->boolean('is_html')->default(0);
			$table->enum('from', array('user','client','trigger'));
			$table->integer('user_id')->unsigned()->nullable()->index('ticket_comments_user_id_foreign');
			$table->integer('client_id')->unsigned()->nullable()->index('ticket_comments_client_id_foreign');
			$table->integer('ticket_id')->unsigned()->index('ticket_comments_ticket_id_foreign');
			$table->integer('group_id')->unsigned()->nullable()->index('group_id');
			$table->boolean('is_first')->default(0);
			$table->integer('time')->unsigned()->nullable();
			$table->boolean('by_mandrill')->default(0);
			$table->string('mandrill_id')->nullable()->unique('mandrill_id');
			$table->boolean('mandrill_delivered')->default(0);
			$table->boolean('mandrill_readed')->default(0);
			$table->dateTime('published_at')->default('0000-00-00 00:00:00')->index('published_at');
			$table->string('extra_headers', 500)->nullable();
			$table->integer('vk_id')->nullable();
			$table->string('twitter_id', 24)->nullable();
			$table->integer('trigger_id')->nullable();
			$table->boolean('mandrill_bounce')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_comments');
	}

}
