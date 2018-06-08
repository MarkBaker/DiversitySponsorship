<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //Seed the region types
        $this->call('RegionTypeSeeder');
        $this->command->info('Seeded the region types!');
        //Seed the regions and countries
        $this->call('RegionSeeder');
        $this->command->info('Seeded the regions and countries!');
    }
}
