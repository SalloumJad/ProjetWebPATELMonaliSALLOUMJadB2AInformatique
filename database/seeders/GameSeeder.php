<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game as Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $game = new Game(); // On crée plusieurs exemples prémits dans la base de données pour simplifier les tests.
        $game->title = 'The Legend of Zelda: Twilight Princess -- Wii U';
        $game->price = 10.0;
        $game->company = 'Ubisoft';
        $game->image = '_-The-Legend-of-Zelda-Twilight-Princess-Wii-U-_.jpg';
        $game->key = "iIHUGFjn";
        $game->save();

        $game2 = new Game();
        $game2->title = 'Super Mario Bros -- NES';
        $game2->price = 10.0;
        $game2->company = 'Ubisoft';
        $game2->image = 'Super_Mario_Bros.png';
        $game2->key = "jIJGYGFYvdcttFY";
        $game2->save();
    }
}
