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
    Schema::table('merchandises', function (Blueprint $table) {
        $table->string('status')->default('available'); // atau nullable jika tidak ingin default
    });
}

public function down()
{
    Schema::table('merchandises', function (Blueprint $table) {
        $table->dropColumn('status');
    });
}

};
