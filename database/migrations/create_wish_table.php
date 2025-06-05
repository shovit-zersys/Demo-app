<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('wishes', function (Blueprint $table) {
            $table->id();

            // add fields
            $table->string('name');
            $table->string('gender');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wishes');
    }
};
