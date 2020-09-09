<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Song;

class SongsTableSeeder extends Seeder
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
      for ($i=0; $i < 4 ; $i++) {

        // Numero di brani
        $random_number = rand(7, 17);

        // Ciclo interno dei brani
        for ($a=0; $a < $random_number ; $a++) {

          $new_song = new Song();

          $new_song->title = $faker->word();
          $new_song->genre = $faker->randomElement([
            'Pop',
            'Rock',
            'Metal',
            'Rap',
          ]);
          $new_song->album_id = $i + 1;

          // Salvo il nuovo oggetto
          $new_song->save();

        }
      }
    }
}
