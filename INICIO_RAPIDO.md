# Guía de Inicio Rápido - NA Rangers

## 🚀 Proyecto Configurado y Listo

Tu proyecto **NA Rangers** está completamente instalado y configurado con:

- ✅ Laravel 12
- ✅ Vue 3 con Vue Router
- ✅ Tailwind CSS
- ✅ Axios
- ✅ Laravel Sanctum

## 📦 Estado Actual

El proyecto ya tiene todo instalado y compilado. El servidor de desarrollo está corriendo en:

**http://127.0.0.1:8000**

## 🎯 Comandos Principales

### Para desarrollo activo:

```bash
# Terminal 1 - Servidor Laravel
cd C:\xampp\htdocs\na-rangers
php artisan serve

# Terminal 2 - Hot reload de Vite (assets en tiempo real)
cd C:\xampp\htdocs\na-rangers
npm run dev
```

### Para compilar para producción:

```bash
cd C:\xampp\htdocs\na-rangers
npm run build
```

## 📁 Archivos Importantes Creados

### Frontend (Vue):
- `resources/js/App.vue` - Componente raíz de Vue
- `resources/js/app.js` - Configuración principal de Vue
- `resources/js/router/index.js` - Configuración de Vue Router
- `resources/js/pages/Home.vue` - Página de inicio (ruta "/")
- `resources/css/app.css` - Estilos con Tailwind CSS

### Backend (Laravel):
- `routes/web.php` - Configurado para SPA (sirve Vue en todas las rutas)
- `routes/api.php` - Rutas API REST (prefijo /api)
- `resources/views/app.blade.php` - Plantilla Blade principal

### Configuración:
- `vite.config.js` - Configurado con plugin de Vue
- `tailwind.config.js` - Configurado para escanear archivos Vue/Blade
- `postcss.config.js` - Configurado con Tailwind PostCSS

## 🎨 Página Inicial

La página inicial (`Home.vue`) incluye:
- Diseño moderno con gradientes
- Cards animadas mostrando las tecnologías
- Diseño responsivo con Tailwind
- Botón de ejemplo que hace una llamada API con Axios

## 🔧 Próximos Pasos Recomendados

1. **Crear más páginas Vue:**
   ```bash
   # Crea nuevos componentes en:
   resources/js/pages/
   ```

2. **Añadir rutas:**
   - Edita `resources/js/router/index.js` para agregar nuevas rutas

3. **Crear APIs:**
   - Agrega rutas en `routes/api.php`
   - Crea controladores en `app/Http/Controllers/Api/`

4. **Configurar autenticación:**
   - Laravel Sanctum ya está instalado
   - Publica la configuración: `php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"`

5. **Base de datos:**
   - Configura `.env` con tus credenciales
   - Ejecuta migraciones: `php artisan migrate`

## 📚 Estructura de Carpetas Vue

```
resources/js/
├── pages/          # Páginas/vistas (rutas principales)
├── components/     # Componentes reutilizables (crear cuando necesites)
├── router/         # Configuración de rutas
├── App.vue         # Componente raíz
├── app.js          # Punto de entrada
└── bootstrap.js    # Configuración de Axios
```

## 🌐 Rutas Disponibles

- **Web:** `http://127.0.0.1:8000/` → Carga la aplicación Vue
- **API:** `http://127.0.0.1:8000/api/test` → Endpoint de prueba

## ⚡ Tips de Desarrollo

1. **Usa `npm run dev`** durante el desarrollo para hot reload automático
2. **Axios está pre-configurado** en `bootstrap.js`
3. **Las rutas API tienen prefijo `/api`** automáticamente
4. **Vue Router usa modo history** (URLs limpias sin #)

## 🎉 ¡Listo para Desarrollar!

Abre tu navegador en http://127.0.0.1:8000 y verás tu página de inicio funcionando.

Para cualquier cambio en Vue, asegúrate de tener `npm run dev` corriendo en segundo plano.
