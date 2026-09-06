# Reflecta Vidriería — Website

Institutional website for Reflecta Vidriería, a real glass and glazing business in Uruguay. Built with HTML, SCSS and Bootstrap.

> **Note:** the business no longer operates this website (the client discontinued hosting), so this repository stands as a portfolio showcase of the work done. The contact form is intentionally disabled in this version — it simulates the submission flow but does not send data to any server, to avoid accidentally contacting the real business.

## Features

- Responsive design with Bootstrap 5
- Image carousel of completed projects (Flickity)
- Home, Services and Contact pages
- Styles written in SCSS, compiled to CSS
- Optimized images for fast loading

## Tech Stack

- HTML5
- SCSS (Dart Sass)
- Bootstrap 5
- Flickity (carousel)
- Font Awesome (icons)

## Project Structure

```
├── assets/           # Site images
├── css/              # Compiled CSS (do not edit directly)
├── scss/             # Source styles (edit here)
├── js/               # Site scripts
├── pages/            # Internal pages (services, contact, success)
├── index.html         # Home page
└── package.json
```

## Local Development

1. Clone the repository and install dependencies:
   ```bash
   npm install
   ```

2. Compile styles once:
   ```bash
   npm run build-css
   ```

3. Automatically recompile while editing SCSS:
   ```bash
   npm run watch-css
   ```

4. Open `index.html` directly in the browser — no server required.

**Important:** styles are always edited in `scss/style.scss`, never directly in `css/style.css` — that file is generated automatically by `build-css`, and any manual edits there are lost on the next compile.

## Contact Form

In the original production version, the form used [formsubmit.co](https://formsubmit.co/) to send messages by email without a custom backend. In this portfolio version, submission is simulated with JavaScript (no data is sent to any server) to avoid accidental contact with the real business, which is no longer operating.

To reactivate the form for real use, it would be enough to:
1. Create an account on formsubmit.co (or similar) with the desired destination email.
2. Replace the simulation `<script>` in `pages/contacto.html` with a form `action` pointing to the corresponding endpoint.

## License

ISC