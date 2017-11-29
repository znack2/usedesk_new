<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMonitoringTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('monitoring', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id')->unsigned()->index('monitoring_company_id_foreign');
			$table->boolean('enable_admin')->default(0);
			$table->boolean('enable_user_vk')->default(0);
			$table->boolean('enable_user_twitter')->default(0);
			$table->boolean('enable_user_facebook')->default(0);
			$table->integer('day_to_archive')->default(4);
			$table->integer('max_word_count')->default(5);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('monitoring');
	}

}
