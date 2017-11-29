<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketFiltersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_filters', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('data', 65535)->nullable();
			$table->integer('user_id')->unsigned()->index('ticket_filters_user_id_foreign');
			$table->integer('for_all_company_id')->unsigned()->nullable();
			$table->integer('for_group_id')->unsigned()->nullable();
			$table->integer('parent_id')->unsigned()->nullable();
			$table->integer('company_id')->unsigned()->nullable()->index('company_id');
			$table->integer('integration_id');
			$table->boolean('public')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_filters');
	}

}
