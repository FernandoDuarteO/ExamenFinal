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
        Schema::create('legal_cases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number_file')->unique();
            $table->string('type_case');
            $table->datetime('opening_date');
            $table->string('current_status');
            $table->string('description');

            $table->integer('audience_id')->unsigned();
            $table->foreign('audience_id')->references('id')->on('audiences')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('hall_id')->unsigned();
            $table->foreign('hall_id')->references('id')->on('halls')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('stage_id')->unsigned();
            $table->foreign('stage_id')->references('id')->on('stages')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('lawyer_id')->unsigned();
            $table->foreign('lawyer_id')->references('id')->on('lawyers')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('legal_cases');
    }
};
