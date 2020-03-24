<?php namespace Cb\Linez;

use Backend;
use System\Classes\PluginBase;

/**
 * Linez Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Linez',
            'description' => 'No description provided yet...',
            'author'      => 'Cb',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Cb\Linez\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'cb.linez.some_permission' => [
                'tab' => 'Linez',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'linez' => [
                'label'       => 'Linez',
                'url'         => Backend::url('cb/linez/lines'),
                'icon'        => 'icon-align-center',
                'permissions' => ['cb.linez.*'],
                'order'       => 500,
                'sideMenu' => [
                    'lines' => [
                        'label'       => 'Lines',
                        'icon'        => 'icon-align-center',
                        'url'         => Backend::url('cb/linez/lines'),
                        'permissions' => ['cb.linez.lines'],
                    ],
                    'locations' => [
                        'label'       => 'Locations',
                        'icon'        => 'icon-location-arrow',
                        'url'         => Backend::url('cb/linez/locations'),
                        'permissions' => ['cb.linez.locations'],
                    ],
                    'haircolors' => [
                        'label'       => 'Hair Colors',
                        'icon'        => 'icon-female',
                        'url'         => Backend::url('cb/linez/haircolors'),
                        'permissions' => ['cb.linez.haircolors'],
                    ],
                    'vibes' => [
                        'label'       => 'Vibes',
                        'icon'        => 'icon-mars',
                        'url'         => Backend::url('cb/linez/vibes'),
                        'permissions' => ['cb.linez.vibes'],
                    ]
                ]
            ],
        ];
    }
}
