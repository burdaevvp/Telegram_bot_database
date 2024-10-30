<?php
 include_once ("ClassLoader.php");

 ClassLoader::init();

//new HomeController();

if(!isset($_GET["route"])){
    exit();
}
$route = $_GET["route"];
$data = explode("/", $route);

$class = "\\Controller\\" . $data[0];
$controller = new $class;
//echo $data[1]; exit;
echo $controller -> {$data[1]}();