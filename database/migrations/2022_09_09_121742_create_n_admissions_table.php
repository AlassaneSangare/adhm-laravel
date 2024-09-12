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
        Schema::create('n_admissions', function (Blueprint $table) {
            $table->increments('adm_id');
            $table->date('adm_date');
            $table->unsignedInteger('adm_seq')->default(0);
            $table->string('adm_numero', 20);
            $table->enum('adm_type', ['M', 'S'])->default('M');
            $table->unsignedInteger('adm_supmti_id')->nullable()->index('adm_supmti_id');
            $table->unsignedInteger('adm_etudiant_id')->index('adm_etudiant_id');
            $table->unsignedInteger('adm_formation_id')->index('adm_formation_id');
            $table->unsignedInteger('adm_centre_id')->index('adm_centre_id');
            $table->unsignedInteger('adm_centre_admin_id')->nullable()->index('adm_centre_admin_id');
            $table->unsignedInteger('adm_as_id')->index('adm_as_id');
            $table->unsignedInteger('adm_preins_id')->nullable()->index('adm_preins_id');
            $table->string('adm_cne', 20)->nullable();
            $table->string('adm_cni', 20)->nullable();
            $table->string('adm_passport', 20)->nullable();
            $table->date('adm_cejour_date_exp')->nullable();
            $table->enum('adm_situation', ['N', 'R', 'P'])->nullable();
            $table->string('adm_diplomeacces', 100)->nullable();
            $table->string('adm_seriebac', 100)->nullable();
            $table->string('adm_anneebac', 20)->nullable();
            $table->string('adm_specialitebac', 100)->nullable();
            $table->string('adm_mentionbac', 20)->nullable();
            $table->string('adm_lieubac', 100)->nullable();
            $table->string('adm_premiereannee', 20)->nullable();
            $table->enum('adm_handicape', ['N', 'A', 'M', 'V', 'AM', 'AV', 'MV', 'T', 'XX'])->nullable();
            $table->enum('adm_resident', ['O', 'N'])->nullable();
            $table->enum('adm_fonctionnaire', ['O', 'N'])->nullable();
            $table->decimal('adm_bourse', 20)->nullable();
            $table->enum('adm_mobilite', ['O', 'N'])->nullable();
            $table->string('adm_documentsfournis', 500)->nullable();
            $table->string('adm_afournir', 500)->nullable();
            $table->enum('adm_accordpeda', ['V', 'O', 'R'])->nullable();
            $table->string('adm_commentairepeda', 200)->nullable();
            $table->enum('adm_accordadmin', ['V', 'O', 'R'])->nullable();
            $table->string('adm_commentaireadmin', 200)->nullable();
            $table->unsignedInteger('adm_statut_id')->default(1)->index('adm_statut_id');
            $table->unsignedTinyInteger('adm_mise_a_niveau')->default(0);
            $table->string('adm_dossier_accept_chemin', 200)->nullable();
            $table->tinyInteger('adm_est_principale')->nullable()->default(0);
            $table->enum('adm_mode', ['P', 'H'])->nullable()->index('adm_mode');
            $table->unsignedInteger('adm_localite_id')->nullable()->index('adm_localite_id');
            $table->unsignedInteger('adm_ns_diplome')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('n_admissions');
    }
};
