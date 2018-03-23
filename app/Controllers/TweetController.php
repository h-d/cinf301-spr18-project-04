<?php
namespace App\Controllers;
use App\Models\Tweets as Tweet;
use App\Renderer as Renderer;

/**
 * AlgorithmsController class that accesses data from the
 * Algorithm model class and passes it to a rendering class
 * to be rendered as a view.
 * 
 * @author dplante
 *
 */
class TweetController
{
    public function index()
    {
        $tweets = Tweet::complete();
        $view = new Renderer('views/tweets/');
        $view->tweets = $tweets;
        $view->render('index.php');
    }

    public function show()
    {
        if (!isset($_GET['id']))
            $this->index();

        $tweets = Tweet::find($_GET['id']);
        $view = new Renderer('views/tweets/');
        $view->tweets = $tweets;
        $view->render('show.php');
    }
}
