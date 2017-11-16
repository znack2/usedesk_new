<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_fields', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id')->unsigned()->index('company_id');
			$table->integer('ticket_field_type_id')->unsigned()->index('ticket_field_type_id');
			$table->string('name');
			$table->text('value', 65535)->nullable();
			$table->boolean('required')->default(0);
			$table->boolean('add_tag')->default(1);
			$table->boolean('add_filter')->default(1);
			$table->integer('sort')->unsigned()->default(0);
			$table->boolean('active')->default(1);
			$table->boolean('hidden')->default(0);
			$table->boolean('api')->default(0);
			$table->boolean('deleted')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_fields');
	}

}
