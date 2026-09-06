# Reflecta Vidriería — Sitio Web

Sitio web institucional para Reflecta Vidriería, un negocio real de vidriería y cristalería en Uruguay. Desarrollado con HTML, SCSS y Bootstrap.

> **Nota:** el negocio dejó de operar este sitio (el cliente no renovó el hosting), por lo que este repositorio queda como muestra de portfolio del trabajo realizado. El formulario de contacto está intencionalmente deshabilitado en esta versión — simula el flujo de envío pero no manda datos a ningún servidor, para no generar contactos accidentales hacia el negocio real.

## Características

- Diseño responsive con Bootstrap 5
- Carrusel de imágenes de trabajos realizados (Flickity)
- Páginas de Inicio, Servicios y Contacto
- Estilos escritos en SCSS, compilados a CSS
- Optimización de imágenes para carga rápida

## Tech Stack

- HTML5
- SCSS (Dart Sass)
- Bootstrap 5
- Flickity (carrusel)
- Font Awesome (iconografía)

## Estructura del proyecto

```
├── assets/           # Imágenes del sitio
├── css/              # CSS compilado (no editar directamente)
├── scss/             # Código fuente de estilos (acá se edita)
├── js/               # Scripts del sitio
├── pages/            # Páginas internas (servicios, contacto, éxito)
├── index.html         # Página de inicio
└── package.json
```

## Desarrollo local

1. Clonar el repositorio e instalar dependencias:
   ```bash
   npm install
   ```

2. Para compilar los estilos una vez:
   ```bash
   npm run build-css
   ```

3. Para recompilar automáticamente mientras editás el SCSS:
   ```bash
   npm run watch-css
   ```

4. Abrir `index.html` directamente en el navegador — no requiere servidor.

**Importante:** los estilos se editan siempre en `scss/style.scss`, nunca directamente en `css/style.css` — ese archivo se genera automáticamente al correr `build-css` y cualquier cambio manual ahí se pierde en la próxima compilación.

## Formulario de contacto

En la versión original en producción, el formulario usaba [formsubmit.co](https://formsubmit.co/) para enviar los mensajes por email sin necesidad de backend propio. En esta versión de portfolio, el envío está simulado con JavaScript (no manda datos a ningún servidor) para evitar contactos accidentales hacia el negocio real, que ya no está operativo.

Si se quisiera reactivar el formulario para un uso real, bastaría con:
1. Crear una cuenta en formsubmit.co (o similar) con el email de destino deseado.
2. Reemplazar el `<script>` de simulación en `pages/contacto.html` por un `action` de formulario apuntando al endpoint correspondiente.

## Licencia

ISC