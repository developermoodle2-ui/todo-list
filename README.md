# Laravel Todo List

This repo contains a small Laravel-based todo list app with a single page UI.

## Setup

1. Install dependencies (requires network access to Packagist):

   ```bash
   composer install
   ```

2. Copy the environment file and generate an app key:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. Create a SQLite database:

   ```bash
   touch database/database.sqlite
   ```

   Update `DB_DATABASE` in `.env` to point at the absolute path of the file.

4. Run migrations:

   ```bash
   php artisan migrate
   ```

5. Start the dev server:

   ```bash
   php artisan serve
   ```

Visit `http://localhost:8000`.

## Features

- Create todos with optional due dates.
- Mark todos complete or undo completion.
- Delete todos.
