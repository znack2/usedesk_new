<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('avatar')->nullable();
			$table->text('my_signature')->nullable();
			$table->text('use_signature');
			$table->string('name');
			$table->string('position')->nullable();
			$table->string('phone')->nullable();
			$table->text('note', 65535)->nullable();
			$table->enum('role', array('admin','employee','support'))->default('admin');
			$table->integer('user_group_id')->unsigned()->nullable()->index('users_user_group_id_foreign');
			$table->boolean('is_first')->default(0);
			$table->enum('reply_behavior', array('current','next','list'))->default('current');
			$table->integer('company_id')->unsigned()->index('users_company_id_foreign');
			$table->dateTime('last_su_viewed')->nullable();
			$table->string('remember_token', 100)->nullable();
			$table->string('zendesk_id')->nullable();
			$table->enum('lang', array('en','ru','es','gr'))->default('ru');
			$table->string('confirmation_code')->nullable();
			$table->boolean('confirmed')->default(0);
			$table->integer('default_group')->unsigned()->nullable()->index('users_default_group_foreign');
			$table->boolean('status')->default(1);
			$table->integer('deleted');
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
