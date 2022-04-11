<?php namespace Pixinside\Navigation;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
           'Pixinside\Navigation\Components\Menu' => 'Menu',
        ];
    }

    public function registerSettings()
    {
    }
}
