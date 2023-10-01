<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bank;
use Illuminate\Database\Seeder;
use App\Models\CreditApplication;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Bank::factory(5)->create();
        CreditApplication::factory(10)->create();
    }
}
