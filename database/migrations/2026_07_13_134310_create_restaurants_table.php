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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manager_id')->constrained('users')->onDelete('cascade');
            $table->string('name', 150);
            $table->text('address');
            $table->string('phone', 20);
            $table->string('email', 150);
            $table->string('logo', 255)->nullable();
            $table->string('legal_document', 255)->comment('Lien vers la patente');
            $table->string('status', 30)->default('PENDING')->comment('PENDING, ACTIVE, SUSPENDED');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
