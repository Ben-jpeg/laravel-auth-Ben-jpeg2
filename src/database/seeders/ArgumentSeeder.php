<?php

namespace Database\Seeders;

use App\Models\Argument;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArgumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Argument::factory()->count(8)->create();
    }
}
