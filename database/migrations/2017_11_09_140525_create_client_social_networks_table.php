<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientSocialNetworksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_social_networks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('url');
			$table->enum('type', array('twitter','facebook','vk','ok','instagram','youtube','gplus','other'));
			$table->integer('client_id')->unsigned()->index('client_social_networks_client_id_foreign');
			$table->string('uid', 32)->nullable();
			$table->boolean('fullcontact')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('client_social_networks');
	}

}
