<p align="center">
    <img src="https://img.shields.io/badge/Laravel-13-FF2D20?logo=laravel" alt="Laravel">
    <img src="https://img.shields.io/badge/MySQL-9.3-09DE42?logo=mysql" alt="MySQL">
    <img src="https://img.shields.io/badge/React-19-61DAFB?logo=react" alt="React">
    <img src="https://img.shields.io/badge/React_Router-89C779?logo=reactrouter" alt="React Router">
    <img src="https://img.shields.io/badge/TypeScript-0A1F26?logo=tailwindcss" alt="TypeScript">
    <img src="https://img.shields.io/badge/Tailwind_CSS-0C17EB?logo=typescript" alt="Tailwind CSS">
    <img src="https://img.shields.io/badge/TanStack_Query-2E3436?logo=tanstack" alt="TanStack Query">
    <img src="https://img.shields.io/badge/Axios-2D5224?logo=axios" alt="Axios">
    <img src="https://img.shields.io/badge/dnd_kit-1C4345" alt="dnd kit">
</p>

# Draggable To Do

**Draggable To Do** to platforma służąca do zarządzania swoimi zadaniami. W łatwy i przystępny sposób możesz tworzyć nowe "**_Obszary robocze_**" tzw. "**_Workspace'y_**", tworzyć i przeciągać zadania oraz zarządzać widocznością kolumn w obszarze roboczym.

<details>
<summary>Screenshoty</summary>
<ul style="list-style:none">

<li>

### Akcje użytkownika

<div align="center">
    <img src="docs/user_actions/login_view.png" width="45%" />
    <img src="docs/user_actions/registration_view.png" width="45%" />
</div>
</li>

<li>

### Po zalogowaniu

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

### Przeciąganie zadań

<img src="docs/dnd/dnd_workspace_example.png" />
<img src="docs/dnd/dnd_task_example.png" />

</li>

</ul>
</details>

## Wymagania do uruchomienia

- PHP 8.3+
- Composer 2.8.8+
- MySQL 9.3+
- Node.js 22+

## Lokalne uruchomienie aplikacji

1. Sklonuj repozytorium

```bash
git clone https://github.com/kacper-wladarz/Draggable-ToDo.git
cd Draggable-ToDo
```

2. Stwórz i ustaw token Github

Wejdź na stronę https://github.com/settings/tokens/new i wygeneruj token. Następnie wklej go do poniższej komendy

```bash
composer config -g github-oauth.github.com <TOKEN>
```

3. Zainstaluj zależności PHP

```bash
composer install
```

4. Zainstaluj zależności JS

```bash
npm install
```

5. Przygotuj plik środowiskowy (.env)

```bash
php artisan env:prepare
```

6. Uruchom server lokalnie

```bash
npm run full-dev
```

7. Uruchomienie testów

```bash
php artisan tests:run
```

## Struktura projektu

```
resources/app/     React (frontend)
app/               Laravel (backend)
```
