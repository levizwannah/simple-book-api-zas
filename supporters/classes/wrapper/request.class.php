<?php
/*
|-------------------------------------------------------------
| Comments with #.# are required by `zas` for code insertion.
|-------------------------------------------------------------
*/

namespace Wrapper;

#uns#


class Request   {

    // use traits
    #ut#

    public function __construct(){
        // code...
    }

    public static function data(){
        return new Request();
    }

    public function __get($name)
    {
        return $_REQUEST[$name];
    }
}

?>