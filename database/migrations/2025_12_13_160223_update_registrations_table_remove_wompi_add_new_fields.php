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
        Schema::table('registrations', function (Blueprint $table) {
            // Drop Wompi related columns
            $table->dropColumn([
                'payment_status',
                'wompi_transaction_id',
                'wompi_reference',
                'amount_in_cents',
                'currency',
                'payment_method_type'
            ]);
            
            // Drop old columns
            $table->dropColumn([
                'full_name',
                'phone',
                'age',
                'church',
                'food_allergies',
                'emergency_contact'
            ]);
            
            // Add new columns
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            $table->date('date_of_birth')->after('email');
            $table->string('document_id')->after('date_of_birth');
            $table->string('place_of_origin')->after('document_id');
            
            // Ministry Information
            $table->enum('ministry', ['NA Canada', 'NA Colombia', 'NA USA', 'Otro'])->after('place_of_origin');
            $table->string('ministry_other')->nullable()->after('ministry');
            
            // Medical Information
            $table->text('allergies')->nullable()->after('medical_conditions');
            
            // Emergency Contact
            $table->string('emergency_contact_name')->after('allergies');
            $table->string('emergency_contact_phone')->after('emergency_contact_name');
        });
        
        // Make email unique
        Schema::table('registrations', function (Blueprint $table) {
            $table->string('email')->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            // Restore Wompi columns
            $table->enum('payment_status', ['pending', 'approved', 'declined', 'voided', 'error'])->default('pending');
            $table->string('wompi_transaction_id')->nullable()->unique();
            $table->string('wompi_reference')->unique();
            $table->decimal('amount_in_cents', 10, 0);
            $table->string('currency', 3)->default('COP');
            $table->string('payment_method_type')->nullable();
            
            // Restore old columns
            $table->string('full_name');
            $table->string('phone');
            $table->integer('age');
            $table->string('church');
            $table->text('food_allergies')->nullable();
            $table->string('emergency_contact');
            
            // Drop new columns
            $table->dropColumn([
                'first_name',
                'last_name',
                'date_of_birth',
                'document_id',
                'place_of_origin',
                'ministry',
                'ministry_other',
                'allergies',
                'emergency_contact_name',
                'emergency_contact_phone'
            ]);
        });
    }
};
