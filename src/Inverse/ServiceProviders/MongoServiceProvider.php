<?php
/**
 * Created by PhpStorm.
 * User: masterx2
 * Date: 12/12/17
 * Time: 9:57 PM
 */

namespace Inverse\ServiceProviders;

use Pimple\ServiceProviderInterface;

class MongoServiceProvider implements ServiceProviderInterface {
    public function register(\Pimple\Container $c) {
        $c['db'] = function() {
            $client = new MongoDB\Client('mongodb://localhost:27017');
            return $client->selectDatabase('inverse');
        };
    }
}