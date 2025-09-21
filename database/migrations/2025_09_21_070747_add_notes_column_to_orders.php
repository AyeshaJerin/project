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
        Schema::table('orders', function (Blueprint $table) {
            $table->text('district_id')->nullable()->after('final_price');
            $table->text('division_id')->nullable()->after('district_id');
            $table->text('notes')->nullable()->after('division_id');
            $table->text('address')->after('notes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('notes');
            $table->dropColumn('division_id');
            $table->dropColumn('district_id');
            $table->dropColumn('address');
        });
    }
};
