<?php
/**
 * Created by PhpStorm.
 * User: masterx2
 * Date: 5/13/17
 * Time: 3:36 PM
 */

use Inverse\ServiceProviders\FenomServiceProvider;
use Inverse\ServiceProviders\MongoServiceProvider;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

define('ROOT_DIR', __DIR__ . '/../');
require ROOT_DIR.'vendor/autoload.php';

$app = new Silex\Application();

$app->register(new MongoServiceProvider());
$app->register(new FenomServiceProvider());


$app->get('/', 'Inverse\\Controllers\\Main::index');

$app->get('/login', function() {

});

$app->get('/release/{alias}$', function ($alias) use ($app) {

});

$app->get('/{name}', function($name) use($app) {
    /** @var Fenom $fenom */
    $fenom = $app['fenom'];
    $data = [];

    if (!$fenom->templateExists($name.'.tpl')) {
        throw new NotFoundHttpException();
    }

    if ($name == 'video') {
        $data['video'] = $app['db']['video'];
    }

    if ($name == 'music') {
        $data['release'] = $app['db']['release'];
    }

    return $fenom->fetch([$name.'.tpl', 'layout.tpl'], $data);
});

$app->run();