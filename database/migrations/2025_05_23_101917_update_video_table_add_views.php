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
        Schema::table('videos', function (Blueprint $table) {
            //
            $table->bigInteger('views')->default(0);
            $table->decimal('earned_amount', 8, 2)->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('videos', function (Blueprint $table) {
            //
            $table->dropColumn('views');
            $table->decimal('earned_amount', 8, 2)->default(0.00);
        });
    }
};
