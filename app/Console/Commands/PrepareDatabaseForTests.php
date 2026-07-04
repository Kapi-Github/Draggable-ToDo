<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

#[Signature('tests:database:fresh')]
#[Description('Prepares the database for testing')]
class PrepareDatabaseForTests extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (app()->environment() === "production") {
            $this->error("This command  should not be run in production.");
            return Command::FAILURE;
        }

        $schemaName = config("database.connections.mysql.database") . "_testing";

        config(["database.connections.mysql.database" => null]);

        DB::purge("mysql");
        DB::reconnect("mysql");

        DB::statement("DROP DATABASE IF EXISTS $schemaName");
        DB::statement("CREATE DATABASE $schemaName");

        config(["database.connections.mysql.database" => $schemaName]);

        DB::purge("mysql");
        DB::reconnect("mysql");

        $this->call("migrate:fresh", ["--env" => "testing"]);
        $this->call("optimize:clear");

        $this->info("The test database is prepared for use.");

        return Command::SUCCESS;
    }
}
