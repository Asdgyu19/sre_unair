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
            // Tambahkan kolom 'excerpt' sebagai TEXT dan bisa NULL
            $table->text('excerpt')->nullable()->after('content'); // Menempatkan setelah kolom 'content'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blog_posts', function (Blueprint $table) {
            // Hapus kolom 'excerpt' jika migrasi di-rollback
            $table->dropColumn('excerpt');
        });
    }
};