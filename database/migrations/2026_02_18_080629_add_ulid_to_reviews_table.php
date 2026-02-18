<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->ulid('ulid')->nullable()->after('id');
        });

        DB::table('reviews')->select('id')->orderBy('id')->chunkById(100, function ($reviews): void {
            foreach ($reviews as $review) {
                DB::table('reviews')
                    ->where('id', $review->id)
                    ->update(['ulid' => (string) Str::ulid()]);
            }
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->ulid('ulid')->nullable(false)->change();
            $table->unique('ulid');
        });
    }

    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropUnique(['ulid']);
            $table->dropColumn('ulid');
        });
    }
};
