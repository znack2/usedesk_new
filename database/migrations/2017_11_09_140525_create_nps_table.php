<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nps', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('client_id');
			$table->integer('ticket_id')->unsigned()->index('nps_ticket_id_foreign');
			$table->integer('rating');
			$table->integer('company_id');
			$table->integer('ticket_comment_id')->unsigned()->nullable()->index('ticket_comment_id');
			$table->text('comment', 65535);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nps');
	}

}
