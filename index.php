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

// Loading website config file
require_once('configs/website.conf.php');

// Loading Router
require_once(ROOT_DIR.'/libs/vendors/AltoRouter/AltoRouter.php');
$router = new AltoRouter();
// Loading Routes file
require_once(ROOT_DIR.'/routes/web.routes.php');

// Loading Faker
require_once(ROOT_DIR.'/libs/vendors/Faker/autoload.php');
$faker = Faker\Factory::create();
// generate data by accessing properties
echo $faker->name;
?>