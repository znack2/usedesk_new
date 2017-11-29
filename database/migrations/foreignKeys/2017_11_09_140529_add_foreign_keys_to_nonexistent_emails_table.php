<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNonexistentEmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('nonexistent_emails', function(Blueprint $table)
		{
			$table->foreign('company_id', 'nonexistent_emails_ibfk_1')->references('id')->on('companies')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('nonexistent_emails', function(Blueprint $table)
		{
			$table->dropForeign('nonexistent_emails_ibfk_1');
		});
	}

}
