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
        Schema::create('n_etudiants', function (Blueprint $table) {
            $table->integer('etud_id', true);
            $table->string('etud_nom', 50);
            $table->string('etud_prenom', 50);
            $table->string('etud_nom_ar', 50)->nullable();
            $table->string('etud_prenom_ar', 50)->nullable();
            $table->char('etud_sexe', 1);
            $table->string('etud_cni', 20)->nullable();
            $table->string('etud_passport', 20)->nullable();
            $table->date('etud_datenaiss')->nullable();
            $table->string('etud_lieunaiss', 50)->nullable();
            $table->string('etud_lieunaiss_ar', 50)->nullable();
            $table->string('etud_adresse', 200)->nullable();
            $table->unsignedInteger('etud_ville_id')->nullable()->index('etud_ville_id');
            $table->unsignedInteger('etud_nat_id')->index('etud_nat_id');
            $table->string('etud_email', 100)->nullable();
            $table->string('etud_tel', 50)->nullable();
            $table->boolean('etud_status')->nullable()->default(false);
            $table->unsignedInteger('etud_user_id')->nullable()->index('etud_user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('n_etudiants');
    }
};
