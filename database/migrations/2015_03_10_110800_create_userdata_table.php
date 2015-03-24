<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserdataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userdata', function(Blueprint $table)
		{
			$table->increments('userID');
			$table->string('personaemail')->unique();
			$table->string('email')->unique();
			$table->string('lastname');
			$table->string('firstname');
			$table->string('picURL');
			$table->text('description');
			$table->text('biography');
			$table->integer('roleID');
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
		Schema::drop('userdata');
	}

}

