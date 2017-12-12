<?php
/**
 * Created by PhpStorm.
 * User: masterx2
 * Date: 12/12/17
 * Time: 10:16 PM
 */

namespace Inverse\ServiceProviders;


use Silex\Api\ControllerProviderInterface;
use Silex\Application;

class ControllersServiceProvider implements ControllerProviderInterface {

    /**
     * Returns routes to connect to the given application.
     *
     * @param Application $app An Application instance
     *
     * @return ControllerCollection A ControllerCollection instance
     */
    public function connect(Application $app) {
        // TODO: Implement connect() method.
    }
}