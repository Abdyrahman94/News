<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'username' => 'Abdyrahman94',
            'firstname' => 'Abdyrahman',
            'lastname' => 'Rejepov',
        ]);

        $this->call([ CategorySeeder::class,]);

        Post::factory(150)->create();
    }
}
