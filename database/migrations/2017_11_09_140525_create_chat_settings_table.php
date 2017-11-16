<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChatSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chat_settings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('channel_id');
			$table->integer('company_id')->unsigned()->unique('company');
			$table->string('company_email');
			$table->string('color');
			$table->boolean('status');
			$table->boolean('auto_init');
			$table->integer('z_index');
			$table->boolean('docs');
			$table->string('language');
			$table->boolean('reaction');
			$table->text('reaction_text', 65535);
			$table->string('icon');
			$table->boolean('attachment');
			$table->string('topics');
			$table->boolean('work_time');
			$table->text('greeting_text', 65535);
			$table->text('start_text', 65535);
			$table->string('powered_by');
			$table->boolean('is_email');
			$table->string('trigger_name');
			$table->string('header_text_color', 100);
			$table->string('b_сolor', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('chat_settings');
	}

}
