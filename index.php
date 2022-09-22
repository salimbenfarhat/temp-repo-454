<?php 
/**
 * Created with sublimetext
 * @author : Salim Benfarhat
 * @website : https://salim.link
 */

// Display all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Define ROOT constant
define('ROOT_DIR', dirname(__DIR__));
// Loading Router
require_once(ROOT_DIR.'/libs/vendors/AltoRouter/AltoRouter.php');
$router = new AltoRouter();
// Loading Routes file
require_once(ROOT_DIR.'/routes/web.routes.php');
?>