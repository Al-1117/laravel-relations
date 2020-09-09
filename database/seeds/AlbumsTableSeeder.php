<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Album;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      // Inizializzo un ciclo for per popolare la tabella con il faker;
      for ($i=0; $i < 4 ; $i++) {
        $new_album = new Album();
        $new_album->title = $faker->randomElement([
          'Thriller',
          'The Resistance',
          'All Eyez On Me',
          'Terreste',
        ]);
        $new_album->artist = $faker->randomElement([
          'Micheal Jackson',
          'Muse',
          '2Pac',
          'Subsonica',
        ]);
          $new_album->year = $faker->numberBetween(1984, 2009);

          // Salvo il nuovo oggetto
          $new_album->save();
      }
    }
}
