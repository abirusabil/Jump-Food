<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('food_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('UserId')->foreign()->references('id')->on('users');
            $table->string('Sunday')->foreign()->references('id')->on('menus');
            $table->string('Monday')->foreign()->references('id')->on('menus');
            $table->string('Thusday')->foreign()->references('id')->on('menus');
            $table->string('Wednesday')->foreign()->references('id')->on('menus');
            $table->string('Thursday')->foreign()->references('id')->on('menus');
            $table->string('Friday')->foreign()->references('id')->on('menus');
            $table->string('Saturday')->foreign()->references('id')->on('menus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_schedules');
    }
};
