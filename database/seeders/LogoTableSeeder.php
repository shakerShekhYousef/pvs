<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logos')->insert([
            [
                'maker' => 'Mercedes',
                'url' => 'assets/front/img/logos/mercedes.png',
            ],
            [
                'maker' => 'Audi',
                'url' => 'assets/front/img/logos/audi.png',
            ],
            [
                'maker' => 'BMW',
                'url' => 'assets/front/img/logos/bmw.png',
            ],
            [
                'maker' => 'Lamborghini',
                'url' => 'assets/front/img/logos/lamborghini.png',
            ],
            [
                'maker' => 'Rolls Royce',
                'url' => 'assets/front/img/logos/rolls-royce.png',
            ],
            [
                'maker' => 'Land Rover',
                'url' => 'assets/front/img/logos/land-rover.png',
            ],
            [
                'maker' => 'Ford',
                'url' => 'assets/front/img/logos/ford.png',
            ],
            [
                'maker' => 'Chevrolet',
                'url' => 'assets/front/img/logos/chevrolet.png',
            ],
            [
                'maker' => 'Ferrari',
                'url' => 'assets/front/img/logos/ferrari.png',
            ],
            [
                'maker' => 'Bentley',
                'url' => 'assets/front/img/logos/bentley.png',
            ],
            [
                'maker' => 'Bugatti',
                'url' => 'assets/front/img/logos/bugatti.png',
            ],
            [
                'maker' => 'GMC',
                'url' => 'assets/front/img/logos/gmc.png',
            ],
            [
                'maker' => 'Hyundai',
                'url' => 'assets/front/img/logos/hyundai.png',
            ],
            [
                'maker' => 'Jeep',
                'url' => 'assets/front/img/logos/jeep.png',
            ],
            [
                'maker' => 'Kia',
                'url' => 'assets/front/img/logos/kia.png',
            ],
            [
                'maker' => 'Mitsubishi',
                'url' => 'assets/front/img/logos/mitsubishi.png',
            ],
            [
                'maker' => 'Nissan',
                'url' => 'assets/front/img/logos/nissan.png',
            ],
            [
                'maker' => 'Porsche',
                'url' => 'assets/front/img/logos/porsche.png',
            ],
            [
                'maker' => 'Toyota',
                'url' => 'assets/front/img/logos/toyota.png',
            ],
        ]);
    }
}
