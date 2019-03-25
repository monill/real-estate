<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('ip', 70);
            $table->string('browser', 100)->nullable();
            $table->string('system', 100)->nullable();
            $table->string('device', 100)->nullable();
            $table->boolean('mobile')->default('0');
            $table->boolean('tablet')->default('0');
            $table->boolean('desktop')->default('0');
            $table->timestamps();

            $table->index('user_id');

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logins');
    }
}
