<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use Faker\Provider\en_US\Company;
use Faker\Provider\en_US\Address;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $train = new Train();
            $train->azienda = $faker->word;
            $train->data_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->stazione_partenza = $faker->country() ;
            $train->stazione_arrivo = $faker->country() ;
            $train->orario_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->orario_arrivo = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->codice_treno = $faker->bothify('?##?#?');
            $train->numero_carrozze = $faker->numberBetween(5,20);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();
        }
    }
}
