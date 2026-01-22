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

### 3. Sistema de Pagos (IMPORTANTE)

Este sistema utiliza un portal de pagos externo para procesar las inscripciones:

**Link de Pago:**
```
https://www.mipagoamigo.com/MPA_WebSite/ServicePayments/StartPayment?id=13875&searchedCategoryId=&searchedAgreementName=IGLESIA%20CRISTIANA%20NUEVO%20AMANECER
```

**Código QR:**
- El código QR para pagos se encuentra en: `public/img/qr.png`
- Este código se muestra automáticamente en:
  - Correos de confirmación (español e inglés)
  - Página de éxito después del registro
  - PDF de comprobante de registro

**Flujo de Pago:**
1. Usuario completa el formulario de pre-registro
2. Recibe un correo con el link de pago y código QR
3. Realiza el pago a través del portal externo o escaneando el QR
4. Envía comprobante de pago a narangers@naglobal.org o WhatsApp 321 6467232
5. El equipo confirma manualmente el pago

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

### Flujo de Prueba del Sistema

**Registro Completo:**

1. **Ir a landing page** → Ver wallpaper y precios
2. **Click "Registrarse Ahora"** → Ver formulario
3. **Completar datos**:
    - Nombre: Juan Pérez
    - Email: test@example.com
    - Documento: 123456789
    - Fecha de Nacimiento: 01/01/1990
    - Lugar de Origen: Bogotá
    - Ministerio: NA Colombia
    - Talla: M
    - Contacto de Emergencia: María Pérez - 300 999 8888
4. **Click "Pre-Registrarme"** → Ver confirmación
5. **Revisar email** → Comprobante adjunto con link de pago y código QR
6. **Página de éxito** → Ver instrucciones de pago con link y QR
7. **Realizar pago** → A través del link o escaneando QR
8. **Enviar comprobante** → A narangers@naglobal.org o WhatsApp

---

## 📁 Estructura del Proyecto

```
na-rangers/
├── app/
│   ├── Http/Controllers/
│   │   └── RegistrationController.php    ← Registros y PDF
│   ├── Mail/
│   │   └── RegistrationConfirmation.php   ← Email con PDF
│   └── Models/
│       └── Registration.php               ← Modelo de datos
├── resources/
│   ├── js/
│   │   ├── pages/
│   │   │   ├── Home.vue                   ← Landing + Form
│   │   │   └── Success.vue                ← Confirmación + Pago
│   │   ├── i18n/
│   │   │   └── translations.js            ← Traducciones ES/EN
│   │   └── router/index.js                ← Rutas
│   └── views/
│       ├── emails/
│       │   ├── registration-confirmation.blade.php      ← Email ES
│       │   └── registration-confirmation-en.blade.php   ← Email EN
│       └── pdf/
│           └── voucher.blade.php          ← Comprobante PDF
├── public/
│   └── img/
│       ├── qr.png                         ← Código QR para pagos
│       └── wallpaper.jpg                  ← Banner del evento
├── routes/
│   └── api.php                            ← API endpoints
├── database/migrations/
│   └── *_create_registrations_table.php  ← Schema
└── .env                                   ← Configuración
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

**Error: "Email no se envía"**

-   ✅ Configura MAIL\_\* en .env
-   ✅ Usa `php artisan queue:work` si usas colas
-   ✅ Revisa `storage/logs/laravel.log`

**Error: "PDF no se genera"**

-   ✅ Verifica que DomPDF esté instalado: `composer show | grep dompdf`
-   ✅ Revisa permisos de `storage/`
-   ✅ Chequea template blade

**Imagen QR no aparece**

-   ✅ Verifica que existe `public/img/qr.png`
-   ✅ Comprueba permisos de lectura del archivo
-   ✅ Revisa la ruta en el código

**Problema con idioma**

-   ✅ Verifica que el campo `language` esté en la base de datos
-   ✅ Comprueba `resources/js/i18n/translations.js`
-   ✅ Revisa localStorage del navegador

---

## 🎯 Siguiente: Ir a Producción

1. ✅ Verificar que el código QR esté en `public/img/qr.png`
2. ✅ Configurar dominio real con HTTPS
3. ✅ Configurar SMTP de producción
4. ✅ Optimizar: `npm run build`
5. ✅ Configurar servidor web (Apache/Nginx)
6. ✅ Probar flujo completo de registro y pago
7. ✅ Verificar que los correos se envíen correctamente

---

## 📞 Soporte

-   📸 Instagram: [@na.rangers](https://instagram.com/na.rangers)
-   📧 Email: narangers@naglobal.org
-   📱 WhatsApp: 321 6467232

---

**¡Todo listo! 🎉**

El sistema está completo y funcional. Los usuarios pueden pre-registrarse y recibir instrucciones para completar su pago a través del link externo o código QR.

