<?php
/**
 * Created by PhpStorm.
 * User: anhmantk
 * Date: 3/28/19
 * Time: 11:59 PM
 */

namespace Manvn\BootstrapForm\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class FormFacade
 * @package Manvn\BootstrapForm
 */
class BTFormFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'BTForm';
    }
}