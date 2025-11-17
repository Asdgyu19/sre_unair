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
        Schema::table('blog_posts', function (Blueprint $table) {
            // Add missing columns that are expected by the controller/model
            if (!Schema::hasColumn('blog_posts', 'user_id')) {
                $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            }
            if (!Schema::hasColumn('blog_posts', 'excerpt')) {
                $table->text('excerpt')->nullable();
            }
            if (!Schema::hasColumn('blog_posts', 'category_id')) {
                $table->foreignId('category_id')->nullable()->constrained()->cascadeOnDelete();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn(['user_id', 'excerpt', 'category_id']);
        });
    }
};