<?php namespace SofyaPer\FilmPlatform;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'FilmPlatform',
            'description' => 'No description provided yet...',
            'author' => 'SofyaPer',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {

        return [
            'SofyaPer\FilmPlatform\Components\Films' => 'Films',
            'SofyaPer\FilmPlatform\Components\FilmCrew' => 'FilmCrew'
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'sofyaper.filmplatform.some_permission' => [
                'tab' => 'FilmPlatform',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return [
            'filmplatform' => [
                'label' => 'FilmPlatform',
                'url' => Backend::url('sofyaper/filmplatform/films'),
                'icon' => 'icon-leaf',
                'permissions' => ['sofyaper.filmplatform.*'],
                'order' => 500,

                'sideMenu' => [
                    'films' => [
                        'label' => 'Фильмы',
                        'url' => Backend::url('sofyaper/filmplatform/films'),
                        'icon' => 'icon-leaf',
                        'permissions' => ['sofyaper.filmplatform.*'],
                    ],
                    'genres' => [
                        'label' => 'Жанры',
                        'url' => Backend::url('sofyaper/filmplatform/genres'),
                        'icon' => 'icon-leaf',
                        'permissions' => ['sofyaper.filmplatform.*'],
                    ],
                    'filmCrew' => [
                        'label' => 'Актеры и режиссеры',
                        'url' => Backend::url('sofyaper/filmplatform/filmcrew'),
                        'icon' => 'icon-leaf',
                        'permissions' => ['sofyaper.filmplatform.*'],
                    ],
                    'filmCrewRoles' => [
                        'label' => 'Профессии в кино',
                        'url' => Backend::url('sofyaper/filmplatform/filmcrewroles'),
                        'icon' => 'icon-leaf',
                        'permissions' => ['sofyaper.filmplatform.*'],
                    ]
                ]
            ],
        ];
    }
}
