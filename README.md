# Personal Task Manager

Project Code: WST21-PM-2026-SF
Student Name: Villanueva, Ravin Kaye S.
Course & Year: BSIT - 2 
Database Used: MySQL

## Features
- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Status

## How It Works
This project follows Laravel's MVC structure:
- **Routes** (`routes/web.php`) map URLs to controller actions using `Route::resource` plus one extra route for status updates.
- **Controller** (`app/Http/Controllers/TaskController.php`) handles the logic for creating, reading, updating, and deleting tasks.
- **Model** (`app/Models/Task.php`) represents the `tasks` table and defines which fields are mass-assignable.
- **Migration** (`database/migrations/..._create_tasks_table.php`) defines the `tasks` table schema.
- **Blade Views** (`resources/views/tasks/*.blade.php`) render the task list, and the add/edit forms.

## Setup Instructions

1. Clone this repository.
2. Install dependencies:
   ```
   composer install
   ```
3. Copy `.env.example` to `.env` and set your database credentials:
   ```
   cp .env.example .env
   ```
4. Generate the application key:
   ```
   php artisan key:generate
   ```
5. Run the migration:
   ```
   php artisan migrate
   ```
6. Start the development server:
   ```
   php artisan serve
   ```
7. Visit `http://127.0.0.1:8000` in your browser.

## Screenshots
(Add screenshots here once your project is running.)
