<?php

use Illuminate\Database\Seeder;

class TicketStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\TicketStatus::class, 50)->create();
    }
}
