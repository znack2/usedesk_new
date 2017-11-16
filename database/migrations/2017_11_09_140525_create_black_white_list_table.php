<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlackWhiteListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('black_white_list', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email');
			$table->enum('type', array('black','white'));
			$table->integer('company_id')->unsigned()->index('black_white_list_company_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('black_white_list');
	}

}
