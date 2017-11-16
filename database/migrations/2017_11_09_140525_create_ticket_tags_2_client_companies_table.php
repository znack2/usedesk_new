<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketTags2ClientCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_tags_2_client_companies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ticket_tag_id')->unsigned()->index('ticket_tag_id');
			$table->integer('client_company_id')->unsigned()->index('client_company_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_tags_2_client_companies');
	}

}
