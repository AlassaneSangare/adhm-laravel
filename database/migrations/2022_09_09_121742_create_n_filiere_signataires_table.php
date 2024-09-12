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
        Schema::create('n_filiere_signataires', function (Blueprint $table) {
            $table->increments('fs_id');
            $table->unsignedInteger('fs_filiere_id')->index('fs_filiere_id');
            $table->unsignedInteger('fs_prof_id')->index('fs_prof_id');
            $table->unsignedInteger('fs_diplome_id')->nullable()->index('fs_diplome_id');
            $table->enum('fs_qualite', ['CD', 'CF', 'PR'])->comment('CD : Chef de departement | CF : Chef filière | PR: Professeur ');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('n_filiere_signataires');
    }
};
