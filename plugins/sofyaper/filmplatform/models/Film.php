<?php namespace SofyaPer\FilmPlatform\Models;

use Model;
use \System\Models\File;
use \SofyaPer\FilmPlatform\Models\Genre;
use \SofyaPer\FilmPlatform\Models\FilmCrew;

/**
 * Film Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Film extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'sofyaper_film_platform_films';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $dates = ['release_date', 'created_at'];

    public $attachOne = [
        'cover_img' => File::class
    ];

    public $attachMany = [
        'photos' => File::class
    ];

    public $belongsToMany = [
        'genres' => [
            Genre::class, 
            'table' => 'sofyaper_film_platform_genres_to_films',
            'key' => 'film_id',
            'otherKey' => 'genre_id'
        ],
        'film_crew' => [
            FilmCrew::class, 
            'table' => 'sofyaper_film_platform_film_crew_to_films',
            'key' => 'film_id',
            'otherKey' => 'film_crew_id'
        ]
    ];
}
