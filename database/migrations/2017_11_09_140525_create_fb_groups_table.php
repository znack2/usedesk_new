<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFbGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fb_groups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('fb_id', 40);
			$table->integer('channel_id')->unsigned()->index('fb_groups_channel_id_foreign');
			$table->boolean('is_active');
			$table->integer('company_id')->unsigned()->index('fb_groups_company_id_foreign');
			$table->string('token');
			$table->dateTime('date_create');
			$table->dateTime('updated_time')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fb_groups');
	}

}
