<?php namespace Cb\Versioning;

use Backend;
use Event;
use System\Classes\PluginBase;
use Stormiix\Twig\Extension\MixExtension;

/**
 * Versioning Plugin Information File
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
            'name'        => 'Versioning',
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
        Event::listen('cms.page.beforeRenderPage', function($controller, $page) {
			$mix = new MixExtension(
				'themes/cherry/',     // the absolute public directory
				'mix-manifest.json'   // the manifest filename (default value is 'mix-manifest.json')
			);
			$twig = $controller->getTwig();
			$twig->addExtension($mix);
		});
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
            'Cb\Versioning\Components\MyComponent' => 'myComponent',
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
            'cb.versioning.some_permission' => [
                'tab' => 'Versioning',
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
        return []; // Remove this line to activate

        return [
            'versioning' => [
                'label'       => 'Versioning',
                'url'         => Backend::url('cb/versioning/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['cb.versioning.*'],
                'order'       => 500,
            ],
        ];
    }
}
