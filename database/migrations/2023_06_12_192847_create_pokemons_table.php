<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('slug');

            $table->string('name');
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('stat')->nullable();
            $table->string('type1')->nullable();
            $table->string('type2')->nullable();
            $table->text('spritefront')->nullable();
            $table->text('spriteback')->nullable();
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
        Schema::dropIfExists('pokemon');
    }
};
