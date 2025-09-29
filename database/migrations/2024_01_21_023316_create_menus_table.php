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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('Picture1');
            $table->string('FoodName1');
            $table->text('FoodDescribe1');
            $table->string('FoodKalori1');
            $table->string('FoodProtein1');
            $table->string('FoodFat1');
            $table->string('FoodCarbohydrates1');
            $table->string('FoodFiber1');
            $table->string('Picture2');
            $table->string('FoodName2');
            $table->text('FoodDescribe2');
            $table->string('FoodKalori2');
            $table->string('FoodProtein2');
            $table->string('FoodFat2');
            $table->string('FoodCarbohydrates2');
            $table->string('FoodFiber2');
            $table->string('Picture3');
            $table->string('FoodName3');
            $table->text('FoodDescribe3');
            $table->string('FoodKalori3');
            $table->string('FoodProtein3');
            $table->string('FoodFat3');
            $table->string('FoodCarbohydrates3');
            $table->string('FoodFiber3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
