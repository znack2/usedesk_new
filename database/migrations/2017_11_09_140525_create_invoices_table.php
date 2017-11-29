<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->decimal('amount');
			$table->enum('status', array('paid','not_paid','awaiting_confirmation'));
			$table->string('document_copy')->nullable();
			$table->dateTime('created_at');//->default('0000-00-00 00:00:00');
			$table->dateTime('deadline');//->default('0000-00-00 00:00:00');
			$table->boolean('blocking')->default(0);
			$table->integer('company_id')->unsigned()->index('invoices_company_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('invoices');
	}

}
