<?php

// Start a new Silex Application
$app = new \Silex\Application();
$app['debug'] = true; // in our frontend code always use debug mode
// Load the Twig Render engine
$app->register(new \Silex\Provider\TwigServiceProvider(), $config['twig.config']);


/*********************************************************************************
 * Start registering routes
 *
 * Define your routes/pages to show in the frontend
 */
$app->get('/', function() use ($app) {
    return $app['twig']->render('page/homepage.html.twig');
});


// Finally run the Silex app
$app->run();
