# Medical Appointment App

## Objetivo General
Desarrollar un sistema integral para la gestión de citas médicas que facilite la interacción entre doctores y pacientes.

## Tecnologías a Utilizar
* **Framework:** Laravel 12
* **Frontend:** Livewire & Tailwind CSS (Jetstream)
* **Base de Datos:** MySQL
* **Gestor de Paquetes:** Composer & NPM

Documentación ADA 2 - Medical Appointment App

Este documento detalla la configuración inicial del proyecto Laravel con Jetstream, la integración de la base de datos MySQL y la creación de un panel administrativo personalizado utilizando Flowbite y Blade Components.

1. Configuración Inicial del Proyecto
Se realizaron ajustes en el núcleo del framework para adaptar la aplicación al entorno local y requisitos de la rúbrica:

Idioma y Timezone: Se configuró el archivo config/app.php estableciendo 'locale' => 'es' para el español y 'timezone' => 'America/Merida' para el horario local.

Base de Datos (MySQL): Se configuró el archivo .env con las credenciales correspondientes a la base de datos local medical_appointment_app.

Fotos de Perfil: Se habilitó la característica Features::profilePhotos() en config/jetstream.php para permitir la gestión de imágenes de usuario.

Verificación:
El idioma se verificó al observar los formularios de Jetstream traducidos.

MySQL se validó ejecutando php artisan migrate, creando exitosamente las tablas de usuarios y sesiones.

La foto de perfil se validó mediante el comando php artisan storage:link para hacer públicos los archivos.

2. Creación del Layout Admin
Se implementó un sistema de plantillas basado en componentes de Blade para separar la lógica de diseño del contenido.

Paso 1: Componente Base: Se creó el archivo resources/views/components/admin-layout.blade.php.

Paso 2: Integración de Flowbite: Se añadieron los CDN de CSS y JS de Flowbite en el encabezado y al final del cuerpo para habilitar los componentes interactivos.

Paso 3: Definición del Slot: Se colocó la variable {{ $slot }} dentro del área de contenido principal, rodeada por clases de margen (sm:ml-64) para evitar que el Sidebar la cubra.

3. Integración de Componentes UI
Para cumplir con los requisitos visuales, se implementaron los siguientes elementos de Flowbite:

Navbar Superior: Incluye el nombre de la app y el botón de perfil del usuario.

Dropdown de Usuario: Utiliza lógica de Jetstream para mostrar el nombre (Auth::user()->name) y el correo del usuario logueado al hacer clic.

Sidebar Lateral: Se configuró como una barra fija con enlaces al Dashboard y al Perfil del usuario, asegurando que se mantenga visible en todas las rutas administrativas.

4. Pruebas de Funcionamiento
La validación final se realizó siguiendo estos pasos:

Login de Usuario: Se accedió al sistema para garantizar que Auth::user() no fuera nulo.

Prueba de Slot: Se creó una vista index.blade.php envuelta en <x-admin-layout>, verificando que el texto dinámico apareciera correctamente en el centro del panel.

Interactividad del Dropdown: Se comprobó que el menú de usuario se despliega correctamente al interactuar con el avatar.

Persistencia del Layout: Se navegó hacia la página de perfil de Jetstream para confirmar que el Sidebar lateral seguía visible, cumpliendo con la incrustación de la plantilla.
