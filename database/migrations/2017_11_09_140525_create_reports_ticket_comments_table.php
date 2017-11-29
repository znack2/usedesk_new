<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReportsTicketCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reports_ticket_comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ticket_id')->unsigned()->index('ticket_id');
			$table->integer('ticket_comment_id')->unsigned()->index('ticket_comment_id');
			$table->integer('user_id')->unsigned()->index('user_id');
			$table->integer('group_id')->unsigned()->nullable()->index('group_id');
			$table->integer('company_id')->unsigned()->index('company_id');
			$table->integer('comment_time')->unsigned()->default(0);
			$table->integer('work_time')->unsigned()->default(0);
			$table->dateTime('published_at');//->default('0000-00-00 00:00:00');
			$table->boolean('is_first')->default(0);
			$table->index(['company_id','published_at','ticket_id'], 'company_id_published_at_ticket_id');
			$table->index(['user_id','published_at','ticket_id'], 'user_id_published_at_ticket_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reports_ticket_comments');
	}

}
