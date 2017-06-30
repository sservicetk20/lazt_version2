<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_user')->default(str_random(9));
            $table->string('name');
            $table->enum('plan_id', [1,2,3])->default(1);
            $table->enum('plan', ['Gratuito','Trimestre','Perpetuo'])->default('Gratuito');
            $table->enum('type', ['admin','member','angel'])->default('member');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('verified')->default(0);
            $table->string('email_token')->index()->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
