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
        Schema::connection('mysql_second')->create('data_integration', function (Blueprint $table) {
            $table->id();
            $table->string('lob');
            $table->string('cause');
            $table->string('total_customer');
            $table->double('total_claim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_integration');
    }
};
