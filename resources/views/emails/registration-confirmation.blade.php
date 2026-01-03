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
                <h3>💰 1. Confirmación de Pago</h3>
                <p style="margin-bottom: 15px; color: #475569;">Realiza el depósito/transferencia a la siguiente cuenta de Bancolombia:</p>
                
                <div style="background: #ffffff; border: 2px solid #10b981; border-radius: 8px; padding: 20px; margin: 15px 0;">
                    <div class="detail-row">
                        <span class="detail-label">Banco:</span>
                        <span class="detail-value"><strong>Bancolombia</strong></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Tipo de Cuenta:</span>
                        <span class="detail-value"><strong>Cuenta de Ahorros</strong></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Número de Cuenta:</span>
                        <span class="detail-value"><strong style="font-size: 18px; color: #059669;">853 00000 262</strong></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Beneficiario:</span>
                        <span class="detail-value"><strong>Nuevo Amanecer Pereira</strong></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">NIT:</span>
                        <span class="detail-value"><strong>901356691-6</strong></span>
                    </div>
                </div>
            </div>

            <!-- Send Proof Instructions -->
            <div class="event-details" style="background: #fef3c7; border-left: 4px solid #f59e0b;">
                <h3>📸 2. Envío del Comprobante</h3>
                <p style="color: #78350f; margin-bottom: 10px;">Una vez realizado el pago, por favor, <strong>envía un pantallazo o foto del comprobante de pago</strong> al siguiente correo electrónico:</p>
                <div style="text-align: center; margin: 15px 0;">
                    <a href="mailto:narangers@naglobal.org" style="display: inline-block; background: #059669; color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 6px; font-weight: 600;">narangers@naglobal.org</a>
                </div>
                <p style="color: #78350f; font-size: 13px; margin-top: 10px;">📱 También puedes reportar tu pago vía WhatsApp al: <strong>321 6467232</strong></p>
                <p style="color: #78350f; font-size: 12px; margin-top: 10px; font-style: italic;">Este paso es crucial, ya que nos permite identificarte y completar tu registro formalmente.</p>
            </div>

            <!-- Pricing Table -->
            <div class="participant-info" style="background: #f0fdf4; border: 2px solid #86efac;">
                <h4 style="color: #065f46; border-bottom: 2px solid #86efac;">🚨 Recordatorio Importante: ¡Aprovecha la Tarifa Especial!</h4>
                <p style="color: #065f46; margin-bottom: 15px;">Hemos extendido la fecha para tu beneficio. Esta es la estructura de tarifas:</p>
                
                <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                    <thead>
                        <tr style="background: #059669; color: #ffffff;">
                            <th style="padding: 12px; text-align: left; border: 1px solid #10b981;">Período de Pago</th>
                            <th style="padding: 12px; text-align: left; border: 1px solid #10b981;">Costo por Persona</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background: #ffffff;">
                            <td style="padding: 12px; border: 1px solid #d1fae5; color: #065f46;"><strong>Desde hoy hasta el 15 de febrero</strong></td>
                            <td style="padding: 12px; border: 1px solid #d1fae5; color: #065f46;"><strong>$800.000 COP</strong><br><span style="font-size: 12px;">(Ochocientos mil pesos colombianos)</span></td>
                        </tr>
                        <tr style="background: #f0fdf4;">
                            <td style="padding: 12px; border: 1px solid #d1fae5; color: #065f46;"><strong>A partir del 16 de febrero</strong></td>
                            <td style="padding: 12px; border: 1px solid #d1fae5; color: #065f46;"><strong>$1.000.000 COP</strong><br><span style="font-size: 12px;">(Un millón de pesos colombianos)</span></td>
                        </tr>
                    </tbody>
                </table>
                
                <div style="background: #dcfce7; padding: 15px; border-radius: 6px; margin-top: 15px;">
                    <p style="margin: 0; color: #065f46; font-weight: 600; font-size: 15px;">✅ ¡Asegura tu tarifa especial de $800.000 COP pagando antes del 15 de febrero!</p>
                </div>
                
                <div style="background: #fef3c7; padding: 15px; border-radius: 6px; margin-top: 15px; border: 2px solid #f59e0b;">
                    <p style="margin: 0; color: #78350f; font-weight: 600; font-size: 15px;">💵 ¡Puedes apartar tu cupo con solo $200.000 COP!</p>
                    <p style="margin: 10px 0 0 0; color: #78350f; font-size: 13px;">Realiza un abono de $200.000 COP para reservar tu lugar y completa el pago del saldo restante antes del evento.</p>
                </div>
                
                <p style="color: #065f46; margin-top: 15px; font-size: 13px;"><strong>Importante:</strong> La tarifa que se aplicará es la vigente a la fecha en la que se reciba tu pago, y no la de tu pre-registración.</p>
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
                <h4>📋 Tus Datos de Pre-Registro</h4>
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
                <p><strong>📎 Comprobante Adjunto</strong></p>
                <p>Adjuntamos tu comprobante de pre-registro en formato PDF. Guárdalo junto con el comprobante de pago que realizarás.</p>
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
                    ⚠️ <strong>Nota:</strong> Este es un correo automático. Por favor no responder a esta dirección. Para cualquier consulta, contacta a <a href="mailto:narangers@naglobal.org" style="color: #059669; text-decoration: underline;">narangers@naglobal.org</a>
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
