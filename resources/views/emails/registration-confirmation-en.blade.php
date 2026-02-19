<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation - HOREB 2026</title>
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
            <p>Men's Retreat</p>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="greeting">
                Welcome to Horeb Camp 2026, Colombia Edition!
            </div>

            <div class="message">
                <p>Dear <strong>{{ $registration->first_name }} {{ $registration->last_name }}</strong>, Warm greetings from NA Rangers!</p>
                <p>We want to thank you for your interest and <strong>pre-registration</strong> for our Horeb Camp 2026. We are very excited to have you join us for this special edition in Colombia.</p>
                <p><strong>Your spot is almost secured.</strong> To confirm your registration and take advantage of the promotional rate, please follow these simple steps as soon as possible:</p>
            </div>

            <!-- Payment Instructions -->
            <div class="event-details">
                <h3>1. Make Your Payment</h3>
                <p style="margin-bottom: 15px; color: #475569;">To confirm your registration, make your payment through our online payment system:</p>
                
                <div style="background: #ffffff; border: 2px solid #10b981; border-radius: 8px; padding: 20px; margin: 15px 0; text-align: center;">
                    <p style="color: #475569; margin-bottom: 15px; font-weight: 600;">Click the button below to go to the payment portal:</p>
                    <a href="https://www.mipagoamigo.com/MPA_WebSite/ServicePayments/StartPayment?id=13875&searchedCategoryId=&searchedAgreementName=IGLESIA%20CRISTIANA%20NUEVO%20AMANECER" 
                       style="display: inline-block; background: #059669; color: #ffffff; text-decoration: none; padding: 16px 32px; border-radius: 8px; font-weight: 700; font-size: 16px; margin: 10px 0;" 
                       target="_blank">PAY NOW</a>
                    
                    <div style="margin: 20px 0; padding: 15px; background: #f0fdf4; border-radius: 6px;">
                        <p style="color: #065f46; font-size: 14px; margin-bottom: 10px;"><strong>Or scan this QR code:</strong></p>
                        <img src="{{ $message->embed(public_path('img/qr.png')) }}" alt="QR Code for payment" style="max-width: 200px; margin: 10px auto; display: block;" />
                    </div>
                </div>
            </div>

            <!-- Send Proof Instructions -->
            <div class="event-details" style="background: #fef3c7; border-left: 4px solid #f59e0b;">
                <h3>2. Submit Payment Receipt</h3>
                <p style="color: #78350f; margin-bottom: 10px;">Once you've made the payment, please <strong>send a screenshot or photo of the payment receipt</strong> to:</p>
                <div style="text-align: center; margin: 15px 0;">
                    <a href="mailto:narangers@naglobal.org" style="display: inline-block; background: #059669; color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 6px; font-weight: 600;">narangers@naglobal.org</a>
                </div>
                <p style="color: #78350f; font-size: 13px; margin-top: 10px;">Or via WhatsApp:</p>
                <div style="color: #065f46; font-size: 13px; line-height: 1.8; margin: 10px 0;">
                    <p><strong>Payments:</strong> Carolina Mejia: +57 (310) 442-3888</p>
                    <p><strong>Colombia Info:</strong> Ismael Marin: +57 (300) 212-9289</p>
                    <p><strong>International Info:</strong> Jan Paol Mendez: +1 (647) 701-6708</p>
                </div>
                <p style="color: #78350f; font-size: 12px; margin-top: 10px; font-style: italic;">This step is crucial, as it allows us to identify you and complete your registration formally.</p>
            </div>

            <!-- Pricing Table -->
            <div class="participant-info" style="background: #f0fdf4; border: 2px solid #86efac;">
                <h4 style="color: #065f46; border-bottom: 2px solid #86efac;">Payment Information</h4>
                
                <table style="width: 100%; border-collapse: collapse; margin: 15px 0;">
                    <thead>
                        <tr style="background: #059669; color: #ffffff;">
                            <th style="padding: 12px; text-align: left; border: 1px solid #10b981;">Concept</th>
                            <th style="padding: 12px; text-align: left; border: 1px solid #10b981;">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background: #ffffff;">
                            <td style="padding: 12px; border: 1px solid #d1fae5; color: #065f46;"><strong>Camp registration fee</strong></td>
                            <td style="padding: 12px; border: 1px solid #d1fae5; color: #065f46;"><strong>$1,000,000 COP</strong><br><span style="font-size: 12px;">(One million Colombian pesos)</span></td>
                        </tr>
                        <tr style="background: #f0fdf4;">
                            <td style="padding: 12px; border: 1px solid #d1fae5; color: #065f46;"><strong>Minimum deposit to reserve your spot</strong></td>
                            <td style="padding: 12px; border: 1px solid #d1fae5; color: #065f46;"><strong>$200,000 COP</strong><br><span style="font-size: 12px;">(Non-refundable)</span></td>
                        </tr>
                    </tbody>
                </table>
                
                <div style="background: #fef3c7; padding: 15px; border-radius: 6px; margin-top: 15px; border: 2px solid #f59e0b;">
                    <p style="margin: 0; color: #78350f; font-weight: 600; font-size: 15px;">You can reserve your spot with just $200,000 COP!</p>
                    <p style="margin: 10px 0 0 0; color: #78350f; font-size: 13px;">Make a deposit of $200,000 COP to reserve your place and complete the remaining balance before the event.</p>
                </div>
                
                <p style="color: #065f46; margin-top: 15px; font-size: 13px;"><strong>Important:</strong> The deadline to complete full payment is March 15, 2026.</p>
                <p style="color: #065f46; font-size: 13px;"><strong>Don't miss this deadline to secure your rate and your spot at Horeb Camp 2026!</strong></p>
            </div>

            <!-- Reference -->
            <div class="reference-box">
                <div class="reference-label">Registration Number</div>
                <div class="reference-code">HOREB-{{ str_pad($registration->id, 6, '0', STR_PAD_LEFT) }}</div>
                <p style="margin-top: 10px; color: #064e3b; font-size: 12px;">
                    Save this code for check-in
                </p>
            </div>

            <!-- Participant Info -->
            <div class="participant-info">
                <h4>Your Pre-Registration Details</h4>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-item-label">Full Name</div>
                        <div class="info-item-value">{{ $registration->first_name }} {{ $registration->last_name }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-item-label">Email</div>
                        <div class="info-item-value">{{ $registration->email }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-item-label">Phone</div>
                        <div class="info-item-value">{{ $registration->phone }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-item-label">Document</div>
                        <div class="info-item-value">{{ $registration->document_id }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-item-label">Ministry</div>
                        <div class="info-item-value">{{ $registration->ministry === 'Other' ? $registration->ministry_other : $registration->ministry }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-item-label">Shirt Size</div>
                        <div class="info-item-value">{{ $registration->shirt_size }}</div>
                    </div>
                </div>
            </div>

            <!-- Message -->
            <div class="message">
                <p><strong>Attached Receipt</strong></p>
                <p>We have attached your pre-registration voucher in PDF format. Keep it together with the payment receipt you will make.</p>
            </div>
            <!-- Notes and Recommendations -->
            <div class="participant-info" style="background: #fef3c7; border-left: 4px solid #f59e0b;">
                <h4 style="color: #78350f; display: flex; align-items: center; gap: 8px;">
                    Important Notes and Recommendations
                </h4>
                <p style="color: #92400e; font-size: 13px; margin-bottom: 12px;">Please read carefully before attending:</p>
                <ul style="color: #78350f; font-size: 13px; line-height: 1.8; margin: 0; padding-left: 20px;">
                    <li><strong>Don't be late.</strong> Plan to arrive at the location by 7:45 am.</li>
                    <li><strong>International travelers:</strong> It is recommended to arrive the day before in Villeta and find accommodation to ensure punctuality and avoid fatigue, as leaving Bogotá can take more than two hours.</li>
                    <li><strong>Correct address:</strong> When entering the address, make sure NOT to go to Los Abuelos restaurant in La Vega, but the one in <strong>VILLETA</strong>.</li>
                    <li><strong>Repellent:</strong> Area with many mosquitoes. Insect repellent is recommended.</li>
                    <li><strong>Transportation:</strong> International travelers can contact Roberto Tamara for assistance with transportation information in Colombia.</li>
                    <li><strong>No refunds:</strong> There will be no refund for those who are not present when the camp begins.</li>
                    <li><strong>Medications:</strong> If you need to bring any specific medication, you must inform at the time of registration and check-in on the day of the camp.</li>
                </ul>
            </div>
            <div class="message">
                <p style="color: #475569; line-height: 1.8;">If you have any questions, please don't hesitate to contact us.</p>
                <p style="margin-top: 20px;"><strong>Sincerely,</strong><br>The NA Rangers Team</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-text" style="background: #fef3c7; padding: 15px; border-radius: 6px; margin-bottom: 20px; border: 1px solid #fbbf24;">
                <p style="margin: 0; color: #78350f; font-size: 13px;">
                    <strong>Note:</strong> This is an automated email. Please do not reply to this address. For any inquiries, contact <a href="mailto:narangers@naglobal.org" style="color: #059669; text-decoration: underline;">narangers@naglobal.org</a>
                </p>
            </div>
            <div class="footer-text">
                If you have any questions, please don't hesitate to contact us.
            </div>
            <div class="footer-text">
                <strong>See you at HOREB 2026!</strong>
            </div>
            <div class="social">
                Instagram: <a href="https://instagram.com/na.rangers">@na.rangers</a>
            </div>
            <div class="footer-text" style="margin-top: 20px; font-size: 11px;">
                © {{ date('Y') }} HOREB Colombia. All rights reserved.
            </div>
        </div>
    </div>
</body>
</html>
