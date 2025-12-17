<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Mail\RegistrationConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function index(Request $request)
    {
        $query = Registration::query();

        // Search functionality
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('document_id', 'like', "%{$search}%")
                  ->orWhere('ministry', 'like', "%{$search}%");
            });
        }

        // Filter by ministry
        if ($request->has('ministry') && $request->ministry !== 'all') {
            $query->where('ministry', $request->ministry);
        }

        // Filter by language
        if ($request->has('language') && $request->language !== 'all') {
            $query->where('language', $request->language);
        }

        // Sort
        $sortField = $request->get('sort_field', 'created_at');
        $sortDirection = $request->get('sort_direction', 'desc');
        $query->orderBy($sortField, $sortDirection);

        $registrations = $query->paginate($request->get('per_page', 15));

        return response()->json($registrations);
    }

    public function exportExcel()
    {
        $registrations = Registration::orderBy('created_at', 'desc')->get();

        // BOM for Excel UTF-8 support
        $csv = "\xEF\xBB\xBF";
        
        // Headers - usar punto y coma para Excel en español
        $headers = [
            'ID',
            'Nombre',
            'Apellido',
            'Email',
            'Fecha de Nacimiento',
            'Documento',
            'Lugar de Origen',
            'Ministerio',
            'Ministerio (Otro)',
            'Talla',
            'Condiciones Médicas',
            'Alergias',
            'Contacto de Emergencia',
            'Teléfono de Emergencia',
            'Idioma',
            'Fecha de Registro'
        ];
        
        $csv .= implode(';', $headers) . "\r\n";

        foreach ($registrations as $reg) {
            $row = [
                $reg->id,
                $this->escapeCsv($reg->first_name),
                $this->escapeCsv($reg->last_name),
                $this->escapeCsv($reg->email),
                \Carbon\Carbon::parse($reg->date_of_birth)->format('d/m/Y'),
                $this->escapeCsv($reg->document_id),
                $this->escapeCsv($reg->place_of_origin),
                $this->escapeCsv($reg->ministry),
                $this->escapeCsv($reg->ministry_other ?? ''),
                $reg->shirt_size,
                $this->escapeCsv($reg->medical_conditions ?? ''),
                $this->escapeCsv($reg->allergies ?? ''),
                $this->escapeCsv($reg->emergency_contact_name),
                $this->escapeCsv($reg->emergency_contact_phone),
                strtoupper($reg->language),
                $reg->created_at->format('d/m/Y H:i:s'),
            ];
            
            $csv .= implode(';', $row) . "\r\n";
        }

        return response($csv)
            ->header('Content-Type', 'text/csv; charset=UTF-8')
            ->header('Content-Disposition', 'attachment; filename="registros-horeb-2026.csv"');
    }

    private function escapeCsv($value)
    {
        $value = str_replace('"', '""', $value);
        return '"' . $value . '"';
    }

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
