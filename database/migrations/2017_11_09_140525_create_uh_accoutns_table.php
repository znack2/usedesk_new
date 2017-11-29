<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUhAccoutnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uh_accoutns', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title');
			$table->string('logo')->nullable();
			$table->char('bg_color', 6)->nullable();
			$table->char('header_color', 6)->nullable();
			$table->char('text_color', 6)->nullable();
			$table->char('link_bg', 6)->nullable();
			$table->char('link_color', 6)->nullable();
			$table->char('nav_link_color', 6)->nullable();
			$table->text('header_code', 65535)->nullable();
			$table->text('footer_code', 65535)->nullable();
			$table->string('site_url')->nullable();
			$table->string('home_link_text')->nullable();
			$table->string('email')->nullable();
			$table->string('description')->nullable();
			$table->string('domain');
			$table->integer('company_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('uh_accoutns');
	}

}
