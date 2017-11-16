<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payment', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('payu_ref');
			$table->float('amount');
			$table->text('status', 65535);
			$table->integer('invoice_id')->unsigned()->index('payment_invoice_id_foreign');
			$table->integer('company_id')->unsigned()->index('payment_company_id_foreign');
			$table->dateTime('date_create');
			$table->dateTime('date_update');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('payment');
	}

}
