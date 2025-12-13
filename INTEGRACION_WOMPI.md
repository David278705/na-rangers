# Integración de Pagos con Wompi - HOREB 2026

## Configuración Completa ✅

### 1. Variables de Entorno

Copia `.env.example` a `.env` y configura las siguientes variables de Wompi:

```bash
# Wompi Payment Gateway
WOMPI_PUBLIC_KEY=pub_test_X0zDA9xoKdePzhd8a0x9HAez7HgGO2fH  # Reemplaza con tu llave pública
WOMPI_PRIVATE_KEY=                                          # Tu llave privada (opcional para backend)
WOMPI_INTEGRITY_SECRET=prod_integrity_XXXXXXXXX              # Secreto de integridad
WOMPI_EVENTS_SECRET=prod_events_XXXXXXXXX                    # Secreto para webhooks
WOMPI_CURRENCY=COP

# Exponer la llave pública al frontend
VITE_WOMPI_PUBLIC_KEY="${WOMPI_PUBLIC_KEY}"
```

### 2. Obtener Llaves de Wompi

1. Regístrate en [comercios.wompi.co](https://comercios.wompi.co/)
2. Ve a **Desarrolladores > Secretos para integración técnica**
3. Copia:
    - **Llave Pública** (pub*test*_ para pruebas, pub*prod*_ para producción)
    - **Secreto de Integridad** (prod*integrity*\*)
    - **Secreto para Eventos** (prod*events*\*)

### 3. Configurar URL de Webhooks

En el dashboard de Wompi:

1. Ve a **Desarrolladores > URL de Eventos**
2. Configura la URL de tu servidor:
    - **Sandbox**: `https://tu-dominio.com/api/wompi/webhook`
    - **Producción**: `https://tu-dominio-prod.com/api/wompi/webhook`

⚠️ **Importante**: La URL debe ser HTTPS y responder con status 200

### 4. Configuración de Email

Para enviar comprobantes por correo, configura en `.env`:

```bash
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=tu-email@gmail.com
MAIL_PASSWORD=tu-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@horeb2026.com"
MAIL_FROM_NAME="HOREB Colombia 2026"
```

### 5. Instalación

```bash
# Instalar dependencias PHP
composer install

# Instalar dependencias JavaScript
npm install

# Ejecutar migraciones
php artisan migrate

# Compilar assets para desarrollo
npm run dev

# O para producción
npm run build
```

### 6. Flujo de Pago Implementado

#### Frontend (Home.vue)

1. Usuario completa formulario de registro
2. Selecciona precio (promocional $800,000 o regular $1,000,000 COP)
3. Submit crea registro en base de datos vía API
4. Backend genera firma de integridad SHA256
5. Se abre el Wompi Checkout Widget con los datos
6. Usuario completa pago (tarjeta, PSE, Nequi, etc.)
7. Wompi redirige a página de éxito

#### Backend (Webhook)

1. Wompi envía evento `transaction.updated` al webhook
2. Controller verifica firma de seguridad
3. Actualiza estado del registro según resultado
4. Si es APPROVED: envía email con PDF adjunto
5. Responde 200 OK a Wompi

#### Email y PDF

-   Email HTML profesional con detalles del evento
-   PDF comprobante con diseño personalizado
-   QR code con referencia de pago
-   Información completa del participante

### 7. Archivos Creados

```
app/
├── Http/Controllers/
│   ├── RegistrationController.php        # Crear registro, descargar PDF
│   └── WompiWebhookController.php         # Procesar webhooks de Wompi
├── Mail/
│   └── RegistrationConfirmation.php       # Email con PDF adjunto
└── Models/
    └── Registration.php                    # Modelo de registro

resources/
├── views/
│   ├── emails/
│   │   └── registration-confirmation.blade.php  # Template de email
│   └── pdf/
│       └── voucher.blade.php              # Template de comprobante PDF
└── js/
    ├── pages/
    │   ├── Home.vue                       # Landing + Form + Wompi Widget
    │   └── Success.vue                    # Página de confirmación
    └── router/index.js                    # Rutas (/, /success)

routes/
└── api.php                                # Endpoints: registrations, webhook

database/migrations/
└── *_create_registrations_table.php      # Schema de DB

config/
└── services.php                           # Config de Wompi
```

### 8. Endpoints API

```
POST   /api/registrations              # Crear registro y obtener datos de pago
GET    /api/registrations/{id}         # Consultar registro
GET    /api/registrations/{id}/voucher # Descargar PDF
POST   /api/wompi/webhook              # Webhook de Wompi (no requiere auth)
```

### 9. Testing en Sandbox

Wompi proporciona tarjetas de prueba:

**Aprobada:**

-   Número: `4242 4242 4242 4242`
-   CVV: Cualquier 3 dígitos
-   Fecha: Cualquier fecha futura

**Rechazada:**

-   Número: `4111 1111 1111 1111`

Ver más en: [docs.wompi.co/docs/colombia/datos-de-prueba-en-sandbox](https://docs.wompi.co/docs/colombia/datos-de-prueba-en-sandbox/)

### 10. Seguridad Implementada

✅ Firma de integridad SHA256 para checkout
✅ Verificación de firma en webhooks
✅ Validación de datos del formulario
✅ Referencias únicas de pago
✅ CSRF protection en API routes
✅ Solo pagos aprobados pueden descargar voucher

### 11. Precios Configurados

-   **Precio Promocional**: $800,000 COP (80000000 centavos)
-   **Precio Regular**: $1,000,000 COP (100000000 centavos)

### 12. Características Adicionales

-   🎨 Diseño responsive con Tailwind CSS v4
-   💳 Soporte para múltiples métodos de pago (Wompi)
-   📧 Email automático con comprobante
-   📄 PDF profesional descargable
-   🔔 SweetAlert2 para notificaciones
-   📱 Adaptado para mobile
-   🌐 Selección de precio en landing page

### 13. Troubleshooting

**Webhook no funciona:**

-   Verifica que la URL sea HTTPS
-   Revisa logs: `storage/logs/laravel.log`
-   Confirma que el secreto de eventos sea correcto

**Email no se envía:**

-   Verifica configuración SMTP en .env
-   Revisa queue: `php artisan queue:work`
-   Chequea logs de mail

**PDF no se genera:**

-   Verifica que DomPDF esté instalado
-   Chequea permisos de `storage/`
-   Revisa template blade

### 14. Contacto

Instagram: [@na.rangers](https://instagram.com/na.rangers)

---

## 🎉 ¡Sistema de Pago Completo y Funcional!

Todos los componentes están integrados y listos para producción.
