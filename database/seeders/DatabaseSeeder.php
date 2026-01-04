<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            [
                "matric_no" => "2413257",
                "name" => "Aiman Hakimi bin Mohd Abd Rahman",
                "password" => "nexus123"
            ],
            [
                "matric_no" => "2416767",
                "name" => "Ali Hassan",
                "password" => "nexus67"
            ]
        ]);
    }
}
