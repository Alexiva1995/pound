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
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->decimal('initial_price', 10, 2);
            $table->decimal('reserve_price', 10, 2);
            $table->decimal('current_price', 10, 2);
            $table->decimal('minimum_price', 10, 2)->default(1.00);
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['scheduled', 'active', 'finished', 'sold', 'failed']);
            $table->foreignId('winner_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auctions');
    }
};
