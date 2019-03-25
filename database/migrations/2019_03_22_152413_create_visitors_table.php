<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip', 70);
            $table->string('country', 45)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('estate', 100)->nullable();
            $table->string('browser', 100)->nullable();
            $table->string('system', 100)->nullable();
            $table->string('device', 100)->nullable();
            $table->boolean('mobile')->default('0');
            $table->boolean('phone')->default('0');
            $table->boolean('tablet')->default('0');
            $table->boolean('desktop')->default('0');
            $table->boolean('bot')->default('0');
            $table->text('referrer')->nullable();
            $table->string('loadtime', 45)->nullable();
            $table->unsignedSmallInteger('numaccess')->default('1');
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
        Schema::dropIfExists('visitors');
    }
}
