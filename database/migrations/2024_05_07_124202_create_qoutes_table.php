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
        Schema::create('qoutes', function (Blueprint $table) {
            $table->id();
            $table->string('from');
            $table->string('to');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->date('date');
            $table->string('make');
            $table->string('model');
            $table->string('year');
            $table->string('condition');
            $table->string('career');
            $table->string('miles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qoutes');
    }
};
