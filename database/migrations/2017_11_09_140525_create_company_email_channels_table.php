<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyEmailChannelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_email_channels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('signature', 65535)->nullable();
			$table->enum('incoming_connection', array('internal','external'));
			$table->string('internal_email')->nullable();
			$table->string('imap_host')->nullable();
			$table->integer('imap_port')->unsigned()->nullable();
			$table->string('imap_username')->nullable();
			$table->string('imap_password')->nullable();
			$table->enum('outgoing_connection', array('internal','external'));
			$table->string('from_name');
			$table->string('from_email')->nullable();
			$table->string('smtp_host')->nullable();
			$table->integer('smtp_port')->unsigned()->nullable();
			$table->string('smtp_username')->nullable();
			$table->string('smtp_password')->nullable();
			$table->boolean('unencrypted_connection');
			$table->boolean('auto_reply');
			$table->text('auto_reply_message', 65535)->nullable();
			$table->boolean('has_problem')->default(0);
			$table->integer('company_id')->unsigned();
			$table->enum('type', array('twitter','facebook','vk','gmail','chat','api','gravitel','telephony','whatshelp','usedesk_chat'))->nullable();
			$table->string('token');
			$table->integer('group_id');
			$table->boolean('quotes');
			$table->boolean('csi');
			$table->string('key');
			$table->string('redirect_url');
			$table->string('imap_encrypted', 20);
			$table->string('smtp_encrypted', 20);
			$table->boolean('problem_sent');
			$table->boolean('deleted');
			$table->dateTime('deleted_at');
			$table->integer('vk_user_id');
			$table->boolean('editor_quote')->default(0);
			$table->index(['company_id','deleted'], 'company_id_deleted');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_email_channels');
	}

}
