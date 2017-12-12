<?php
/**
 * Created by PhpStorm.
 * User: masterx2
 * Date: 12/12/17
 * Time: 10:00 PM
 */

namespace Inverse\ServiceProviders;

class FenomServiceProvider implements \Pimple\ServiceProviderInterface {
    public function register(\Pimple\Container $c) {
        $c['fenom'] = function() {
            return Fenom::factory(
                ROOT_DIR.'templates',
                ROOT_DIR.'var/compiled',
                Fenom::FORCE_COMPILE
            );
        };
    }
}