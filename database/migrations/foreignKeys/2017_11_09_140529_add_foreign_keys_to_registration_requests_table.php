<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRegistrationRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('registration_requests', function(Blueprint $table)
		{
			$table->foreign('sms_confirmation_id')->references('id')->on('sms_confirmations')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('registration_requests', function(Blueprint $table)
		{
			$table->dropForeign('registration_requests_sms_confirmation_id_foreign');
		});
	}

}
