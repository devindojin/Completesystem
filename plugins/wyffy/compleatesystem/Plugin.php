<?php namespace Wyffy\Compleatesystem;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerMailTemplates()
    {
        return [
            'wyffy.compleatesystem::mail.contactus',
            'wyffy.compleatesystem::mail.estimate',
        ];
    }
}
