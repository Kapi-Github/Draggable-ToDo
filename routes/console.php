<?php

use Illuminate\Support\Facades\Artisan;

/**
 * Prepares whole database for tests and run them
 */
Artisan::command("tests:run", function () {
    $this->call("tests:database:fresh");
    $this->call("test");
});

/**
 * Prepares the environment by creating a .env file from the example if it doesn't exist. It's also generates an application key and runs a fresh database migration.
 */
Artisan::command("env:prepare", function () {
    if (file_exists(base_path(".env"))) {
        $this->info(".env file already exists in the root directory");
    } else {
        $envExampleName = ".env.example";

        if (!file_exists(base_path($envExampleName))) {
            $this->error("Missing $envExampleName file in the root directory");
            return self::FAILURE;
        }

        copy(base_path($envExampleName), base_path(".env"));
        $this->info("Apllication .env file created succesfully from $envExampleName");
    }

    $this->call("key:generate");
    $this->info("Application key generated successfully");

    $this->call("migrate:fresh");
    $this->info("Database migrated successfully");

    return self::SUCCESS;
});
