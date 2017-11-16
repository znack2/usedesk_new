<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsedeskWidgetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usedesk_widget', function(Blueprint $table)
		{
			$table->foreign('company_id', 'usedesk_widget_ibfk_3')->references('id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('company_email_channel_id', 'usedesk_widget_ibfk_4')->references('id')->on('company_email_channels')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('support_account_id', 'usedesk_widget_ibfk_6')->references('id')->on('uh_accoutns')->onUpdate('SET NULL')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usedesk_widget', function(Blueprint $table)
		{
			$table->dropForeign('usedesk_widget_ibfk_3');
			$table->dropForeign('usedesk_widget_ibfk_4');
			$table->dropForeign('usedesk_widget_ibfk_6');
		});
	}

}
