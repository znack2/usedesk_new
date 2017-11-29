<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistrationRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registration_requests', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('data', 65535);
			$table->integer('sms_confirmation_id')->unsigned()->nullable()->index('registration_requests_sms_confirmation_id_foreign');
			$table->dateTime('requested_at');//->default('0000-00-00 00:00:00');
			$table->boolean('confirmed')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('registration_requests');
	}

}
