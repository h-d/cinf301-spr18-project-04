<?php
namespace App\Controllers;
use App\Models\Followers as Hashtag;
use App\Renderer as Renderer;

/**
 * FollowerController class that accesses data from the
 * Followers model class and passes it to a rendering class
 * to be rendered as a view.
 *
 * @author hdevoe
 *
 */
class FollowerController
{
    public function index()
    {
        $view = new Renderer('views/followers/');
        $view->render('index.php');
    }

    public function show()
    {
        $followers = Hashtag::find($_COOKIE['Search']);
        $view = new Renderer('views/followers/');
        $view->followers = $followers;
        $view->render('show.php');
    }
}
