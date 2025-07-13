<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('blog_posts', function (Illuminate\Database\Schema\Blueprint $table) {
        $table->enum('status', ['draft', 'published', 'archived'])->default('draft')->after('excerpt');
    });
}

public function down()
{
    Schema::table('blog_posts', function (Illuminate\Database\Schema\Blueprint $table) {
        $table->dropColumn('status');
    });
}

};