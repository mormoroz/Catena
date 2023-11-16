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
        Schema::create('contractors', function (Blueprint $table) {
            $table->id();
            $table->string('INN', 10);
            $table->string('name');
            $table->string('address');
            $table->foreignId('company_type_id')
                ->references('id')->on('company_types')
                ->onDelete('cascade');
            $table->foreignId('company_country_id')
                ->references('id')->on('company_countries')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contractors');
    }
};
