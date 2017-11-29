<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWidgetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('widget', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('channel_id');
			$table->string('position');
			$table->string('button_text');
			$table->string('button_color');
			$table->string('button_text_color');
			$table->boolean('display_email')->default(0);
			$table->string('company_email')->nullable();
			$table->boolean('display_phone')->default(0);
			$table->string('company_phone')->nullable();
			$table->integer('company_id')->unsigned()->index('widget_company_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('widget');
	}

}
