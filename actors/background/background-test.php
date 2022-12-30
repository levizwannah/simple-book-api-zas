<?php
/*
|-------------------------------------------------------------
| This includes the default setup file in the directory of
| this actor file. Edit it to add default behavior to
| the files in this directory.
|-------------------------------------------------------------
*/

use CustomZas\Cli;
use CustomZas\Config;

require(__DIR__ ."/setup.php");

$name = $argv[1];
$age = $argv[2];

Cli::log("Hello $name you are $age year(s) old");
Cli::log("These are your jokes: ". Config::jokes("joke1") . " and " . Config::jokes("joke2"));

?>