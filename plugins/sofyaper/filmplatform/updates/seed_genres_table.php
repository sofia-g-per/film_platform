<?php namespace SofyaPer\FilmPlatform\Updates;

use Seeder;
use SofyaPer\FilmPlatform\Models\Genre;

class SeedGenresTable extends Seeder
{
    public function run()
    {
        $genre = new Genre;
        $genre->name = 'драма';
        $genre->code = 'drama';
        $genre->save();

        $genre = new Genre;
        $genre->name = 'документальное кино';
        $genre->code = 'documentary';
        $genre->save();

        $genre = new Genre;
        $genre->name = 'автобиография';
        $genre->code = 'autobiography';
        $genre->save();

        $genre = new Genre;
        $genre->name = 'фентези';
        $genre->code = 'fantasy';
        $genre->save();

        $genre = new Genre;
        $genre->name = 'научная фантастика';
        $genre->code = 'sci-fi';
        $genre->save();

        $genre = new Genre;
        $genre->name = 'боевик';
        $genre->code = 'action';
        $genre->save();
        
        $genre = new Genre;
        $genre->name = 'супергероика';
        $genre->code = 'superhero';
        $genre->save();
        
        $genre = new Genre;
        $genre->name = 'триллер';
        $genre->code = 'thriller';
        $genre->save();

        $genre = new Genre;
        $genre->name = 'комедия';
        $genre->code = 'comedy';
        $genre->save();
    }
}
