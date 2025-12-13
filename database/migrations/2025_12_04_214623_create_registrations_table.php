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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            
            // Personal Information
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->date('date_of_birth');
            $table->string('document_id');
            $table->string('place_of_origin');
            
            // Ministry Information
            $table->enum('ministry', ['NA Canada', 'NA Colombia', 'NA USA', 'Otro']);
            $table->string('ministry_other')->nullable();
            
            // Event Information
            $table->string('shirt_size');
            
            // Medical Information
            $table->text('medical_conditions')->nullable();
            $table->text('allergies')->nullable();
            
            // Emergency Contact
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_phone');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
