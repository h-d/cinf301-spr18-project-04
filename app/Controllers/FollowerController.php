<?php
namespace App\Controllers;
use App\Models\Followers as Hashtag;
use App\Renderer as Renderer;

/**
 * AlgorithmsController class that accesses data from the
 * Algorithm model class and passes it to a rendering class
 * to be rendered as a view.
 * 
 * @author dplante
 *
 */
class FollowerController
{
    public function index()
    {
        $followers = Hashtag::complete();
        $view = new Renderer('views/followers/');
        $view->followers = $followers;
        $view->render('index.php');
    }

    public function show()
    {
        if (!isset($_GET['id']))
            $this->index();

        $followers = Hashtag::find($_GET['id']);
        $view = new Renderer('views/followers/');
        $view->followers = $followers;
        $view->render('show.php');
    }
}
