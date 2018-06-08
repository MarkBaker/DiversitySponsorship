<?php

use Illuminate\Database\Seeder;
use App\RegionType;

class RegionTypeSeeder extends Seeder {

    public function run()
    {
        DB::table('region_types')->delete();

        RegionType::create(['name' => 'Region']);
        RegionType::create(['name' => 'Sub-Region']);
        RegionType::create(['name' => 'Intermediate Region']);
        RegionType::create(['name' => 'Country']);
        RegionType::create(['name' => 'State']);
        RegionType::create(['name' => 'Province']);
    }
}
