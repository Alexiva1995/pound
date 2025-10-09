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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->foreignId('origin_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->decimal('sale_price', 10, 2);
            $table->string('description');
            $table->string('coffee_varitey');
            $table->string('proccess');
            $table->boolean('is_auctionable')->default(true);
            $table->integer('quantity')->default(0);
            $table->enum('quantity_units', ['Kg', 'gr', 'sacos', 'Tonelada']);
            $table->string('barcode');
            $table->string('photo_url')->nullable();
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->foreignId('group_id')->references('id')->on('groups_products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
