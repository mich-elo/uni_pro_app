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
        Schema::create('occurrence_books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('shift');
            $table->string('ref');
            $table->string('entry');
            $table->string('datetime');
            $table->string('subject');
            $table->string('officer');
            $table->string('occurrence');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('occurrence_books');
    }
};
