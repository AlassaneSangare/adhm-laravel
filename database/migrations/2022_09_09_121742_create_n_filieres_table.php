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
        Schema::create('n_filieres', function (Blueprint $table) {
            $table->increments('fil_id');
            $table->string('fil_nom', 100)->default('');
            $table->string('fil_nom_ar', 200)->nullable();
            $table->string('fil_abbr', 20)->default('')->unique('fil_abbr');
            $table->unsignedInteger('fil_dom_id')->index('fil_dom_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('n_filieres');
    }
};
