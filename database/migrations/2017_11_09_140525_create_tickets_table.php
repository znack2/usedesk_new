<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tickets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('subject')->nullable();
			$table->enum('type', array('question','task','problem','incident'));
			$table->enum('priority', array('low','medium','urgent','extreme'));
			$table->integer('status_id')->unsigned();
			$table->integer('client_id')->unsigned()->index('tickets_client_id_foreign');
			$table->integer('assignee_id')->unsigned()->nullable()->index('tickets_assignee_id_foreign');
			$table->enum('channel', array('email','facebook','twitter-direct','twitter-mention','vk','chat','api','gravitel','telephony','whatshelp','usedesk_chat'));
			$table->integer('email_channel_id')->unsigned()->nullable()->index('tickets_email_channel_id_foreign');
			$table->string('email_channel_subject')->nullable();
			$table->string('email_channel_email')->nullable();
			$table->integer('company_id')->unsigned();
			$table->string('social_id')->nullable();
			$table->dateTime('status_updated_at');//->default('0000-00-00 00:00:00');
			$table->dateTime('last_updated_at');//->default('0000-00-00 00:00:00')->index('last_updated_at');
			$table->dateTime('published_at');//->default('0000-00-00 00:00:00')->index('published_at');
			$table->dateTime('last_viewed_at')->nullable();
			$table->string('zendesk_id')->nullable();
			$table->integer('owner_id')->nullable();
			$table->float('spam_score', 10, 0)->nullable();
			$table->string('notification_email');
			$table->boolean('nps_sent');
			$table->integer('group')->unsigned()->nullable()->index('tickets_group_foreign');
			$table->string('additional_id');
			$table->string('telephony_id');
			$table->string('contact')->nullable();
			$table->index(['status_id','company_id'], 'status_id_company_id');
			$table->index(['company_id','status_id','last_updated_at'], 'company_id_status_id_last_updated_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tickets');
	}

}
