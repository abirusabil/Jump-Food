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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('UserId')->foreign()->references('id')->on('users');
            $table->string('FullName')->nullable();
            $table->string('Picture')->nullable();
            $table->string('Gender')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->date('DateOfBirth')->nullable();
            $table->text('FullAddress')->nullable();
            $table->decimal('Weight')->nullable();
            $table->decimal('Height')->nullable();
            $table->text('Activity')->nullable();
            $table->text('Allergic')->nullable();
            $table->text('SpecificDiet')->nullable();
            $table->text('HealthCondition')->nullable();
            $table->text('PrimaryGoal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
