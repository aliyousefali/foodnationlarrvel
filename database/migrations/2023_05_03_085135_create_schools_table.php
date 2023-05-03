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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('Code');
            $table->string('Name');
            $table->string('GovernmentId');
            $table->string('EducationalAdministrationId');
            $table->string('InductionNo');
            $table->string('PersonInCharge');
            $table->string('Phone');
            $table->string('Address');
            $table->string('Longitude');
            $table->string('Latitude');
            $table->string('MedicalCertificateNo');
            $table->string('MedicalCertificateImgPath');
            $table->boolean('Status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
