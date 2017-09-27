<?php

// global defines
define('ROOT', realpath('..').'/');
define('SCRIPTROOT', ROOT.'scripts/');
define('TEMPLATEROOT', ROOT.'content/templates/');
define('VIEWROOT', ROOT.'content/views/');
define('EXT', '.php');

// grab required scripts
require SCRIPTROOT.'AltoRouter/AltoRouter.php';

// setup routing
$routes = new AltoRouter();

// load the actual routes
require ROOT.'routes.php';

// handle the route request
$route = $routes->match();

// error page handling
function ErrorHandler($Error)
{
  ob_get_clean();

  http_response_code($Error);
  $error = $Error;

  // TODO
  echo $error;

  die();
}

if (!$route)
{
  ErrorHandler(404);
}
else
{
  try
  {
    // get route target information
    $target = $route['target'];
    $source = $target[SOURCE].EXT;

    $active = isset($target[ACTIVE]) ? $target[ACTIVE] : '';

    // start output buffering
    ob_start();

    // page view
    require VIEWROOT.$source;

    if (!isset($title))
      $title = $target[TITLE];

    // get page output
    $page = ob_get_clean();

    // page header
    require TEMPLATEROOT.'header.php';

    // page body
    require TEMPLATEROOT.'body.php';

    // page
    echo $page;

    // page footer
    require TEMPLATEROOT.'footer.php';
  }
  catch (Exception $e)
  {
    if (SHOW_ERRORS)
    {
      ob_get_clean();

      http_response_code(500);
      echo $e->getMessage();

      die();
    }
    else
    {
      ErrorHandler(500);
    }
  }
}

?>
