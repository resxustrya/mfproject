<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ad extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ad', function($table) {
			$table->increments('adid');
			$table->integer('empid')->nullable();
			$table->integer('regionid')->nullable();
			$table->string('startdate',50)->nullable();
			$table->string('capacity',50)->nullable();
			$table->double('salary')->nullable();
			$table->string('pitch')->nullable();
			$table->integer('dayof')->nullable();
			$table->string('gender', 10)->nullable();
			$table->integer('edlevel')->nullable();
			$table->integer('contractyears')->nullable();
			$table->integer('jobtypeid')->nullable();
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
		Schema::drop('ad');
	}

}
