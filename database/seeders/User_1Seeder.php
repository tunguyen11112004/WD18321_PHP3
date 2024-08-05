<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User_1;

class User_1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User_1::factory(10)->create();
    }
}
