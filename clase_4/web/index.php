<?php

echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">';

echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>';

// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// Twig register
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app['debug'] = true;

$blogPosts = array(
    1 => array(
        'date'      => '2011-03-29',
        'author'    => 'igorw',
        'title'     => 'Usando Silex',
        'body'      => 'Blog que habla sobre silex y sus bondades....',
    ),
);

$app->get('/blog', function () use ($blogPosts) {
    $output = '<h1>Blog</h1>';
    foreach ($blogPosts as $post) {
        $output .= "<div class=\"jumbotron\">
                      <h2>{$post['title']}</h2>
                      <p>{$post['body']}</p>
                      <p><span class='glyphicon glyphicon-user'></span> {$post['author']}</p>
                      <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Comentar</a></p>
                    </div>";
        $output .= '<br />';
    }

    return $output;

//    return $app['twig']->render('index.twig',
//        array(
//            'blogs' => $blogPosts
//        ));
});

$app->run();