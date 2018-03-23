<?php
namespace App\Controllers;
use App\Renderer as Renderer;
use App\Models\Users as User;

/**
 * AlgorithmsController class that accesses data from the
 * Algorithm model class and passes it to a rendering class
 * to be rendered as a view.
 * 
 * @author dplante
 *
 */
class UserController
{
    public function index()
    {
        $users = User::complete();
        $view = new Renderer('views/users/');
        $view->users = $users;
        $view->render('index.php');
    }

    public function show()
    {
        if (!isset($_GET['id']))
            $this->index();

        $users = User::find($_GET['id']);
        $view = new Renderer('views/users/');
        $view->users = $users;
        $view->render('show.php');
    }
}