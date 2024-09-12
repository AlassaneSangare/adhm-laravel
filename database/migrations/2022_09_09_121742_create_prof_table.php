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
        Schema::create('prof', function (Blueprint $table) {
            $table->increments('prof_id');
            $table->string('prof_nom', 50);
            $table->string('prof_prenom', 50);
            $table->char('prof_sexe', 1);
            $table->string('prof_cin', 20)->nullable();
            $table->date('prof_datenaiss')->nullable();
            $table->string('prof_lieunaiss', 50)->nullable();
            $table->string('prof_adresse', 200)->nullable();
            $table->unsignedInteger('prof_ville_id')->nullable()->index('prof_ville_id');
            $table->string('prof_email', 100)->nullable();
            $table->string('prof_tel', 50)->nullable();
            $table->unsignedInteger('prof_type_pay')->index('prof_type_pay');
            $table->decimal('prof_pay', 10);
            $table->decimal('prof_declarer', 10)->nullable();
            $table->mediumText('prof_signature')->nullable();
            $table->string('signature_content_type', 50)->nullable();
            $table->unsignedInteger('prof_user_id')->nullable()->index('prof_user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prof');
    }
};
