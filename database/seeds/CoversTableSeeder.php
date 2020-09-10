<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Cover;

class CoversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      // Inizializzo un ciclo for per popolare la tabella con il faker
      // Ciclo esterno degli album
      for ($i=0; $i < 4; $i++) {

        // Ciclo interno delle covers
        for ($c=0; $c < 4; $c++) {
          $new_cover = new Cover();
          $new_cover->url = $faker->imageUrl();
        }
        $new_cover->album_id = $i + 1;

        $new_cover->save();
      }
    }
}
