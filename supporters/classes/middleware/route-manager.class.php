<?php
/*
|-------------------------------------------------------------
| Comments with #.# are required by `zas` for code insertion.
|-------------------------------------------------------------
*/

namespace Middleware;

use Formatter\ResponseConstant;
use RuntimeException;
use Support\Facades\Response;

use function Functions\rootDir;

#uns#


class RouteManager   {

    // use traits
    #ut#

    public function __construct(){
        // code...
    }

    /**
     * Checks if the route accessed is accessible
     */
    public function authorize(){
        global $zasConfig;

        $routePath = rootDir()."/" . $zasConfig->path->routes . "/" . 
        $zasConfig->routesFile . ".php";

        if(!isset($_SERVER["REQUEST_URI"])) return true;

        $routes = require($routePath);

        $url = $_SERVER['REQUEST_URI'];

        if($_ENV['STAGE'] != "production"){
            global $zasConfig;
            $path = preg_split("/{$zasConfig->actors->foreground}/", $url);

            if(isset($routes[$path[count($path) - 1]])) return;
        }
    
        if(isset($routes[$url])) return;
        
        exit(
            Response::code(403)
            ->json(ResponseConstant::ERROR, "not authorized")
        );

        throw new RuntimeException("Forbidden", 403);
    }
}

?>