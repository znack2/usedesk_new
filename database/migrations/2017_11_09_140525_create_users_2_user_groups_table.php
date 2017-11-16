<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsers2UserGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_2_user_groups', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned()->index('users_2_user_groups_user_id_foreign');
			$table->integer('user_group_id')->unsigned()->index('users_2_user_groups_user_group_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_2_user_groups');
	}

}
