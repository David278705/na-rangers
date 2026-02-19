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
                ¡Bienvenido al Campamento Horeb 2026, Edición Colombia!
            </div>

            <div class="message">
                <p>Estimado <strong>{{ $registration->first_name }} {{ $registration->last_name }}</strong>, ¡Recibe un cordial saludo de parte de NA Rangers!</p>
                <p>Queremos darte las gracias por tu interés y <strong>pre-registración</strong> en nuestro Campamento Horeb 2026. Estamos muy emocionados de contar contigo para esta edición especial en Colombia.</p>
                <p><strong>Tu cupo está casi asegurado.</strong> Para confirmar tu registro y aprovechar la tarifa promocional, sigue estos sencillos pasos lo antes posible:</p>
            </div>

            <!-- Payment Instructions -->
            <div class="event-details">
                <h3>1. Realiza Tu Pago</h3>
                <p style="margin-bottom: 15px; color: #475569;">Para confirmar tu registro, realiza el pago a través de nuestro sistema de pagos en línea:</p>
                
                <div style="background: #ffffff; border: 2px solid #10b981; border-radius: 8px; padding: 20px; margin: 15px 0; text-align: center;">
                    <p style="color: #475569; margin-bottom: 15px; font-weight: 600;">Haz clic en el siguiente botón para ir al portal de pagos:</p>
                    <a href="https://www.mipagoamigo.com/MPA_WebSite/ServicePayments/StartPayment?id=13875&searchedCategoryId=&searchedAgreementName=IGLESIA%20CRISTIANA%20NUEVO%20AMANECER" 
                       style="display: inline-block; background: #059669; color: #ffffff; text-decoration: none; padding: 16px 32px; border-radius: 8px; font-weight: 700; font-size: 16px; margin: 10px 0;" 
                       target="_blank">PAGAR AHORA</a>
                    
                    <div style="margin: 20px 0; padding: 15px; background: #f0fdf4; border-radius: 6px;">
                        <p style="color: #065f46; font-size: 14px; margin-bottom: 10px;"><strong>O escanea este código QR:</strong></p>
                        <img src="{{ $message->embed(public_path('img/qr.png')) }}" alt="Código QR para pago" style="max-width: 200px; margin: 10px auto; display: block;" />
                    </div>
                </div>
            </div>

            <!-- Send Proof Instructions -->
            <div class="event-details" style="background: #fef3c7; border-left: 4px solid #f59e0b;">
                <h3>2. Envío del Comprobante</h3>
                <p style="color: #78350f; margin-bottom: 10px;">Una vez realizado el pago, por favor, <strong>envía un pantallazo o foto del comprobante de pago</strong> a:</p>
                <div style="text-align: center; margin: 15px 0;">
                    <a href="mailto:narangers@naglobal.org" style="display: inline-block; background: #059669; color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 6px; font-weight: 600;">narangers@naglobal.org</a>
                </div>
                <p style="color: #78350f; font-size: 13px; margin-top: 10px;">O por WhatsApp:</p>
                <div style="color: #065f46; font-size: 13px; line-height: 1.8; margin: 10px 0;">
                    <p><strong>Pagos:</strong> Carolina Mejia: +57 (310) 442-3888</p>
                    <p><strong>Info Colombia:</strong> Ismael Marin: +57 (300) 212-9289</p>
                    <p><strong>Info Exterior:</strong> Jan Paol Mendez: +1 (647) 701-6708</p>
                </div>
                <p style="color: #78350f; font-size: 12px; margin-top: 10px; font-style: italic;">Este paso es crucial, ya que nos permite identificarte y completar tu registro formalmente.</p>
            </div>

            <!-- Pricing Table -->
            <div class="participant-info" style="background: #f0fdf4; border: 2px solid #86efac;">
                <h4 style="color: #065f46; border-bottom: 2px solid #86efac;">Información de Pago</h4>
                
                <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                    <thead>
                        <tr style="background: #059669; color: #ffffff;">
                            <th style="padding: 12px; text-align: left; border: 1px solid #10b981;">Concepto</th>
                            <th style="padding: 12px; text-align: left; border: 1px solid #10b981;">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background: #ffffff;">
                            <td style="padding: 12px; border: 1px solid #d1fae5; color: #065f46;"><strong>Tarifa del campamento</strong></td>
                            <td style="padding: 12px; border: 1px solid #d1fae5; color: #065f46;"><strong>$1.000.000 COP</strong><br><span style="font-size: 12px;">(Un millón de pesos colombianos)</span></td>
                        </tr>
                        <tr style="background: #f0fdf4;">
                            <td style="padding: 12px; border: 1px solid #d1fae5; color: #065f46;"><strong>Depósito mínimo para apartar cupo</strong></td>
                            <td style="padding: 12px; border: 1px solid #d1fae5; color: #065f46;"><strong>$200.000 COP</strong><br><span style="font-size: 12px;">(No reembolsable)</span></td>
                        </tr>
                    </tbody>
                </table>
                
                <div style="background: #fef3c7; padding: 15px; border-radius: 6px; margin-top: 15px; border: 2px solid #f59e0b;">
                    <p style="margin: 0; color: #78350f; font-weight: 600; font-size: 15px;">¡Puedes apartar tu cupo con solo $200.000 COP!</p>
                    <p style="margin: 10px 0 0 0; color: #78350f; font-size: 13px;">Realiza un abono de $200.000 COP para reservar tu lugar y completa el pago del saldo restante antes del evento.</p>
                </div>
                
                <p style="color: #065f46; margin-top: 15px; font-size: 13px;"><strong>Importante:</strong> La fecha límite para completar el pago es el 15 de Marzo de 2026.</p>
                <p style="color: #065f46; font-size: 13px;"><strong>¡No dejes pasar esta fecha límite para asegurar tu tarifa y tu lugar en el Campamento Horeb 2026!</strong></p>
            </div>

            <!-- Reference -->
            <div class="reference-box">
                <div class="reference-label">Número de Registro</div>
                <div class="reference-code">HOREB-{{ str_pad($registration->id, 6, '0', STR_PAD_LEFT) }}</div>
                <p style="margin-top: 10px; color: #064e3b; font-size: 12px;">
                    Guarda este código para el check-in
                </p>
            </div>

            <!-- Participant Info -->
            <div class="participant-info">
                <h4>Tus Datos de Pre-Registro</h4>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-item-label">Nombre Completo</div>
                        <div class="info-item-value">{{ $registration->first_name }} {{ $registration->last_name }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-item-label">Email</div>
                        <div class="info-item-value">{{ $registration->email }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-item-label">Teléfono</div>
                        <div class="info-item-value">{{ $registration->phone }}</div>
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

            <!-- Message -->
            <div class="message">
                <p><strong>Comprobante Adjunto</strong></p>
                <p>Adjuntamos tu comprobante de pre-registro en formato PDF. Guárdalo junto con el comprobante de pago que realizarás.</p>
            </div>
            <!-- Notes and Recommendations -->
            <div class="participant-info" style="background: #fef3c7; border-left: 4px solid #f59e0b;">
                <h4 style="color: #78350f; display: flex; align-items: center; gap: 8px;">
                    Notas y Recomendaciones Importantes
                </h4>
                <p style="color: #92400e; font-size: 13px; margin-bottom: 12px;">Lee cuidadosamente antes de asistir:</p>
                <ul style="color: #78350f; font-size: 13px; line-height: 1.8; margin: 0; padding-left: 20px;">
                    <li><strong>No llegues tarde.</strong> Planea llegar al lugar a las 7:45 am.</li>
                    <li><strong>Viajeros internacionales:</strong> Se recomienda llegar el día anterior a Villeta y buscar alojamiento para facilitar la puntualidad y evitar el cansancio, ya que salir de Bogotá puede tomar más de dos horas.</li>
                    <li><strong>Dirección correcta:</strong> Al ingresar la dirección, asegúrate de NO INGRESAR el restaurante Los Abuelos de La Vega, sino el de <strong>VILLETA</strong>.</li>
                    <li><strong>Repelente:</strong> Lugar de muchos mosquitos y zancudos. Se recomienda llevar repelente.</li>
                    <li><strong>Transporte:</strong> Viajeros internacionales podrán comunicarse con Roberto Tamara para asistencia con información respecto del transporte en Colombia.</li>
                    <li><strong>Sin reembolsos:</strong> No habrá reembolso para aquellos que no estén presentes al momento de comenzar el campamento.</li>
                    <li><strong>Medicamentos:</strong> Si necesitas llevar algún tipo de medicamento específico, debes informar en el momento de la inscripción y en el momento del registro el día del campamento.</li>
                </ul>
            </div>
            <div class="message">
                <p style="color: #475569; line-height: 1.8;">Si tienes alguna pregunta, no dudes en contactarnos.</p>
                <p style="margin-top: 20px;"><strong>Atentamente,</strong><br>El equipo de NA Rangers</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-text" style="background: #fef3c7; padding: 15px; border-radius: 6px; margin-bottom: 20px; border: 1px solid #fbbf24;">
                <p style="margin: 0; color: #78350f; font-size: 13px;">
                    <strong>Nota:</strong> Este es un correo automático. Por favor no responder a esta dirección. Para cualquier consulta, contacta a <a href="mailto:narangers@naglobal.org" style="color: #059669; text-decoration: underline;">narangers@naglobal.org</a>
                </p>
            </div>
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
