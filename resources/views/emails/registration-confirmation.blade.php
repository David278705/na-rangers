<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Registro - HOREB 2026</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Helvetica', 'Arial', sans-serif;
            background-color: #f1f5f9;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
        }
        .header {
            background: linear-gradient(135deg, #059669 0%, #10b981 100%);
            padding: 40px 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            color: #ffffff;
            font-size: 36px;
            font-weight: bold;
        }
        .header p {
            margin: 10px 0 0 0;
            color: #d1fae5;
            font-size: 14px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        .content {
            padding: 40px 30px;
        }
        .greeting {
            font-size: 24px;
            color: #0f172a;
            margin-bottom: 20px;
            font-weight: 600;
        }
        .message {
            color: #475569;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .event-details {
            background: #f8fafc;
            border-left: 4px solid #10b981;
            padding: 20px;
            margin: 30px 0;
            border-radius: 4px;
        }
        .event-details h3 {
            margin: 0 0 15px 0;
            color: #0f172a;
            font-size: 18px;
        }
        .detail-row {
            display: flex;
            margin-bottom: 10px;
            font-size: 14px;
        }
        .detail-label {
            font-weight: 600;
            color: #475569;
            min-width: 100px;
        }
        .detail-value {
            color: #0f172a;
        }
        .participant-info {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .participant-info h4 {
            margin: 0 0 15px 0;
            color: #0f172a;
            font-size: 16px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }
        .info-item {
            font-size: 13px;
        }
        .info-item-label {
            color: #64748b;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }
        .info-item-value {
            color: #0f172a;
            font-weight: 500;
        }
        .reference-box {
            background: #f0fdf4;
            border: 2px dashed #86efac;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            margin: 30px 0;
        }
        .reference-label {
            color: #064e3b;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }
        .reference-code {
            font-family: 'Courier New', monospace;
            font-size: 18px;
            font-weight: bold;
            color: #059669;
            background: #ffffff;
            padding: 12px 20px;
            border-radius: 6px;
            display: inline-block;
        }
        .button {
            display: inline-block;
            background: #10b981;
            color: #ffffff !important;
            text-decoration: none;
            padding: 14px 32px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            margin: 20px 0;
            text-align: center;
        }
        .footer {
            background: #f8fafc;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }
        .footer-text {
            color: #64748b;
            font-size: 13px;
            margin-bottom: 15px;
        }
        .social {
            margin-top: 20px;
        }
        .social a {
            color: #059669;
            text-decoration: none;
            font-weight: 600;
        }
        @media only screen and (max-width: 600px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <h1>HOREB 2026</h1>
            <p>Retiro de Hombres</p>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="greeting">
                ¡Hola {{ $registration->first_name }} {{ $registration->last_name }}!
            </div>

            <div class="message">
                <p><strong>¡Tu registro ha sido confirmado exitosamente!</strong></p>
                <p>Estamos emocionados de tenerte en nuestro próximo retiro de hombres HOREB 2026. Tu registro está completo y tu lugar está asegurado.</p>
            </div>

            <!-- Event Details -->
            <div class="event-details">
                <h3>📅 Detalles del Evento</h3>
                <div class="detail-row">
                    <span class="detail-label">Fecha:</span>
                    <span class="detail-value">2 - 5 de Abril, 2026</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Lugar:</span>
                    <span class="detail-value">Villeta, Colombia</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Dirección:</span>
                    <span class="detail-value">Km 5 Vía Villeta / La Vega - Restaurante Los Abuelos</span>
                </div>
            </div>

            <!-- Participant Info -->
            <div class="participant-info">
                <h4>Tus Datos de Registro</h4>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-item-label">Email</div>
                        <div class="info-item-value">{{ $registration->email }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-item-label">Documento</div>
                        <div class="info-item-value">{{ $registration->document_id }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-item-label">Ministerio</div>
                        <div class="info-item-value">{{ $registration->ministry === 'Otro' ? $registration->ministry_other : $registration->ministry }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-item-label">Talla</div>
                        <div class="info-item-value">{{ $registration->shirt_size }}</div>
                    </div>
                </div>
            </div>

            <!-- Reference -->
            <div class="reference-box">
                <div class="reference-label">Número de Registro</div>
                <div class="reference-code">HOREB-{{ str_pad($registration->id, 6, '0', STR_PAD_LEFT) }}</div>
                <p style="margin-top: 10px; color: #064e3b; font-size: 12px;">
                    Guarda este código para el check-in
                </p>
            </div>

            <!-- Message -->
            <div class="message">
                <p><strong>📎 Comprobante Adjunto</strong></p>
                <p>Adjuntamos tu comprobante de registro en formato PDF. Por favor, descárgalo y guárdalo. Lo necesitarás para el check-in en el evento.</p>
            </div>

            <div class="message">
                <p><strong>Próximos Pasos:</strong></p>
                <ul style="color: #475569; line-height: 1.8;">
                    <li>Guarda este correo y el comprobante adjunto</li>
                    <li>Marca tu calendario: 2-5 de Abril, 2026</li>
                    <li>Prepárate para un encuentro transformador</li>
                    <li>Síguenos en Instagram @na.rangers para actualizaciones</li>
                </ul>
            </div>

            <div class="message" style="background: #fef3c7; padding: 15px; border-left: 4px solid #f59e0b; border-radius: 4px;">
                <p style="margin: 0; color: #78350f;"><strong>💡 Importante:</strong> Presenta tu comprobante (físico o digital) en el registro del evento.</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-text">
                Si tienes alguna pregunta, no dudes en contactarnos.
            </div>
            <div class="footer-text">
                <strong>¡Nos vemos en HOREB 2026!</strong>
            </div>
            <div class="social">
                Instagram: <a href="https://instagram.com/na.rangers">@na.rangers</a>
            </div>
            <div class="footer-text" style="margin-top: 20px; font-size: 11px;">
                © {{ date('Y') }} HOREB Colombia. Todos los derechos reservados.
            </div>
        </div>
    </div>
</body>
</html>
