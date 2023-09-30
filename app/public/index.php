<?php
require __DIR__ . '/../routers/patternrouter.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

require __DIR__ . '/../views/header.php';
$router = new PatternRouter();
$router->route($uri);
require __DIR__ . '/../views/footer.php';


?>