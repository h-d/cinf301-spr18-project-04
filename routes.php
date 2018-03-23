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
        case 'tweets':
            $controller = new App\Controllers\TweetController();
            break;
        case 'hashtags':
            $controller = new App\Controllers\HashtagController();
            break;
    }

    $controller->{ $action }();
  }

  $controllers = array( 'main' => ['home', 'error'],
                        'users' => ['index', 'show'],
                        'tweets' => ['index', 'show'],
                        'hashtags' => ['index', 'show']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      route($controller, $action);
    } else {
      route('main', 'error');
    }
  } else {
    route('main', 'error');
  }
