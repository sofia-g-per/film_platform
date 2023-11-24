<?php namespace SofyaPer\FilmPlatform\Components;

use Cms\Classes\ComponentBase;
use SofyaPer\FilmPlatform\Models\FilmCrewRole;
use SofyaPer\FilmPlatform\Models\Film;
/**
 * Films Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Films extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Films Component',
            'description' => 'Для получения списка фильмов'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'maxItems' => [
                'title' => 'min value',
                'description' => 'Максимальное количество ',
                'default' => 10,
                'type' => 'string',
                'validation' => [
                    'regex' => [
                        'message' => 'The Max Items property can contain only numeric symbols.',
                        'pattern' => '^[0-9]+$'
                    ]
                ]
            ]
        ];
    }

    public function films()
    {
        return Film::all();
    }

    private function filterByCrewRole($query, $filmCrewIds, $roleCode){
        $roleId = FilmCrewRole::where('code', $roleCode)->pluck('id')->first();

        $query = $query->whereHas('film_crew', function ($query) use($roleId, $filmCrewIds){
            $query->whereIn('film_crew_id', $filmCrewIds)
                ->where('film_crew_role_id', $roleId);
        });

        return $query;
    } 

    private function filterByDate($query, $release_date_from, $release_date_until){
        $query = $query->whereBetween('release_date',[$release_date_from, $release_date_until]);

        return $query;
    } 

    public function onFilter()
    {

        $release_date_from = input('release_date_from');
        $release_date_until = input('release_date_until');
        $directors = input('directors');
        $actors = input('actors');

        $query = Film::query();
        if($release_date_from && $release_date_until){
            $query = $this->filterByDate($query, $release_date_from, $release_date_until);
        }

        if($directors){
            $query = $this->filterByCrewRole($query, $directors, 'director');
        }

        if($actors){
            $query = $this->filterByCrewRole($query, $actors, 'actor');
        }

        $films = $query->get();
        $this->page['films'] = $films;
    }
}
