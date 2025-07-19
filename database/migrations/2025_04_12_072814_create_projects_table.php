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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('category', [
                'social',
                'academic',
                'external',
                'internal'
            ])->default('internal');
            $table->enum('by', [
                'Research & Development',
                'Competency Development',
                'IT Development',
                'Brand Marketing',
                'Human Resource',
                'External Relation',
                'Funding'
            ])->default('IT Development');
            $table->enum('status', ['Belum Dimulai', 'Berjalan', 'Selesai', 'Ditunda', 'Dibatalkan'])->default('Belum Dimulai');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
