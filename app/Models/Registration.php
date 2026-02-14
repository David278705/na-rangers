<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'date_of_birth',
        'document_id',
        'place_of_origin',
        'ministry',
        'ministry_other',
        'shirt_size',
        'medical_conditions',
        'allergies',
        'emergency_contact_name',
        'emergency_contact_phone',
        'language',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];
}
