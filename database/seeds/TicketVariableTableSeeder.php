<?php

use Illuminate\Database\Seeder;

class TicketVariableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\TicketVariable::class, 50)->create();
    }
}
