<?php
/**
 * Created by PhpStorm.
 * User: anhmantk
 * Date: 3/28/19
 * Time: 11:55 PM
 */

namespace Manvn\BootstrapForm;

use Illuminate\Support\ServiceProvider;
use Manvn\BootstrapForm\Builder\BTFormBuilder;
use Manvn\BootstrapForm\Builder\BTMandatoryBuilder;
use Manvn\BootstrapForm\Builder\BTRequiredFieldBuilder;

/**
 * Class BTFormServiceProvider
 * @package Manvn\BootstrapForm
 */
class BTFormServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('BTForm', BTFormBuilder::class);
        $this->app->bind('BTMandatory', BTMandatoryBuilder::class);
        $this->registerFormBuilder();
    }

    /**
     * Register the form builder instance.
     *
     * @return void
     */
    protected function registerFormBuilder()
    {
        $this->app->singleton('BTForm', function ($app) {
            $form = new BTFormBuilder($app['html'], $app['url'], $app['view'], $app['session.store']->token(),
                $app['request']);

            return $form->setSessionStore($app['session.store']);
        });
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'btform');
    }
}