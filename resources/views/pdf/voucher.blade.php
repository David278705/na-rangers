<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobante de Registro - HOREB 2026</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            color: #1e293b;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 3px solid #10b981;
        }

        .logo {
            font-size: 36px;
            font-weight: bold;
            color: #10b981;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 14px;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .title {
            font-size: 28px;
            font-weight: bold;
            color: #0f172a;
            margin: 30px 0 10px 0;
        }

        .event-info {
            background: linear-gradient(135deg, #059669 0%, #10b981 100%);
            color: #ffffff;
            padding: 25px;
            border-radius: 12px;
            margin: 30px 0;
        }

        .event-info h2 {
            font-size: 32px;
            margin-bottom: 15px;
            font-weight: bold;
            color: #ffffff;
        }

        .event-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 20px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #ffffff;
        }

        .detail-label {
            font-weight: 600;
            opacity: 0.95;
            color: #ffffff;
        }

        .section {
            margin: 30px 0;
        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            color: #0f172a;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e2e8f0;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .info-item {
            margin-bottom: 15px;
        }

        .info-label {
            font-size: 11px;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }

        .info-value {
            font-size: 14px;
            color: #0f172a;
            font-weight: 500;
        }

        .payment-info {
            background: #f1f5f9;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }

        .payment-status {
            display: inline-block;
            background: #10b981;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .qr-section {
            text-align: center;
            margin: 30px 0;
            padding: 25px;
            background: #ffffff;
            border: 2px dashed #cbd5e1;
            border-radius: 8px;
        }

        .reference {
            font-family: 'Courier New', monospace;
            font-size: 14px;
            font-weight: bold;
            color: #10b981;
            background: #f0fdf4;
            padding: 10px 15px;
            border-radius: 6px;
            display: inline-block;
            margin-top: 10px;
        }

        .footer {
            margin-top: 50px;
            padding-top: 25px;
            border-top: 2px solid #e2e8f0;
            text-align: center;
            color: #64748b;
            font-size: 11px;
        }

        .footer-strong {
            color: #0f172a;
            font-weight: 600;
            margin-top: 10px;
            display: block;
        }

        .location {
            margin: 20px 0;
            padding: 15px;
            background: #fef3c7;
            border-left: 4px solid #f59e0b;
            border-radius: 4px;
        }

        .location strong {
            color: #92400e;
        }

        .full-width {
            grid-column: 1 / -1;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="logo">HOREB 2026</div>
            <div class="subtitle">Retiro de Hombres</div>
        </div>

        <div class="title">Comprobante de Registro</div>

        <!-- Participant Information -->
        <div class="section">
            <div class="section-title">Información del Participante</div>
            <div class="info-grid">
                <div class="info-item">
                    <div class="info-label">Nombre Completo</div>
                    <div class="info-value">{{ $registration->first_name }} {{ $registration->last_name }}</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Correo Electrónico</div>
                    <div class="info-value">{{ $registration->email }}</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Documento de Identidad</div>
                    <div class="info-value">{{ $registration->document_id }}</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Fecha de Nacimiento</div>
                    <div class="info-value">{{ $registration->date_of_birth->format('d/m/Y') }}</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Lugar de Origen</div>
                    <div class="info-value">{{ $registration->place_of_origin }}</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Ministerio</div>
                    <div class="info-value">{{ $registration->ministry === 'Otro' ? $registration->ministry_other : $registration->ministry }}</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Talla de Camiseta</div>
                    <div class="info-value">{{ $registration->shirt_size }}</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Contacto de Emergencia</div>
                    <div class="info-value">{{ $registration->emergency_contact_name }}<br>{{ $registration->emergency_contact_phone }}</div>
                </div>
            </div>

            @if($registration->allergies)
            <div class="info-item full-width" style="margin-top: 15px;">
                <div class="info-label">Alergias</div>
                <div class="info-value">{{ $registration->allergies }}</div>
            </div>
            @endif

            @if($registration->medical_conditions)
            <div class="info-item full-width" style="margin-top: 15px;">
                <div class="info-label">Condiciones Médicas</div>
                <div class="info-value">{{ $registration->medical_conditions }}</div>
            </div>
            @endif
        </div>

        <!-- Registration Information -->
        <div class="section">
            <div class="section-title">Información del Registro</div>
            <div class="payment-info">
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Número de Registro</div>
                        <div class="info-value">HOREB-{{ str_pad($registration->id, 6, '0', STR_PAD_LEFT) }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Fecha de Registro</div>
                        <div class="info-value">{{ $registration->created_at->format('d/m/Y H:i') }}</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Registration Code Section -->
        <div class="qr-section">
            <div class="info-label">Número de Registro</div>
            <div class="reference">HOREB-{{ str_pad($registration->id, 6, '0', STR_PAD_LEFT) }}</div>
            <p style="margin-top: 15px; color: #64748b; font-size: 12px;">
                Presenta este comprobante en el check-in del evento
            </p>
        </div>

        <!-- Payment Instructions Section -->
        <div class="section">
            <div class="section-title">💳 Instrucciones de Pago</div>
            <div style="background: #f0fdf4; border: 2px solid #10b981; border-radius: 8px; padding: 20px; margin: 15px 0;">
                <p style="color: #065f46; margin-bottom: 15px; font-weight: 600;">Para completar tu registro, realiza el pago escaneando este código QR:</p>
                
                <div style="text-align: center; margin: 20px 0;">
                    <img src="{{ public_path('img/qr.png') }}" alt="Código QR para pago" style="max-width: 200px; margin: 0 auto; display: block; border: 2px solid #10b981; border-radius: 8px; padding: 10px; background: #ffffff;" />
                </div>
                
                <p style="color: #065f46; margin-top: 15px; font-size: 13px; text-align: center;"><strong>O visita:</strong></p>
                <p style="color: #059669; margin-top: 5px; font-size: 11px; text-align: center; word-break: break-all;">
                    https://www.mipagoamigo.com/MPA_WebSite/ServicePayments/StartPayment?id=13875
                </p>
                
                <div style="background: #dcfce7; padding: 15px; border-radius: 6px; margin-top: 20px;">
                    <p style="margin: 0; color: #065f46; font-size: 13px; text-align: center;"><strong>💵 Aparta tu cupo con $200.000 COP</strong></p>
                    <p style="margin: 5px 0 0 0; color: #065f46; font-size: 12px; text-align: center;">Tarifa completa: $800.000 hasta el 15 de febrero | $1.000.000 del 16 en adelante</p>
                </div>
                
                <p style="color: #78350f; margin-top: 20px; font-size: 12px; background: #fef3c7; padding: 12px; border-radius: 6px;">
                    <strong>📸 Importante:</strong> Una vez realizado el pago, envía el comprobante a <strong>narangers@naglobal.org</strong> o WhatsApp <strong>321 6467232</strong>
                </p>
            </div>
        </div>

        <!-- Event Info -->
        <div class="location">
            <strong>Info del Evento:</strong><br>
            <strong>Fecha:</strong> 2 - 5 de Abril, 2026<br>
            <strong>Ubicación:</strong> Kilómetro 5 Vía Villeta / La Vega<br>
            Restaurante Los Abuelos, Villeta Colombia
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Este comprobante fue generado automáticamente el {{ now()->format('d/m/Y') }} a las {{ now()->format('H:i') }}</p>
            <p class="footer-strong">¡Te esperamos en HOREB 2026!</p>
            <p style="margin-top: 10px;">Síguenos en Instagram: @na.rangers</p>
        </div>
    </div>
</body>
</html>
