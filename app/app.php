<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();

    $app['debug']=TRUE;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->get("/view_results", function() use ($app) {
        $input = new RockPaperScissors;
        $results = $input->roShamBo2($_GET['input']);
        return $app['twig']->render('view_results.twig', array ('cow' => $results));

    });

    return $app;
?>
