<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruds', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('hobby')->nullable();
            $table->string('grnder')->nullable();
            $table->bigInteger('role')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('creator')->nullable();
            $table->string('slug')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
        Schema::create('crud_image', function (Blueprint $table) {
            $table->id();
                   $table->bigInteger('crud_id')->nullable();
                   $table->bigInteger('image_id')->nullable();
            $table->timestamps();
        });


        Schema::create('crud_hobby', function (Blueprint $table) {
            $table->id();
                   $table->bigInteger('crud_id')->nullable();
                   $table->bigInteger('hobby_id')->nullable();
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
        Schema::dropIfExists('cruds');
        Schema::dropIfExists('crud_image');
        Schema::dropIfExists('crud_hobby');
    }
}
