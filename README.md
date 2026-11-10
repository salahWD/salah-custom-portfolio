# Salah Bakhash — portfolio

Bilingual English/Arabic portfolio built with PHP, CSS, and a small amount of progressive JavaScript. No frontend dependencies or build step.

## Local preview

Requires PHP 8.1+ with sessions and JSON.

```powershell
php -S 127.0.0.1:8000 router.php
```

Visit http://127.0.0.1:8000/en/ or http://127.0.0.1:8000/ar/.

Use the supplied router for development so clean URLs and private-file protections work. Apache uses `.htaccess` with mod_rewrite and AllowOverride enabled.

## Content

- `includes/data.php`: public project facts in English and Arabic; categories and featured project selection.
- `includes/content.php`: homepage, expertise, experience.
- `includes/project.php`, `includes/portfolio.php`: project pages, filterable index, original image archive.
- `includes/contact.php`, `includes/contact-handler.php`: contact UI and validation.
- `css/style.css`, `css/ar.css`: responsive layout and RTL adjustments.
- `media/salah-cv.pdf`: intentionally public CV download.
- `private/`: ignored local coverage and review notes.
- `.preview/`: ignored browser screenshots and temporary browser profile.

Public paths include `/{en|ar}/`, `/{en|ar}/portfolio`, `/{en|ar}/portfolio/<slug>`, and `/{en|ar}/contact`. Legacy `about` and `strength` paths redirect to the corresponding homepage section. Unknown routes return HTTP 404.

## Contact

Without credentials, the form prepares an explicit `mailto:` draft. The visitor sends it from their own email app; the site never reports that a draft was delivered.

Optional Telegram server delivery accepts `API_TOKEN` and `CHAT_ID` from environment variables or an untracked root `.env` (see `.env.example`). HTTPS outbound requests must be supported by PHP; keep TLS verification enabled. Invalid forms preserve values, errors are announced, and successful delivery redirects to avoid resubmission.

## Verification

With the PHP preview running and Node.js 22+ installed:

```powershell
node scripts/check.mjs
```

PHP syntax checks:

```powershell
Get-ChildItem -Recurse -Filter *.php | ForEach-Object { php -l $_.FullName }
node --check js/script.js
```

Optional browser verification uses an existing local Chrome debugging endpoint at `http://127.0.0.1:9222`; set `CHROME_DEBUG_URL` for another endpoint, or `PORTFOLIO_URL` for another preview URL:

```powershell
node scripts/browser-check.mjs
```

Browser checks save screenshots in `.preview/`. Valid contact submission checks run only in email-draft mode; they do not intentionally send real messages.

## Deployment notes

Keep `.htaccess` on Apache and preserve `/media/salah-cv.pdf`. On another web server, reproduce the clean-route fallback and deny rules for internal folders, dotfiles, raw CV filenames, review notes, and design sources. Do not upload `private/`, `.preview/`, raw CVs, or `my work/`. This implementation has not been published.
