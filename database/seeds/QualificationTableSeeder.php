<?php

use CRM\Models\Qualification;
use Illuminate\Database\Seeder;

class QualificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Qualification::class, 10)->create();
    }
}
