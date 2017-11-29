<?php

use Illuminate\Database\Seeder;

class CompanyCustomBlockSeeder extends Seeder
{
    public function run()
    {
        factory(App\Models\CompanyCustomBlock::class, 50)->create();
    }
}
