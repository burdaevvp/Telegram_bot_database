<?php 
	namespace Loader;

class ClassLoader {

    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new ClassLoader();
        }
        //spl_autoload_register([self::$instance, "load"]);
        return self::$instance;
    }

    public function init() {
        spl_autoload_register([self::$instance, "load"]);
    }

    public function load($name) {
        file_put_contents($_SERVER["DOCUMENT_ROOT"] . "/logs/loaders.log", $_SERVER["DOCUMENT_ROOT"] . "/" . str_replace("\\", "/", $name) . ".php\n", FILE_APPEND);
      //  include_once($_SERVER["DOCUMENT_ROOT"] . "/" . str_replace("\\", "/", $name) . ".php");
        //include_once($_SERVER["DOCUMENT_ROOT"] . "/" . str_replace("\\", "/", $name) . ".php");
       // $g_site_root = $_SERVER['DOCUMENT_ROOT'] . "/" . str_replace("\\", "/", $name) . ".php";
         //   $_SERVER['DOCUMENT_ROOT'] . "/Loader/ClassLoader.php";
        echo $name;//exit;
       // include_once($_SERVER["DOCUMENT_ROOT"] . "/" . str_replace("\\", "/", $name) . ".php");
       // $file = dirname(__FILE__) . DIRECTORY_SEPARATOR .str_replace("\\", "/", $name) . ".php";
       // echo $file;exit;
        //include_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . $name);
        $g_site_root = $_SERVER["DOCUMENT_ROOT"] . "/" . str_replace("\\", "/", $name) . ".php";
        //dirname(__FILE__) . DIRECTORY_SEPARATOR . $name;
        echo $g_site_root;
        include_once($g_site_root);//exit;
        //include $_SERVER['DOCUMENT_ROOT'] . "/" . str_replace("\\", "/", $name) . ".php";
        //include $_SERVER['DOCUMENT_ROOT'] . "/Loader/ClassLoader.php";
    }
}
?>
