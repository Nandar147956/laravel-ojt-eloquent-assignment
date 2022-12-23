<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Service;
use App\Models\Publisher;
use App\Models\TeamMember;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            AuthorSeeder::class,
            CategorySeeder::class,

        ]);

        Publisher::factory()->count(10)->create();
        Book::factory()->count(500)->create();
        TeamMember::factory()->count(3)->create();
        Service::factory()->count(6)->create();
    }
}


