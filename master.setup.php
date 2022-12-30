<?php
/*
|----------------------------------------------------------
| Do all necessary auto-loading here.
| Vendor auto-loading is done by the auto-loader.
|----------------------------------------------------------
*/

use CustomZas\Cli;
use Dotenv\Dotenv;
use Functions\GlobalFunctions;
use Support\Facades\Route;

require(__DIR__ . "/auto-loader.class.php");

/*--------------------------------------------------------
|   GLOBAL VARIABLES
|---------------------------------------------------------
*/
$zasConfig = json_decode(file_get_contents(__DIR__ . "/zas-config.json"));

$autoLoader = new AutoLoader();
$autoLoader->autoLoad();

/*----------------------------------------------------------
| Loading Env variables
|-----------------------------------------------------------
*/
$dotEnv = Dotenv::createImmutable(__DIR__);
$dotEnv->load();

/*-----------------------------------------------------------
| Boot Global Functions
|------------------------------------------------------------
*/
GlobalFunctions::boot();

/*-----------------------------------------------------------
| Route Authorization
|------------------------------------------------------------
*/
Route::authorize();

?>