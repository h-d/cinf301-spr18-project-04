<?php
namespace App\Controllers;
use App\Models\Hashtags as Hashtag;
use App\Renderer as Renderer;

/**
 * HashtagController class that accesses data from the
 * Hashtags model class and passes it to a rendering class
 * to be rendered as a view.
 * 
 * @author hdevoe
 *
 */
class HashtagController
{
    public function index()
    {
        $view = new Renderer('views/hashtags/');
        $view->render('index.php');
    }

    public function show()
    {
        $hashtags = Hashtag::find($_COOKIE['Search']);
        $view = new Renderer('views/hashtags/');
        $view->hashtags = $hashtags;
        $view->render('show.php');
    }
}
