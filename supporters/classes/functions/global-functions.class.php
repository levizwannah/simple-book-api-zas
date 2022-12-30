<?php
/*
|-------------------------------------------------------------
| Comments with #.# are required by `zas` for code insertion.
|-------------------------------------------------------------
*/

namespace Functions;

#uns#


class GlobalFunctions   {

    // use traits
    #ut#

    public function __construct(){
        // code...
    }

    public static function boot(){}
}

/**
 * returns the root directory of the project
 * @return string
 */
function rootDir(){
    global $zasConfig;
    $root = $zasConfig->directories->root;
    $parentDir = preg_split("/$root/", __DIR__, 2);

    return $parentDir[0].DIRECTORY_SEPARATOR."$root";
}

/**
 * Get env variable
 * @param string $name
 * @param mixed ...$args
 * 
 * @return mixed
 */
function env($name, ...$args){
    if(empty($args)){
        return $_ENV[$name];
    }

    return putenv("$name={$args[0]}");
}

?>