<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\Manufacturer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Country::create(['name' => 'Germany', 'code'=>'DE']);
        Country::create(['name' => 'Italy', 'code'=>'IT']);
        Country::create(['name' => 'France', 'code'=>'FR']);

        #approach #1 - create instance of manufacturer, call save on collection
        $france = Country::where('name', 'France')->first();
        $renault = new Manufacturer();
        $renault->name = 'Renault';
        $france->manufacturers()->save($renault);

        #approach #2 - use "create"  shortcut of collection
        $france->manufacturers()->create(['name' => 'Peugeot']);

        #approach #3 - calling "associate" on sub-object
        $germany = Country::where('name', 'Germany')->first();
        $audi = new Manufacturer();
        $audi->name = 'Audi';
        $audi->country()->associate($germany);
        $audi->save();
    }
}
