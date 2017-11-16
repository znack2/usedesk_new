<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMacrosesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('macroses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('message', 65535);
			$table->boolean('enabled')->default(1);
			$table->integer('company_id')->unsigned()->index('macroses_company_id_foreign');
			$table->integer('for_user_id')->nullable();
			$table->enum('privacy', array('private','all','groups'))->default('all');
			$table->boolean('sort')->default(0);
			$table->dateTime('updated_at')->default('0000-00-00 00:00:00');
			$table->integer('changed_by_user')->unsigned()->nullable()->index('	macroses_changed_by_user_foreign');
			$table->boolean('deleted');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('macroses');
	}

}
