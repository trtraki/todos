<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOauthUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('oauth_id');
			$table->string('oauth_user_id');
			$table->string('auth_token');
			$table->string('auth_token_secret');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_users');
	}

}
