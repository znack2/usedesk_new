<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTriggerConditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trigger_conditions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('boolean', array('and','or'));
			$table->string('target');
			$table->string('condition');
			$table->text('value', 65535);
			$table->text('word_form', 65535)->nullable();
			$table->integer('trigger_id')->unsigned()->index('trigger_conditions_trigger_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trigger_conditions');
	}

}
