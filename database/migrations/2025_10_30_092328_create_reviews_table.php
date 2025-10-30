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
        Schema::disableForeignKeyConstraints();

        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reviewer_supplier_id')->constrained('suppliers');
            $table->foreignId('reviewed_supplier_id')->constrained('suppliers');
            $table->foreignId('user_id')->constrained();
            $table->date('deal_date');
            $table->string('country', 2)->nullable();
            $table->unsignedTinyInteger('cost');
            $table->unsignedTinyInteger('speed');
            $table->unsignedTinyInteger('communication');
            $table->unsignedTinyInteger('reliability');
            $table->unsignedTinyInteger('quality');
            $table->unsignedTinyInteger('support');
            $table->unsignedTinyInteger('flexibility');
            $table->unsignedTinyInteger('innovation');
            $table->unsignedTinyInteger('value');
            $table->unsignedTinyInteger('timeliness');
            $table->boolean('deal_again');
            $table->string('comment')->nullable();
            $table->boolean('anonymous')->default(true);
            $table->boolean('published')->default(true);
            $table->unique(['user_id', 'reviewed_supplier_id']);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
