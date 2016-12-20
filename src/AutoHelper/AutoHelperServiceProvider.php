<?php

namespace Paplow\Autohelper;

use Illuminate\Support\ServiceProvider;

class AutoHelperServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
            __DIR__.'/../../config/auto-helper.php' => \config_path('auto-helper.php'),
        ], 'config');

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $dirName = trim(base_path($this->app['config']['auto-helper']['helper_path']));
        if (!is_dir($dirName))
            mkdir(base_path($dirName));

        foreach (glob($dirName."/*.php") as $filename) {
            require_once($filename);
        }
    }

}
