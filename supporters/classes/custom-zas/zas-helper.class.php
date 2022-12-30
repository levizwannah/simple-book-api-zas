<?php
// Comments with #.# are required by `zas` for code insertion.

namespace CustomZas;

use Tools\RouteBuilder;
use \Zas\Cli as ZasCli;
#uns#


/**
 * Take a look at Zas\ZasHelper in levizwannah\zas-php-cli
 * to understand what can be placed in this file.
 */
class ZasHelper extends ZasCli  {
    
    # define your custom command execution logic in this file
    # other dependencies for your command to execute will be
    # written by you.

    public function buildRoutes($argc, $argv){
        static::log("...Building Routes...");

        $builder = new RouteBuilder();

        $builder->build();  

        Cli::log("Route Builder Successfully build routes");
        return $this;
    }
}

?>