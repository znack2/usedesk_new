<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('nps', function(Blueprint $table)
		{
			$table->foreign('ticket_comment_id')->references('id')->on('ticket_comments')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('ticket_id')->references('id')->on('tickets')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('nps', function(Blueprint $table)
		{
			$table->dropForeign('nps_ticket_comment_id_foreign');
			$table->dropForeign('nps_ticket_id_foreign');
		});
	}

}
