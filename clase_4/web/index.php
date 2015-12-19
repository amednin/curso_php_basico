<?php

// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();

// Twig register
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

// YML reader
$app->register(new DerAlex\Silex\YamlConfigServiceProvider(__DIR__ . '/settings.yml'));

// Doctrine register
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => $app['config']['database']
));

$app['debug'] = true;

$blogPosts = array(
    1 => array(
        'date'      => '2011-03-29',
        'author'    => 'igorw',
        'title'     => 'Usando Silex',
        'body'      => 'Blog que habla sobre silex y sus bondades....',
    ),2 => array(
        'date'      => '2011-03-29',
        'author'    => 'carlos',
        'title'     => 'Usando Silex',
        'body'      => 'Blog que habla sobre silex y sus bondades....',
    ),
);

$app->get('/blog', function () use ($app, $blogPosts) {

    return $app['twig']->render('blogs.twig',
        array(
            'blogs' => $blogPosts
        ));
});

$app->get('/blog-form', function () use ($app) {
    return $app['twig']->render('blog-form.twig');
});

$app->post('/blog-save', function (Request $request) use ($app) {
    $autor = $request->get('autor');
    $titulo = $request->get('titulo');
    $body = $request->get('body');

    $execQuery = $app['db']->insert('blog',
    array(
        'id' => NULL,
        'date' => date('Y-m-d'),
        'author' => $autor,
        'title' => $titulo,
        'body' => $body));

    if (!$execQuery) {
        $app->abort(503, 'No se pudo crear la nueva entrada!');
    }

    return $app->redirect('/blog');
    
});

$app->run();