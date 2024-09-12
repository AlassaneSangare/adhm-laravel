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
        Schema::create('n_groupement_diplomes', function (Blueprint $table) {
            $table->increments('gd_id');
            $table->string('gd_abbr', 10);
            $table->string('gd_nom', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('n_groupement_diplomes');
    }
};
