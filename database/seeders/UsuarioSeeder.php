<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
         \App\Models\Usuario::factory(10)->create();

         \App\Models\Usuario::factory()->create([
             'login' => 'test@example.com',
         ]);
    }
}
