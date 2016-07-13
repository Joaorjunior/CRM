<?php

use CRM\Models\Email;
use Illuminate\Database\Seeder;

class EmailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Email::class, 10)->create();
    }
}
