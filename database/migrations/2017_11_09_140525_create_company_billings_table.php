<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyBillingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_billings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('users_number');
			$table->enum('data_plan', array('free','paid','trial'))->default('paid');
			$table->enum('payment_type', array('bank_card','settlement_account'))->default('bank_card');
			$table->string('card_number')->nullable();
			$table->string('card_token')->nullable();
			$table->enum('invoicing_period', array('month','year'))->default('month');
			$table->dateTime('next_invoice')->nullable();
			$table->enum('type', array('default','fixed'))->default('default');
			$table->decimal('amount')->nullable();
			$table->string('contract_number')->nullable();
			$table->date('contract_date')->nullable();
			$table->string('company_name')->nullable();
			$table->string('company_inn')->nullable();
			$table->string('company_ppc')->nullable();
			$table->string('company_bin')->nullable();
			$table->string('company_legal_address')->nullable();
			$table->string('company_actual_address')->nullable();
			$table->boolean('company_address_match')->default(1);
			$table->integer('company_id')->unsigned()->index('company_billings_company_id_foreign');
			$table->integer('additional_fields')->unsigned()->default(15);
			$table->dateTime('sended_at')->nullable();
			$table->integer('mandrill_limit')->default(1);
			$table->integer('current_message');
			$table->boolean('is_send');
			$table->string('ga_client_id')->nullable();
			$table->boolean('ga_sent')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_billings');
	}

}
