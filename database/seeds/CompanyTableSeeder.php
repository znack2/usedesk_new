<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Company::class, 50)->create();

//        factory(App\Models\Company::class, 1)->create()->each(function ($u) {
//        	$u->blocks()->save(factory(App\Models\CompanyCustomBlock::class)->make());
//    	});
    }
}
