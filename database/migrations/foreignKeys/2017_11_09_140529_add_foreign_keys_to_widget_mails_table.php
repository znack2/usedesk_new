<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWidgetMailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('widget_mails', function(Blueprint $table)
		{
			$table->foreign('company_id', 'widget_mails_ibfk_1')->references('id')->on('companies')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('company_email_channel_id', 'widget_mails_ibfk_2')->references('id')->on('company_email_channels')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('widget_mails', function(Blueprint $table)
		{
			$table->dropForeign('widget_mails_ibfk_1');
			$table->dropForeign('widget_mails_ibfk_2');
		});
	}

}
