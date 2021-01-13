<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_type_id');
            $table->string('title');
            $table->string('project_url');
            $table->string('image');
            $table->longText('description');
            $table->string('slug');
            $table->tinyInteger('isActive')->default(1);
            $table->tinyInteger('rank')->default(0);
            $table->timestamps();
            $table->foreign('project_type_id')
                ->references('id')
                ->on('project_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}
