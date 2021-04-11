<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /** Seed the application's database.*/
    public function run(): void
    {
        User::factory(10)->create();

        $index = 1;
        while ($index < 10) {
            Address::factory(1)->create();
            $index++;
        }

        $index = 1;
        while ($index < 9) {
            Phone::factory(1)->create();
            $index++;
        }

    }
}
