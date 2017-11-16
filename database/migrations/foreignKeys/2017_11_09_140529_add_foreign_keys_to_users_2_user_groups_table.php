<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsers2UserGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_2_user_groups', function(Blueprint $table)
		{
			$table->foreign('user_group_id')->references('id')->on('user_groups')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_2_user_groups', function(Blueprint $table)
		{
			$table->dropForeign('users_2_user_groups_user_group_id_foreign');
			$table->dropForeign('users_2_user_groups_user_id_foreign');
		});
	}

}
