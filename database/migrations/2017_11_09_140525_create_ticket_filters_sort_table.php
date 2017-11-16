<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketFiltersSortTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_filters_sort', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ticket_filter_id')->unsigned()->index('ticket_filter_id');
			$table->integer('user_id')->unsigned()->index('user_id');
			$table->integer('sort')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_filters_sort');
	}

}
