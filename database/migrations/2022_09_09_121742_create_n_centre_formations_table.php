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
        Schema::create('n_centre_formations', function (Blueprint $table) {
            $table->increments('cfm_id');
            $table->unsignedInteger('cfm_centre_id')->index('cfm_centre_id');
            $table->unsignedInteger('cfm_for_id')->index('cfm_for_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('n_centre_formations');
    }
};
