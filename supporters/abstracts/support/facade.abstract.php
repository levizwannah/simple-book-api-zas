<?php
/*
|-------------------------------------------------------------
| Comments with #.# are required by `zas` for code insertion.
|-------------------------------------------------------------
*/
namespace Support;

#uns#


abstract class AbstractFacade   {

    // use traits
    #ut#

    public function __construct(){
        // code...
    }

    abstract protected static function accessor();

    public static function __callStatic($name, $arguments)
    {
        $class = static::accessor();
        $instance = new $class();

        return $instance->$name(...$arguments);
    }
}

?>