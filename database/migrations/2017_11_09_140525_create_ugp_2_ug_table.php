<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUgp2UgTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ugp_2_ug', function(Blueprint $table)
		{
			$table->integer('user_group_permission_id')->unsigned()->index('ugp_2_ug_user_group_permission_id_foreign');
			$table->integer('user_group_id')->unsigned()->index('ugp_2_ug_user_group_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ugp_2_ug');
	}

}
