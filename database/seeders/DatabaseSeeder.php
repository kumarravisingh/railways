<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create(
            [
                'email'=>'test@railways.com',
                'internal'=>true,
                'high_traffic'  => false,
            ]
        );
        User::factory(1)->create(
            [
                'email'=>'user@railways.com',
                'internal'=>false,
                'high_traffic'  => false,
            ]
        );
        User::factory(1)->create(
            [
                'email'=>'business@railways.com',
                'internal'=>false,
                'high_traffic'  => true,
            ]
        );
        User::factory(1000)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
