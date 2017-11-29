<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMacroses2UserGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('macroses_2_user_groups', function(Blueprint $table)
		{
			$table->foreign('macros_id', 'macroses_2_user_groups_ibfk_1')->references('id')->on('macroses')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_group_id', 'macroses_2_user_groups_ibfk_2')->references('id')->on('user_groups')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('macroses_2_user_groups', function(Blueprint $table)
		{
			$table->dropForeign('macroses_2_user_groups_ibfk_1');
			$table->dropForeign('macroses_2_user_groups_ibfk_2');
		});
	}

}
