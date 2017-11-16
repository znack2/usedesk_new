<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMacroses2UserGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('macroses_2_user_groups', function(Blueprint $table)
		{
			$table->integer('macros_id')->unsigned();
			$table->integer('user_group_id')->unsigned()->index('user_group_id');
			$table->integer('id', true);
			$table->index(['macros_id','user_group_id'], 'macros_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('macroses_2_user_groups');
	}

}
