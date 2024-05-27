<?php

namespace Database\Seeders;

use App\Models\subject;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->count(3)
            ->state(new Sequence(
                [
                    'username' => 'mohammad',
                    'email' => 'mohammad@gmail.com',
                    'password' =>  'Bau@' . fake()->numberBetween(0, 10000),
                ],
                [
                    'username' => 'salameh',
                    'email' => 'salameh@gmail.com',
                    'password' =>  'Bau@' . fake()->numberBetween(0, 10000),

                ],
                [
                    'username' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => 'admin@1234',
                    'admin' => true,
                    'activation' => true,
                ]
            ))
            ->create();
        /*
        User::factory()->create([
            'username' => 'mohammad',
            'email' => 'mohammad@gmail.com',
            'password' =>  'Bau@' . fake()->numberBetween(0, 10000),
        ]);
        User::factory()->create([
            'username' => 'salameh',
            'email' => 'salameh@gmail.com',
            'password' =>  'Bau@' . fake()->numberBetween(0, 10000),

        ]);
        User::factory()->create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin@1234',
            'admin' => true,
            'activation' => true,
        ]);
        */
        subject::factory()->create([
            "name" => 'math',
            "pass_mark" => 70,
        ]);
        subject::factory()->create([
            "name" => 'art',
            "pass_mark" => 40,
        ]);
        subject::factory()->create([
            "name" => 'English',
            "pass_mark" => 50,
        ]);
        subject::factory()->create([
            "name" => 'science',
            "pass_mark" => 60,
        ]);
    }
}
