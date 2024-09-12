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
        Schema::create('n_formations', function (Blueprint $table) {
            $table->increments('for_id');
            $table->string('for_abbr', 30)->unique('for_abbr');
            $table->string('for_nom', 200);
            $table->unsignedInteger('for_diplome_id')->index('for_diplome_id');
            $table->unsignedInteger('for_filiere_id')->index('for_filiere_id');
            $table->enum('for_est_accredite', ['O', 'N'])->default('O');
            $table->string('for_langue', 10)->default('Fr');
            $table->unsignedInteger('for_option_id')->nullable()->index('for_option_id');
            $table->string('for_codefiliere', 50)->nullable();
            $table->string('for_codeoption', 50)->nullable();
            $table->unsignedInteger('for_asdebut')->nullable();
            $table->unsignedInteger('for_asfin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('n_formations');
    }
};
