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
        Schema::create('wines', function (Blueprint $table) { $table->id(); 
            $table->string('winery')->nullable(); 
            $table->string('wine'); 
            $table->decimal('rating_average', 3, 1); 
            $table->string('rating_reviews'); 
            $table->string('location')->nullable(); 
            $table->string('image'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wines');
    }
};
