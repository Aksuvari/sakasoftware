<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->String('title');
            $table->String('short_des');
            $table->String('image');
            $table->longText('description');
            $table->string('slug');
            $table->tinyInteger('isActive')->default(1);
            $table->tinyInteger('rank')->default(0);
            $table->tinyInteger('anasayfa')->default('0');
            $table->tinyInteger('slider')->default('0');
            $table->timestamps();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content');
    }
}
