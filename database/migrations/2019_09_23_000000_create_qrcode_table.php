<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQRCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qr_code', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('image_url');
            $table->unsignedInteger('folder_id');
            $table->string('short_code')->unique();
            $table->string('short_url');
            $table->string('target_url');
            $table->string('status');
            $table->json('style');
            $table->string('title');
            $table->integer('total_scans');
            $table->integer('trackable');
            $table->integer('unique_scans');
            $table->integer('type_id');
            $table->string('type_name');
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
