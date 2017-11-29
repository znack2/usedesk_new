<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWidgetMailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('widget_mails', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id')->unsigned()->index('company_id');
			$table->integer('company_email_channel_id')->unsigned()->index('company_email_channel_id');
			$table->string('subject');
			$table->string('name');
			$table->string('email');
			$table->text('message', 65535)->nullable();
			$table->text('files', 65535)->nullable();
			$table->boolean('is_read')->default(0);
			$table->integer('ticket_id')->unsigned()->default(0);
			$table->text('additional_parameters', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('widget_mails');
	}

}
