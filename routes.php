<?php

/**
 * @param $controller
 * @param $action
 */
function route($controller, $action) {
    
    switch($controller) {
        case 'main':
            $controller = new App\Controllers\MainController();
            break;
        case 'users':
            $controller = new App\Controllers\UserController();
            break;
        case 'hashtags':
            $controller = new App\Controllers\HashtagController();
            break;
        case 'followers':
            $controller = new App\Controllers\FollowerController();
            break;
    }

    $controller->{ $action }();
  }

  $controllers = array( 'main' => ['home', 'error'],
                        'users' => ['index', 'show'],
                        'hashtags' => ['index', 'show'],
                        'followers' => ['index', 'show']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      route($controller, $action);
    } else {
      route('main', 'error');
    }
  } else {
    route('main', 'error');
  }
