<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSettingsLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('settings_log', function(Blueprint $table)
		{
			$table->foreign('user_id', 'settings_log_ibfk_4')->references('id')->on('users')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('admin_id', 'settings_log_ibfk_5')->references('id')->on('admins')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('company_id', 'settings_log_ibfk_6')->references('id')->on('companies')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('settings_log', function(Blueprint $table)
		{
			$table->dropForeign('settings_log_ibfk_4');
			$table->dropForeign('settings_log_ibfk_5');
			$table->dropForeign('settings_log_ibfk_6');
		});
	}

}
