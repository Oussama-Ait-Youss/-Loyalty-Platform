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
        Schema::create('reward_catalog', function (Blueprint $table) {
            $table->id();
            $table->foreignId('restaurant_id')->constrained('restaurants')->onDelete('cascade');
            $table->string('reward_name', 150);
            $table->text('description')->nullable();
            $table->string('image', 255)->nullable();
            $table->integer('points_required');
            $table->integer('quantity')->default(0);
            $table->string('status', 30)->default('AVAILABLE')->comment('AVAILABLE, OUT_OF_STOCK, ARCHIVED');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reward_catalog');
    }
};
