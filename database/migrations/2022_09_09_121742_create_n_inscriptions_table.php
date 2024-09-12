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
        Schema::create('n_inscriptions', function (Blueprint $table) {
            $table->increments('ins_id');
            $table->unsignedInteger('ins_seq')->default(0);
            $table->string('ins_numero', 20);
            $table->dateTime('ins_date')->nullable();
            $table->unsignedInteger('ins_etudiant_id')->nullable()->index('ins_etudiant_id');
            $table->unsignedInteger('ins_adm_id')->index('ins_adm_id');
            $table->unsignedInteger('ins_classe_id')->index('ins_classe_id');
            $table->unsignedInteger('ins_as_id')->index('ins_as_id')->comment('annee scolaire id');
            $table->integer('ins_statut_id')->default(-1)->index('ins_statut_id')->comment('before table creation');
            $table->unsignedInteger('ins_tmp_id')->nullable()->index('ins_tmp-id');
            $table->unsignedInteger('ins_grp_id')->nullable()->index('ins_grp_id');
            $table->unsignedInteger('ins_gp_id')->nullable()->index('ins_gp_id')->comment('groupe projet');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('n_inscriptions');
    }
};
