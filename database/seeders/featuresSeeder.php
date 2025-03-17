<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class featuresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([[
            'id' => 1,
            'name' => "Model",
            'description' => "Interacts with a table in a database.",
        ],[
            'id' => 2,
            'name' => "View",
            'description' => "UI logic",
        ],[
            'id' => 3,
            'name' => "Controller",
            'description' => "Process requests and business logic",
        ],[
            'id' => 4,
            'name' => "Routes",
            'description' => "Handles user requests and sends them to appropriate views",
        ],[
            'id' => 5,
            'name' => "Middleware",
            'description' => "Filters http requests",
        ],[
            'id' => 6,
            'name' => "Blade Templates",
            'description' => "Mechanism for templating views easily",
        ],[
            'id' => 7,
            'name' => "Migrations",
            'description' => "Defines database tables",
        ],[
            'id' => 8,
            'name' => "Seeders",
            'description' => "Automatically populates tables with data",
        ],[
            'id' => 9,
            'name' => "Database",
            'description' => "Stores data",
        ],[
            'id' => 10,
            'name' => "Eloquent ORM",
            'description' => "Interacts with database",
        ]]);
    }
}
