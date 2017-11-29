<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyCustomBlocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_custom_blocks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id')->unsigned()->index('company_id');
			$table->enum('type', array('static','dynamic'));
			$table->string('name');
			$table->string('title');
			$table->text('text', 65535);
			$table->string('url')->default('');
			$table->string('secret_key')->default('');
			$table->integer('sort')->unsigned()->default(0);
			$table->boolean('active')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_custom_blocks');
	}

}
