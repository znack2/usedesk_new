<?php

use Illuminate\Database\Seeder;

class CompanyCustomBlockTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Models\CompanyCustomBlock::class, 50)->create();
    }
}
