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
        Schema::create('skpi_infos', function (Blueprint $table) {
            $table->id();
            $table->text('pendidikan');
            $table->text('pendidikan_en');
            $table->text('kkni');
            $table->text('kkni_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skpi_infos');
    }
};
