<p align="center">
    <img src="https://img.shields.io/badge/Laravel-13-FF2D20?logo=laravel" alt="Laravel">
    <img src="https://img.shields.io/badge/MySQL-9.3-09DE42?logo=mysql" alt="MySQL">
    <img src="https://img.shields.io/badge/React-19-61DAFB?logo=react" alt="React">
    <img src="https://img.shields.io/badge/React_Router-89C779?logo=reactrouter" alt="React Router">
    <img src="https://img.shields.io/badge/TypeScript-0A1F26?logo=typescript" alt="TypeScript">
    <img src="https://img.shields.io/badge/Tailwind_CSS-0C17EB?logo=tailwindcss" alt="Tailwind CSS">
    <img src="https://img.shields.io/badge/TanStack_Query-2E3436?logo=tanstack" alt="TanStack Query">
    <img src="https://img.shields.io/badge/Axios-2D5224?logo=axios" alt="Axios">
    <img src="https://img.shields.io/badge/dnd_kit-1C4345" alt="dnd kit">
</p>

# Draggable To Do

**Draggable To Do** is a platform for managing your tasks. You can easily create new **_Workspaces_** and tasks, Additionally, you can drag tasks between columns, and manage column visibility within a workspace.

<details>
<summary>Screenshots</summary>
<ul style="list-style:none">

<li>

### User Actions

<div align="center">
    <img src="docs/user_actions/login_view.png" width="45%" />
    <img src="docs/user_actions/registration_view.png" width="45%" />
</div>
</li>

<li>

### After Logging In

<img src="docs/workspace/workspaces_panel_view.png" />
<img src="docs/workspace/new_workspace_view.png" />
<img src="docs/workspace/single_workspace_view.png" />
<img src="docs/workspace/manage_columns_visibility_view.png" />
<img src="docs/workspace/manage_workspace_view.png" />
<img src="docs/workspace/delete_workspace_view.png" />
<img src="docs/workspace/new_task_view.png" />
<img src="docs/workspace/manage_task_view.png" />
</li>

<li>

### Dragging Workspaces and Tasks

<img src="docs/dnd/dnd_workspace_example.png" />
<img src="docs/dnd/dnd_task_example.png" />

</li>

</ul>
</details>

## Requirements

- PHP 8.3+
- Composer 2.8.8+
- MySQL 9.3+
- Node.js 22+

## Local Setup

1. Clone the repository

```bash
git clone https://github.com/kacper-wladarz/Draggable-ToDo.git
cd Draggable-ToDo
```

2. (Optional) If Composer asks for a GitHub token, create and set one

<a href="https://github.com/settings/tokens/new">Click here</a> to generate a token. Then paste it into the command below or directly into the terminal when prompted

```bash
composer config -g github-oauth.github.com <TOKEN>
```

3. Install PHP dependencies

```bash
composer install
```

4. Install JS dependencies

```bash
npm install
```

5. Prepare the environment file (.env)

```bash
php artisan env:prepare
```

6. Set the required variables in .env:

- DB_USERNAME
- DB_PASSWORD

7. Run migrations

```bash
php artisan migrate:fresh
```

8. Start the local server

```bash
npm run full-dev
```

The application is available <a href="http://localhost:3000">here</a>

9. Optionally, seed the database with sample data

```bash
php artisan db:seed
```

The default user credentials are:

- login: **_superuser_**
- password: **_password_**

## Running Tests

```bash
php artisan tests:run
```

## Project Structure

```
resources/app/      React (frontend)
app/                Laravel (backend)
```
