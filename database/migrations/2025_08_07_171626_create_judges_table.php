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
        Schema::create('judges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('age', 3);
            $table->string('gender', 10);
            $table->string('identification_card', 20)->unique();
            $table->string('phone_number', 15)->unique();
            $table->string('email')->unique();
            $table->string('place_birth');
            $table->string('department');
            $table->string('residence');
            //agregando nuevos atributos de prueba
            $table->string('ethnicity');
            $table->string('address');
            $table->string('nationality');
            //agregando nuevos atributos de prueba
            $table->string('country');
            $table->string('marital_status');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('judges');
    }
};
