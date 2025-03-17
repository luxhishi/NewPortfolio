<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{
    public function run()
    {
        $features = [
            ['id' => 1,  'name' => 'Model', 'description' => 'Allows you to query for data in your tables, as well as insert new records into the table.'],
            ['id' => 2,  'name' => 'View', 'description' => 'Contains the HTML served by your application, and serve as a convenient method of separating your controller and domain logic from your presentation logic.'],
            ['id' => 3,  'name' => 'Controller', 'description' => 'a class that handles incoming HTTP requests and returns responses, acting as a bridge between the applications logic and the user interface. '],
            ['id' => 4,  'name' => 'Routes',         'description' => 'Defines how your application responds to different HTTP requests by mapping URLs to specific actions or controllers. '],
            ['id' => 5,  'name' => 'Middleware',     'description' => 'Serves as a way to filter and inspect HTTP requests that enter an application.'],
            ['id' => 6,  'name' => 'Blade Templates', 'description' => 'It is the default templating engine for the Laravel framework. It lets you use variables, loops, conditional statements, and other PHP features directly in your HTML code.'],
            ['id' => 7,  'name' => 'Migrations',     'description' => 'It is a set of instructions that define the changes you want to make to your database schema.'],
            ['id' => 8,  'name' => 'Seeders',        'description' => 'In laravel, it allows you to populate a database with initial or test data.'],
            ['id' => 9,  'name' => 'Database',        'description' => 'Laravel makes interacting with databases extremely simple across a variety of database backends using either raw SQL, the fluent query builder, and the Eloquent ORM'],
            ['id' => 10, 'name' => 'Eloquent ORM',    'description' => 'Allows you to interact with database tables using models, making database operations more object-oriented and easier to manage. '],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}