<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketTags2QuickMacrosesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_tags_2_quick_macroses', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('quick_macros_id')->index('quick_macros_id');
			$table->integer('ticket_tag_id')->unsigned()->index('ticket_tag_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_tags_2_quick_macroses');
	}

}
