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
    Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description')->nullable();
        $table->date('date')->nullable();
        $table->string('time')->nullable();
        $table->string('location')->nullable();
        $table->string('image')->nullable();
        $table->enum('status', ['upcoming', 'ongoing', 'completed', 'cancelled'])->default('upcoming');
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::table('events', function (Blueprint $table) {
        $table->dropColumn([
            'title',
            'description',
            'date',
            'time',
            'location',
            'image',
            'status',
        ]);
    });
}

};
