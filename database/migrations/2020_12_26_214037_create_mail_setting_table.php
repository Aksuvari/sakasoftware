<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_setting', function (Blueprint $table) {
            $table->id();
            $table->integer("port");
            $table->string("host");
            $table->string("from");
            $table->string("to");
            $table->string("username");
            $table->string("password");
            $table->string("title");
            $table->string("protocol");
            $table->tinyInteger("isActive")->default(1);
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
        Schema::dropIfExists('mail_setting');
    }
}
