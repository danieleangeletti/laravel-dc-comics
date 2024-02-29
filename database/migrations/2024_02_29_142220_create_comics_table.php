<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 256);
            $table->string('description', 1024);
            $table->string('thumb', 1024)->nullable();
            $table->string('price', 32);
            $table->string('series', 256);
            $table->date('sale_date');
            $table->string('type', 64)->nullable();
            $table->string('artists', 512);
            $table->string('writers', 512);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
