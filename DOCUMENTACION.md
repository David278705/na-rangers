# 📋 Documentación Completa - NA Rangers

## 🎯 Resumen del Proyecto

**NA Rangers** es una aplicación full-stack moderna construida con:

- **Backend:** Laravel 12
- **Frontend:** Vue 3 con Composition API
- **Enrutamiento:** Vue Router (modo History)
- **Estilos:** Tailwind CSS
- **HTTP Client:** Axios
- **Autenticación:** Laravel Sanctum
- **Build Tool:** Vite

---

## 📦 Paquetes Instalados

### Backend (Composer)
```json
{
  "laravel/framework": "^12.0",
  "laravel/sanctum": "^4.2"
}
```

### Frontend (NPM)
```json
{
  "vue": "latest",
  "vue-router": "latest",
  "axios": "latest",
  "tailwindcss": "latest",
  "@tailwindcss/postcss": "latest",
  "@vitejs/plugin-vue": "latest"
}
```

---

## 🗂️ Estructura del Proyecto

```
na-rangers/
├── app/
│   └── Http/
│       └── Controllers/
│           └── Api/
│               └── ExampleController.php   # Controlador API de ejemplo
├── bootstrap/
│   └── app.php                             # Configuración de Laravel (API routes habilitadas)
├── config/                                 # Archivos de configuración Laravel
├── database/
│   ├── migrations/                         # Migraciones de base de datos
│   └── seeders/                            # Seeders
├── public/
│   └── build/                              # Assets compilados por Vite
├── resources/
│   ├── css/
│   │   └── app.css                         # Tailwind CSS
│   ├── js/
│   │   ├── composables/
│   │   │   └── useApi.js                   # Composable para peticiones API
│   │   ├── pages/
│   │   │   ├── Home.vue                    # Página de inicio
│   │   │   └── ApiExample.vue              # Ejemplo de CRUD con API
│   │   ├── router/
│   │   │   └── index.js                    # Configuración de Vue Router
│   │   ├── App.vue                         # Componente raíz de Vue
│   │   ├── app.js                          # Punto de entrada de Vue
│   │   └── bootstrap.js                    # Configuración de Axios
│   └── views/
│       └── app.blade.php                   # Vista principal (SPA container)
├── routes/
│   ├── api.php                             # Rutas API REST
│   ├── console.php                         # Comandos Artisan
│   └── web.php                             # Rutas web (configurado para SPA)
├── storage/                                # Logs, cache, archivos subidos
├── tests/                                  # Tests unitarios y de integración
├── .env                                    # Variables de entorno
├── .env.example                            # Plantilla de variables de entorno
├── .gitignore                              # Archivos ignorados por Git
├── composer.json                           # Dependencias PHP
├── package.json                            # Dependencias Node.js
├── postcss.config.js                       # Configuración PostCSS
├── tailwind.config.js                      # Configuración Tailwind CSS
├── vite.config.js                          # Configuración Vite
├── README.md                               # Documentación principal
└── INICIO_RAPIDO.md                        # Guía de inicio rápido
```

---

## 🚀 Comandos Disponibles

### Desarrollo
```bash
# Iniciar servidor Laravel
php artisan serve

# Compilar assets en modo desarrollo (hot reload)
npm run dev

# Compilar assets para producción
npm run build
```

### Base de Datos
```bash
# Ejecutar migraciones
php artisan migrate

# Revertir última migración
php artisan migrate:rollback

# Ejecutar seeders
php artisan db:seed

# Refrescar base de datos (migrar y sembrar)
php artisan migrate:fresh --seed
```

### Caché y Optimización
```bash
# Limpiar caché
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimizar para producción
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Artisan Útiles
```bash
# Crear controlador
php artisan make:controller NombreController

# Crear modelo con migración
php artisan make:model NombreModelo -m

# Crear migración
php artisan make:migration create_tabla_name

# Crear seeder
php artisan make:seeder NombreSeeder

# Listar rutas
php artisan route:list
```

---

## 🌐 Rutas Disponibles

### Rutas Web
- `GET /` → Aplicación Vue (SPA)
- `GET /{any}` → Aplicación Vue (catchall para Vue Router)

### Rutas API (prefijo: `/api`)
- `GET /api/test` → Endpoint de prueba
- `GET /api/items` → Listar items
- `POST /api/items` → Crear item
- `GET /api/items/{id}` → Ver item
- `PUT/PATCH /api/items/{id}` → Actualizar item
- `DELETE /api/items/{id}` → Eliminar item
- `GET /api/user` → Usuario autenticado (requiere Sanctum)

### Rutas Vue Router
- `/` → Página de inicio (Home.vue)
- `/api-example` → Ejemplo de CRUD con API (ApiExample.vue)

---

## 🎨 Componentes Vue Disponibles

### Páginas
1. **Home.vue** - Página de inicio
   - Diseño atractivo con gradientes
   - Muestra tecnologías instaladas
   - Botón para probar API

2. **ApiExample.vue** - Ejemplo de CRUD
   - Lista de items desde API
   - Formulario para crear items
   - Manejo de estados (loading, error)
   - Uso del composable useApi

### Composables
1. **useApi.js** - Gestión de peticiones API
   - Métodos: `get`, `post`, `put`, `patch`, `del`
   - Estado de loading
   - Manejo de errores

---

## 🔧 Configuración

### Axios (resources/js/bootstrap.js)
```javascript
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
```

### Vue Router (resources/js/router/index.js)
```javascript
// Modo History (URLs limpias sin #)
const router = createRouter({
  history: createWebHistory(),
  routes
});
```

### Tailwind CSS (tailwind.config.js)
```javascript
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  // ...
}
```

### Vite (vite.config.js)
```javascript
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(),
    ],
});
```

---

## 💡 Ejemplos de Uso

### 1. Crear una nueva página Vue

```bash
# 1. Crear el componente
# File: resources/js/pages/MiPagina.vue
```

```vue
<template>
  <div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold">Mi Nueva Página</h1>
  </div>
</template>

<script>
export default {
  name: 'MiPagina'
}
</script>
```

```javascript
// 2. Agregar ruta en resources/js/router/index.js
import MiPagina from '../pages/MiPagina.vue';

const routes = [
  // ... rutas existentes
  {
    path: '/mi-pagina',
    name: 'MiPagina',
    component: MiPagina
  }
];
```

### 2. Crear una ruta API

```php
// routes/api.php
use App\Http\Controllers\Api\ProductoController;

Route::apiResource('productos', ProductoController::class);
```

```bash
# Crear el controlador
php artisan make:controller Api/ProductoController --api
```

### 3. Consumir API desde Vue

```vue
<script>
import { ref, onMounted } from 'vue';
import { useApi } from '../composables/useApi';

export default {
  setup() {
    const { get, post, loading, error } = useApi();
    const productos = ref([]);

    const cargarProductos = async () => {
      const data = await get('/api/productos');
      productos.value = data.data;
    };

    onMounted(() => {
      cargarProductos();
    });

    return { productos, loading, error };
  }
}
</script>
```

---

## 🔐 Configurar Autenticación con Sanctum

### 1. Publicar configuración
```bash
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
```

### 2. Ejecutar migraciones
```bash
php artisan migrate
```

### 3. Configurar middleware en `app/Http/Kernel.php`
```php
'api' => [
    \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
    // ...
],
```

### 4. Crear ruta de login
```php
// routes/api.php
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
```

---

## 🎯 Próximos Pasos Recomendados

1. **Configurar Base de Datos**
   - Editar `.env` con credenciales
   - Ejecutar `php artisan migrate`

2. **Crear Modelos y Migraciones**
   - `php artisan make:model Producto -m`

3. **Implementar Autenticación**
   - Configurar Sanctum
   - Crear sistema de login/registro

4. **Agregar más componentes Vue**
   - Crear carpeta `resources/js/components/`
   - Desarrollar componentes reutilizables

5. **Implementar Tests**
   - `php artisan make:test ProductoTest`
   - Ejecutar tests: `php artisan test`

---

## 📚 Recursos Útiles

- [Documentación Laravel](https://laravel.com/docs)
- [Documentación Vue 3](https://vuejs.org/)
- [Documentación Vue Router](https://router.vuejs.org/)
- [Documentación Tailwind CSS](https://tailwindcss.com/)
- [Documentación Laravel Sanctum](https://laravel.com/docs/sanctum)
- [Documentación Axios](https://axios-http.com/)

---

## 🐛 Solución de Problemas

### Error: "Mix manifest does not exist"
```bash
npm run build
```

### Error: "Class not found"
```bash
composer dump-autoload
```

### Error de CORS
Verificar configuración en `config/cors.php`

### Hot reload no funciona
```bash
npm run dev
# Asegúrate de que Vite está corriendo
```

---

## 📝 Notas Importantes

- El proyecto usa **Vue 3 Composition API**
- **Vite** es el build tool (reemplaza Laravel Mix)
- **Tailwind CSS** versión 4 con PostCSS
- **Laravel Sanctum** está instalado pero no configurado completamente
- El **SPA mode** está activo (todas las rutas web sirven Vue)

---

¡Feliz desarrollo con NA Rangers! 🚀
