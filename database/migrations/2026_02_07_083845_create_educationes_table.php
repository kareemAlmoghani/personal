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
        Schema::create('educationes', function (Blueprint $table) {
            $table->id();
             $table->string('start_date');
            $table->string('end_date');
            $table->string('college');
            $table->string('location');
            $table->string('degree');
            $table->string('field');
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educationes');
    }
};
