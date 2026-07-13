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
        Schema::create('reward_redemptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('reward_id')->constrained('reward_catalog')->onDelete('cascade');
            $table->integer('points_used');
            $table->timestamp('redeemed_at')->useCurrent();
            $table->string('status', 30)->default('AVAILABLE')->comment('AVAILABLE, USED, EXPIRED');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reward_redemptions');
    }
};
