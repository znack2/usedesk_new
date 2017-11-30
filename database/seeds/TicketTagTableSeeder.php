<?php

use Illuminate\Database\Seeder;

class TicketTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\TicketTag::class, 50)->create();
    }
}
