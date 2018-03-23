<?php
require_once __DIR__ . '/vendor/autoload.php';

require_once('vendor/j7mbo/twitter-api-php/TwitterAPIExchange.php');
require_once('config.inc.php');

if(!isset($_SESSION['settings']))
{
    $_SESSION['settings'] = array(
        'oauth_access_token' => OAUTH_ACCESS_TOKEN,
        'oauth_access_token_secret' => OAUTH_ACCESS_TOKEN_SECRET,
        'consumer_key' => CONSUMER_KEY,
        'consumer_secret' => CONSUMER_SECRET);

}


if (!isset($_SESSION['twitter']))
{
    $_SESSION['twitter'] = new TwitterAPIExchange($_SESSION['settings']);
}

if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'main';
    $action = 'home';
}

require_once ('views/layout.php');
