<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationImagesTable extends Migration
{
    public function up()
    {
        Schema::create('destination_images', function (Blueprint $table) {
            $table->id();
            $table->string('destination');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('destination_images');
    }
}
