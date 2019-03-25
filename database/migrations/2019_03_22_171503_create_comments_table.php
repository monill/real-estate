<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('blog_id');
            $table->string('ip', 70);
            $table->string('name', 100);
            $table->string('email', 100);
            $table->text('message');
            $table->boolean('allowed')->default(false);
            $table->timestamps();

            $table->index('blog_id');

            $table->foreign('blog_id')->references('id')->on('blogs')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
