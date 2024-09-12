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
        Schema::create('classe', function (Blueprint $table) {
            $table->increments('classe_id');
            $table->unsignedInteger('classe_filiere_id')->nullable();
            $table->unsignedInteger('classe_typeFormation_id')->nullable()->index('classe_typeformation_id');
            $table->string('classe_nom', 100)->nullable();
            $table->unsignedInteger('classe_departement_id')->nullable()->index('classe_departement_id');
            $table->string('classe_filiere_code', 15)->nullable();
            $table->tinyInteger('classe_annee_etude')->nullable();
            $table->boolean('classe_visible')->nullable()->default(true);
            $table->unsignedInteger('classe_next_classe_id')->nullable();
            $table->unsignedInteger('classe_formation_id')->index('classe_formation_id');
            $table->string('classe_abbr', 50)->default('')->index('classe_abbr');
            $table->string('classe_nom_court', 200)->default('');
            $table->string('classe_nom_complet', 300)->default('');
            $table->unsignedInteger('classe_niveau_filiere')->default(0)->index('classe_niveau_filiere');
            $table->unsignedInteger('classe_niveau_apresbac')->default(0)->index('classe_niveau_apresbac');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classe');
    }
};
