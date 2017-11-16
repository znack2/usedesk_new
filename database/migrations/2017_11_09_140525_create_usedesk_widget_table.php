<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsedeskWidgetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usedesk_widget', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('company_id')->unsigned()->index('company_id');
			$table->integer('company_email_channel_id')->unsigned()->nullable()->index('company_email_channel_id');
			$table->string('title')->nullable();
			$table->string('color')->default('#32a8d9');
			$table->enum('icon', array('usedesk'))->default('usedesk');
			$table->boolean('attachment')->default(1);
			$table->text('topics', 65535)->nullable();
			$table->boolean('auto_init')->default(1);
			$table->integer('z_index')->unsigned()->default(1050);
			$table->boolean('docs')->default(1);
			$table->enum('language', array('RU','EN','ES','GR'))->default('RU');
			$table->integer('support_account_id')->nullable()->index('support_account_id');
			$table->boolean('show_badge')->nullable();
			$table->text('badge_text', 65535)->nullable();
			$table->string('badge_text_color', 30)->nullable();
			$table->string('badge_color', 30)->nullable();
			$table->integer('badge_show_timeout')->nullable();
			$table->string('aligment', 20)->default('right');
			$table->string('main_icon');
			$table->integer('badge_font_size')->default(12);
			$table->string('powered_by');
			$table->text('custom_fields', 65535);
			$table->text('skipping_fields', 65535);
			$table->boolean('knowledge_base_callback_button')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usedesk_widget');
	}

}
