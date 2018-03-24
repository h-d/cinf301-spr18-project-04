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
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Twitter API App">
    <meta name="author" content="Hudson">

    <title>Twitter Search App</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        <?php require_once ('views/layout.php');?>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="scripts/search_script.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>



