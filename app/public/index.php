<?php
session_start();
require_once __DIR__ . '/../routers/patternrouter.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');



require_once __DIR__ . '/../views/header.php';
$router = new PatternRouter();
$router->route($uri);
require_once __DIR__ . '/../views/footer.php';


?>