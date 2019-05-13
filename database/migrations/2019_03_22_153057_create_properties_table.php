<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('category_id');

            $table->string('name');
            $table->string('slug');

            $table->tinyInteger('purpose'); // 1 - Rent, 2 - Sale
            $table->tinyInteger('type'); // 1 - House, 2 - Apartamento, 3 - Terreno, 4 - Flat

            $table->decimal('price', 18,2);
            $table->string('address');
            $table->integer('bathrooms')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('garage')->nullable();
            $table->integer('year')->nullable();
            $table->integer('views')->default(0);

            $table->string('city', 50);
            $table->string('area', 50);
            $table->text('description');

            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();

            $table->string('video1')->nullable(); //youtube
            $table->string('video2')->nullable(); //youtube

            $table->boolean('slider')->default(false);
            $table->boolean('featured')->default(false);
            $table->timestamps();

            $table->index('user_id');
            $table->index('category_id');

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('category_id')->references('id')->on('categories')
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
        Schema::dropIfExists('properties');
    }
}
