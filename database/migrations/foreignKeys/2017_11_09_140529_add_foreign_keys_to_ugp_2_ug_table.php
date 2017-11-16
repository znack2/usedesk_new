<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUgp2UgTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ugp_2_ug', function(Blueprint $table)
		{
			$table->foreign('user_group_id')->references('id')->on('user_groups')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_group_permission_id')->references('id')->on('user_group_permissions')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ugp_2_ug', function(Blueprint $table)
		{
			$table->dropForeign('ugp_2_ug_user_group_id_foreign');
			$table->dropForeign('ugp_2_ug_user_group_permission_id_foreign');
		});
	}

}
