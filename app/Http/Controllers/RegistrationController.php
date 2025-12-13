<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Mail\RegistrationConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:registrations,email',
            'date_of_birth' => 'required|date|before:today',
            'document_id' => 'required|string|max:50',
            'place_of_origin' => 'required|string|max:255',
            'ministry' => 'required|in:NA Canada,NA Colombia,NA USA,Otro,Other',
            'ministry_other' => 'nullable|required_if:ministry,Otro,Other|string|max:255',
            'shirt_size' => 'required|in:S,M,L,XL,XXL',
            'medical_conditions' => 'nullable|string|max:1000',
            'allergies' => 'nullable|string|max:1000',
            'emergency_contact_name' => 'required|string|max:255',
            'emergency_contact_phone' => 'required|string|max:20',
            'language' => 'required|in:es,en',
        ]);

        $registration = Registration::create($validated);

        // Send confirmation email
        try {
            Mail::to($registration->email)->send(new RegistrationConfirmation($registration));
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error("Failed to send confirmation email: " . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'registration' => $registration,
            'message' => 'Registro completado exitosamente',
        ]);
    }

    public function show($id)
    {
        $registration = Registration::findOrFail($id);
        
        return response()->json([
            'success' => true,
            'registration' => $registration,
        ]);
    }

    public function downloadVoucher($id)
    {
        $registration = Registration::findOrFail($id);

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.voucher', [
            'registration' => $registration,
        ]);

        $filename = 'HOREB-2026-' . $registration->id . '.pdf';

        return $pdf->download($filename);
    }
}
