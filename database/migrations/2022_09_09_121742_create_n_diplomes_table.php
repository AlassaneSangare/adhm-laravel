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
        Schema::create('n_diplomes', function (Blueprint $table) {
            $table->increments('dip_id');
            $table->string('dip_nom', 100)->default('');
            $table->string('dip_abbr', 20)->default('')->unique('dip_abbr');
            $table->unsignedInteger('dip_nbannees')->default(0);
            $table->unsignedInteger('dip_niveau_apresbac')->default(0);
            $table->unsignedInteger('dip_gd_id')->default(0)->index('dip_gd_id')->comment('groupement_diplomes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('n_diplomes');
    }
};
