<?php namespace Jc91715\Bill;

use Backend;
use System\Classes\PluginBase;

/**
 * bill Plugin Information File
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
            'name'        => 'bill',
            'description' => 'No description provided yet...',
            'author'      => 'jc91715',
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
            'Jc91715\Bill\Components\MyComponent' => 'myComponent',
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
            'jc91715.bill.some_permission' => [
                'tab' => 'bill',
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
            'bill' => [
                'label'       => '账单',
                'url'         => Backend::url('jc91715/bill/times'),
                'icon'        => 'icon-leaf',
                'permissions' => ['jc91715.bill.*'],
                'order'       => 500,
            ],
        ];
    }
}
