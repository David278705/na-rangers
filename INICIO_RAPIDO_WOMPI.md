# 🚀 Inicio Rápido - HOREB 2026

## Instalación y Configuración (5 minutos)

### 1. Instalar Dependencias

```bash
# Backend (PHP/Laravel)
composer install

# Frontend (Vue/Vite)
npm install
```

### 2. Configurar Base de Datos

En `.env`:

```bash
DB_CONNECTION=sqlite
# O si usas MySQL:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=horeb2026
# DB_USERNAME=root
# DB_PASSWORD=
```

Ejecutar migraciones:

```bash
php artisan migrate
```

### 3. Configurar Wompi (IMPORTANTE)

1. **Registro en Wompi**

    - Ir a [comercios.wompi.co](https://comercios.wompi.co/)
    - Crear cuenta gratis
    - Ir a: **Desarrolladores > Secretos para integración técnica**

2. **Copiar llaves en `.env`**

    ```bash
    WOMPI_PUBLIC_KEY=pub_test_XXXXXXXXXXXXXXX
    WOMPI_INTEGRITY_SECRET=prod_integrity_XXXXXXXXXXXXXXX
    WOMPI_EVENTS_SECRET=prod_events_XXXXXXXXXXXXXXX
    VITE_WOMPI_PUBLIC_KEY="${WOMPI_PUBLIC_KEY}"
    ```

3. **Configurar Webhook** (para recibir notificaciones de pago)
    - En Wompi dashboard: **Desarrolladores > URL de Eventos**
    - URL: `https://tu-servidor.com/api/wompi/webhook`
    - ⚠️ Debe ser HTTPS en producción

### 4. Configurar Email (Opcional para desarrollo)

Para enviar comprobantes por correo:

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

### 5. Iniciar Servidores

```bash
# Terminal 1: Laravel Backend
php artisan serve

# Terminal 2: Vite Frontend
npm run dev
```

### 6. Acceder a la Aplicación

Abrir en el navegador:

```
http://localhost:8000
```

O si Laravel está en puerto diferente, usar el que muestre Vite (generalmente 5173).

---

## 🧪 Testing Rápido

### Tarjeta de Prueba (Sandbox Wompi)

**Pago Aprobado:**

-   Número: `4242 4242 4242 4242`
-   CVV: `123` (cualquier 3 dígitos)
-   Fecha: Cualquier fecha futura

**Pago Rechazado:**

-   Número: `4111 1111 1111 1111`

### Flujo de Testing

1. **Ir a landing page** → Ver wallpaper y precios
2. **Click "Registrarse Ahora"** → Ver formulario
3. **Completar datos**:
    - Nombre: Juan Pérez
    - Email: test@example.com
    - Teléfono: +57 300 123 4567
    - Edad: 30
    - Talla: M
    - Emergencia: María Pérez - 300 999 8888
4. **Click "Continuar al Pago"** → Se abre Wompi Widget
5. **Usar tarjeta de prueba** → Pago exitoso
6. **Ver página de éxito** → Descargar PDF
7. **Revisar email** → Comprobante adjunto

---

## 📁 Estructura del Proyecto

```
na-rangers/
├── app/
│   ├── Http/Controllers/
│   │   ├── RegistrationController.php    ← Registros y PDF
│   │   └── WompiWebhookController.php     ← Webhooks de pago
│   ├── Mail/
│   │   └── RegistrationConfirmation.php   ← Email con PDF
│   └── Models/
│       └── Registration.php               ← Modelo de datos
├── resources/
│   ├── js/
│   │   ├── pages/
│   │   │   ├── Home.vue                   ← Landing + Form + Pago
│   │   │   └── Success.vue                ← Confirmación
│   │   └── router/index.js                ← Rutas
│   └── views/
│       ├── emails/
│       │   └── registration-confirmation.blade.php
│       └── pdf/
│           └── voucher.blade.php          ← Comprobante PDF
├── routes/
│   └── api.php                            ← API endpoints
├── database/migrations/
│   └── *_create_registrations_table.php  ← Schema
├── .env                                   ← Configuración
├── INTEGRACION_WOMPI.md                  ← Guía detallada
└── RESUMEN_INTEGRACION.md                ← Resumen técnico
```

---

## 🛠️ Comandos Útiles

```bash
# Ver logs de Laravel
tail -f storage/logs/laravel.log

# Limpiar cache
php artisan config:clear
php artisan cache:clear

# Recompilar assets
npm run build

# Ejecutar tests (si los tienes)
php artisan test

# Ver lista de rutas
php artisan route:list

# Ver migraciones ejecutadas
php artisan migrate:status
```

---

## ⚠️ Troubleshooting Común

**Error: "Wompi widget no se abre"**

-   ✅ Verifica que `VITE_WOMPI_PUBLIC_KEY` esté en .env
-   ✅ Recompila assets: `npm run dev`
-   ✅ Revisa consola del navegador (F12)

**Error: "Email no se envía"**

-   ✅ Configura MAIL\_\* en .env
-   ✅ Usa `php artisan queue:work` si usas colas
-   ✅ Revisa `storage/logs/laravel.log`

**Error: "PDF no se genera"**

-   ✅ Verifica que DomPDF esté instalado: `composer show | grep dompdf`
-   ✅ Revisa permisos de `storage/`
-   ✅ Chequea template blade

**Webhook no recibe eventos**

-   ✅ URL debe ser HTTPS (en producción)
-   ✅ Debe responder 200 OK
-   ✅ Verifica logs: `storage/logs/laravel.log`
-   ✅ Confirma secreto de eventos correcto

---

## 🎯 Siguiente: Ir a Producción

1. ✅ Cambiar a llaves de producción Wompi (pub*prod*\*)
2. ✅ Configurar dominio real con HTTPS
3. ✅ Configurar SMTP de producción
4. ✅ Optimizar: `npm run build`
5. ✅ Configurar servidor web (Apache/Nginx)
6. ✅ Probar flujo completo

---

## 📞 Soporte

-   📖 Documentación completa: `INTEGRACION_WOMPI.md`
-   🔧 Resumen técnico: `RESUMEN_INTEGRACION.md`
-   📸 Instagram: [@na.rangers](https://instagram.com/na.rangers)

---

**¡Todo listo! 🎉**

El sistema está completo y funcional. Solo necesitas configurar tus llaves de Wompi y estás listo para empezar a recibir registros.
