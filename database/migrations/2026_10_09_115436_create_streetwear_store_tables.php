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
            $table->string('slug')->unique();
            $table->string('collection')->default('Volume 1');
            $table->string('tagline')->nullable();
            $table->text('description');
            $table->integer('price')->default(200000);
            $table->integer('original_price')->default(249000);
            $table->string('badge')->nullable();
            $table->string('color_name')->default('Washed Black');
            $table->string('color_code')->default('#1A1A1A');
            $table->json('sizes')->nullable();
            $table->integer('stock')->default(30);
            $table->text('image_url');
            $table->json('gallery_urls')->nullable();
            $table->text('fabric_details')->nullable();
            $table->boolean('is_featured')->default(true);
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_email')->nullable();
            $table->text('shipping_address');
            $table->string('city')->default('Medan');
            $table->string('province')->default('Sumatera Utara');
            $table->string('postal_code')->nullable();
            $table->string('courier')->default('J&T Express');
            $table->integer('shipping_cost')->default(15000);
            $table->integer('subtotal')->default(200000);
            $table->integer('discount')->default(0);
            $table->string('voucher_code')->nullable();
            $table->integer('total_amount')->default(215000);
            $table->string('payment_method')->default('QRIS');
            $table->string('payment_status')->default('PAID');
            $table->string('order_status')->default('PROCESSING');
            $table->string('tracking_number')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('product_id')->nullable()->constrained('products')->nullOnDelete();
            $table->string('product_name');
            $table->string('color_name')->nullable();
            $table->string('size', 10);
            $table->integer('quantity')->default(1);
            $table->integer('unit_price')->default(200000);
            $table->integer('subtotal')->default(200000);
            $table->timestamps();
        });

        Schema::create('drop_votes', function (Blueprint $table) {
            $table->id();
            $table->string('option_key')->unique();
            $table->string('title');
            $table->string('description')->nullable();
            $table->integer('votes_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drop_votes');
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('products');
    }
};
