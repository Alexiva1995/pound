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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('seller_id');
            $table->decimal('tolal_amount', 12, 2);
            $table->enum('currency', ['Bs', 'USD', 'COP']);
            $table->dateTime('order_date')->useCurrent();
            $table->enum('status', ['Completed', 'Canceled', 'Abandoned', 'Pending', 'Closed', 'Reserved'])->default('Pending');
            $table->string('payment_methods')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
