<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTicketTags2ClientCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ticket_tags_2_client_companies', function(Blueprint $table)
		{
			$table->foreign('ticket_tag_id', 'ticket_tags_2_client_companies_ibfk_3')->references('id')->on('ticket_tags')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('client_company_id', 'ticket_tags_2_client_companies_ibfk_4')->references('id')->on('client_companies')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ticket_tags_2_client_companies', function(Blueprint $table)
		{
			$table->dropForeign('ticket_tags_2_client_companies_ibfk_3');
			$table->dropForeign('ticket_tags_2_client_companies_ibfk_4');
		});
	}

}
