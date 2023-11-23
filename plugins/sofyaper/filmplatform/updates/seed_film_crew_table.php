<?php namespace SofyaPer\FilmPlatform\Updates;

use Seeder;
use SofyaPer\FilmPlatform\Models\FilmCrew;

class SeedFilmCrewTable extends Seeder
{
    public function run()
    {
        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Андрей';
        $filmCrew->last_name = 'Тарковский';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Марлен';
        $filmCrew->last_name = 'Хутсиев';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Валентин';
        $filmCrew->last_name = 'Попов';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Лариса';
        $filmCrew->last_name = 'Тарковская';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Игнат';
        $filmCrew->last_name = 'Данильцев';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Александр';
        $filmCrew->last_name = 'Кайдановский';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Алиса';
        $filmCrew->last_name = 'Фрейндлих';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Майвенн';
        $filmCrew->last_name = 'Ле Беско';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Сэм';
        $filmCrew->last_name = 'Рейми';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Тоби';
        $filmCrew->last_name = 'Магуайар';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Марин';
        $filmCrew->last_name = 'Вахт';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Уиллем';
        $filmCrew->last_name = 'Дефо';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Франк';
        $filmCrew->last_name = 'Миллер';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Роберт';
        $filmCrew->last_name = 'Родригез';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Микки';
        $filmCrew->last_name = 'Рурк';
        $filmCrew->save();
        
        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Брюс';
        $filmCrew->last_name = 'Уиллис';
        $filmCrew->save();
        
        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Джессика';
        $filmCrew->last_name = 'Альба';
        $filmCrew->save();
    }
}
