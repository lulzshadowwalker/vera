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
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropColumn(['speed', 'reliability', 'flexibility', 'innovation', 'value']);
            $table->unsignedTinyInteger('accuracy')->after('cost'); // Credibility, clarity & accuracy
            $table->unsignedTinyInteger('compliance')->after('accuracy'); // Financial dealing
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropColumn(['accuracy', 'compliance']);
            $table->unsignedTinyInteger('speed');
            $table->unsignedTinyInteger('reliability');
            $table->unsignedTinyInteger('flexibility');
            $table->unsignedTinyInteger('innovation');
            $table->unsignedTinyInteger('value');
        });
    }
};
