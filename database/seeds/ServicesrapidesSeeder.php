<?php

use App\Servicesrapides;
use Illuminate\Database\Seeder;

class ServicesrapidesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicesrapides = factory(Servicesrapides::class, 3)->create();
    }
}
