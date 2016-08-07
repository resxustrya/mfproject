<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Application extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('application', function($table){
			$table->increments('applicationid');
			$table->integer('appid');
			$table->string('position',50)->nullable();
			$table->string('salary',50)->nullable();
			$table->string('jobtype',50)->nullable();
			$table->string('edlevel',50)->nullable();
			$table->integer('regionid');
			$table->string('nationality',50)->nullable();
			$table->string('pitch', 200)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('application');
	}
}
