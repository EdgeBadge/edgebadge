<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBadgesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('badges', function(Blueprint $table)
		{
			$table->increments('badgeID');
			$table->string('name')->unique();
			$table->string('about');
			$table->string('criteriaurl');
			$table->integer('fk_BadgeImage');
			$table->integer('fk_SubjectGroup');
			$table->integer('fk_IssueID');
			$table->integer('fk_ParentBadge');
			$table->string('fk_Creator');
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
		Schema::drop('badges');
	}

}
