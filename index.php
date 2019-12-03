<?php
// Ici que des controllers
use Controllers\Teams;

// Charge les classes PHP (ne pas y toucher)
spl_autoload_register(function ($class) {
  $parts = explode('\\', $class);
  $className = array_pop($parts);
  $path = implode(DIRECTORY_SEPARATOR, $parts);
  $file = $className.'.php';
  require strtolower($path) . DIRECTORY_SEPARATOR . $file;
});

$params = explode('/', substr($_SERVER['REQUEST_URI'], 1));
array_shift($params);

$route = $params[0] ? $params[0] : 'teams';

if ($route === 'teams') {
  $controller = new Teams;
  if (isset($params[1])) {
    $controller->showTeam($params[1]);
    var_dump($params[1]);
    // Appeler une methode detail d'une équipe dans le controller Teams
  } else {
    $controller->listTeams();
  }
} else {
  throw new\Exception('Page not found !');
}
?>
