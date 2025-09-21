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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
             $table->string('code')->nullable();
             $table->string('discount_type')->nullable();
             $table->string('discount_value')->nullable();
             $table->string('usage_limit')->nullable();
             $table->string('used_count')->nullable();
             $table->string('min_order_amount')->nullable();
             $table->string('start_date')->nullable();
             $table->string('end_date')->nullable();
             $table->string('is_active')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
