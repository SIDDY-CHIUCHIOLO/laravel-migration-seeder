<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $newTrain = new Train();
            $newTrain->Azienda = $faker->word(1, true);
            $newTrain->Stazione_di_partenza = $faker->city();
            $newTrain->Stazione_di_arrivo = $faker->city();
            $newTrain->Data_di_partenza = $faker->dateTimeThisYear();
            $newTrain->Orario_di_partenza = $faker->time();
            $newTrain->Orario_di_arrivo = $faker->time();
            $newTrain->Codice_Treno = $faker->numberBetween(1000, 20000);
            $newTrain->Numero_Carrozze = $faker->numberBetween(0, 10);
            $newTrain->In_orario = $faker->time();
            $newTrain->Cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
