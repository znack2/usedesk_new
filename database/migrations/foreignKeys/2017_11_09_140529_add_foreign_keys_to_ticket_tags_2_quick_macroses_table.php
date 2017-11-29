<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketTags2QuickMacrosesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_tags_2_quick_macroses', function(Blueprint $table)
		{
			$table->foreign('quick_macros_id', 'ticket_tags_2_quick_macroses_ibfk_1')->references('id')->on('quick_macroses')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('ticket_tag_id', 'ticket_tags_2_quick_macroses_ibfk_2')->references('id')->on('ticket_tags')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_tags_2_quick_macroses', function(Blueprint $table)
		{
			$table->dropForeign('ticket_tags_2_quick_macroses_ibfk_1');
			$table->dropForeign('ticket_tags_2_quick_macroses_ibfk_2');
		});
	}

}
