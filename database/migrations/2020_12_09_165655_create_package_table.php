<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id');
            $table->string('title');
            $table->longText('description');
            $table->string('label');
            $table->string('slug');
            $table->tinyInteger('isActive')->default(1);
            $table->tinyInteger('anasayfa')->default('0');
            $table->tinyInteger('rank')->default(0);
            $table->timestamps();
            $table->foreign('package_id')
                ->references('id')
                ->on('package_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package');
    }
}
