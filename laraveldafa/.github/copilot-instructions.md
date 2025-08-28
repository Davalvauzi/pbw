# Copilot Coding Agent Instructions for laraveldafa

## Project Overview
This is a Laravel-based web application. The codebase follows standard Laravel conventions, but has some project-specific structure and workflows. Key directories include:
- `app/`: Application logic, including Controllers, Models, Middleware, and Console commands.
- `routes/`: Route definitions (`web.php`, `api.php`, etc.).
- `resources/views/`: Blade templates for frontend rendering.
- `database/`: Migrations, seeders, and factories for database setup.
- `public/`: Entry point (`index.php`) and static assets.
- `config/`: Configuration files for services, database, cache, etc.

## Architecture & Data Flow
- Follows MVC (Model-View-Controller) pattern.
- HTTP requests are routed via `routes/web.php` and `routes/api.php` to controllers in `app/Http/Controllers`.
- Models in `app/Models` interact with the database using Eloquent ORM.
- Views in `resources/views` are rendered using Blade templating.
- Middleware in `app/Http/Middleware` handles request filtering and authentication.
- Console commands are defined in `app/Console` and registered in `app/Console/Kernel.php`.

## Developer Workflows
- **Environment Setup:**
  - Use `.env` for environment variables. Run `php artisan key:generate` after cloning or resetting `.env`.
- **Build & Assets:**
  - Frontend assets are managed via Vite (`vite.config.js`). Use `npm run dev` for development and `npm run build` for production.
- **Testing:**
  - Tests are in `tests/Feature` and `tests/Unit`. Run tests with `vendor/bin/phpunit` or `php artisan test`.
- **Database:**
  - Migrations: `php artisan migrate`
  - Seeders: `php artisan db:seed`
  - Factories: Used for test data generation.
- **Debugging:**
  - Use Laravel's built-in logging (`storage/logs/`) and exception handling (`app/Exceptions/Handler.php`).

## Project-Specific Patterns & Conventions
- Controllers, models, and middleware are organized by domain in their respective folders.
- Route files are split by context (`web.php` for browser, `api.php` for API).
- Service providers in `app/Providers` are used for bootstrapping and binding services.
- Blade templates use Laravel's standard section/yield pattern.
- Factories and seeders are used for test and development data.

## Integration Points & Dependencies
- Uses Laravel's built-in authentication and session management.
- External packages managed via Composer (`composer.json`).
- Frontend dependencies managed via npm (`package.json`).
- Vite is used for asset bundling and hot reloading.

## Examples
- To add a new API endpoint: define route in `routes/api.php`, create controller in `app/Http/Controllers`, and update model in `app/Models` if needed.
- To add a new migration: create file in `database/migrations` and run `php artisan migrate`.
- To customize configuration: edit files in `config/`.

## References
- See `README.md` for general Laravel info.
- Key files: `artisan`, `.env`, `vite.config.js`, `phpunit.xml`, `app/Http/Controllers`, `routes/web.php`, `routes/api.php`, `database/migrations`, `resources/views`.

---

**Feedback:** If any section is unclear or missing project-specific details, please specify so it can be improved for future AI agents.
