<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('users', function (Blueprint $table) {
			$table->string('nickname');
			$table->string('surname');
			$table->string('avatar');
			$table->string('phone');
			$table->enum('sex', ['male', 'female']);
			$table->boolean('allowMailing');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
			$table->dropColumn([
				'nickname', 
				'surname', 
				'avatar', 
				'phone', 
				'sex', 
				'allowMailing'
			]);
		});
    }
}
