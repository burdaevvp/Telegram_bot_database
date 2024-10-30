<?php 
	//include_once(__DIR__."/Loader/ClassLoader.php");

//include_once("ClassLoader.php");
$g_site_root = $_SERVER['DOCUMENT_ROOT'] . "/Loader/ClassLoader.php";
//echo $g_site_root;
include $_SERVER['DOCUMENT_ROOT'] . "//Loader//ClassLoader.php";
//include $_SERVER['DOCUMENT_ROOT'] . '/admin/controllers/Controller.php';

\Loader\ClassLoader::getInstance()->init();

\Loader\Route::getInstance()->init();
?>
