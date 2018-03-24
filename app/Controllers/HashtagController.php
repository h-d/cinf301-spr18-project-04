<?php
namespace App\Controllers;
use App\Models\Hashtags as Hashtag;
use App\Renderer as Renderer;

/**
 * AlgorithmsController class that accesses data from the
 * Algorithm model class and passes it to a rendering class
 * to be rendered as a view.
 * 
 * @author dplante
 *
 */
class HashtagController
{
    public function index()
    {
        $hashtags = Hashtag::complete();
        $view = new Renderer('views/hashtags/');
        $view->hashtags = $hashtags;
        $view->render('index.php');
    }

    public function show()
    {
        if (!isset($_GET['id']))
            $this->index();

        $hashtags = Hashtag::find($_GET['id']);
        $view = new Renderer('views/hashtags/');
        $view->hashtag = $hashtags;
        $view->render('show.php');
    }
}
