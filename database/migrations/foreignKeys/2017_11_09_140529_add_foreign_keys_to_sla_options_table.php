<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSlaOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sla_options', function(Blueprint $table)
		{
			$table->foreign('sla_id', 'sla_options_ibfk_5')->references('id')->on('sla')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('priority_id', 'sla_options_ibfk_6')->references('id')->on('sla_priorities')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('sla_option_type_id', 'sla_options_ibfk_8')->references('id')->on('sla_option_types')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sla_options', function(Blueprint $table)
		{
			$table->dropForeign('sla_options_ibfk_5');
			$table->dropForeign('sla_options_ibfk_6');
			$table->dropForeign('sla_options_ibfk_8');
		});
	}

}
