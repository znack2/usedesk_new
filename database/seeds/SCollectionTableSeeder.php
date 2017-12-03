<?php

use Illuminate\Database\Seeder;

class SCollectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\SCollection::class, 50)->create();
    }
}
