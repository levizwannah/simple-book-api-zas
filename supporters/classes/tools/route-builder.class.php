<?php
/*
|-------------------------------------------------------------
| Comments with #.# are required by `zas` for code insertion.
|-------------------------------------------------------------
*/

namespace Tools;

use Zas\FileMaker;

use function Functions\rootDir;

#uns#


class RouteBuilder   {

    // use traits
    #ut#
    public array $routes = [];
    
    public function __construct(){
        // code...
    }

    public function build($dir = false, $final = true){
        global $zasConfig;

        $path = $dir;

        if(!$dir){
            $path = rootDir() . "/" . $zasConfig->directories->actors . "/" . $zasConfig->actors->foreground;
        }
        

        $files = glob("$path/*");

        foreach($files as $file){
            $foreground = $zasConfig->actors->foreground;

            $key = preg_split("/$foreground/", $file, -1, PREG_SPLIT_NO_EMPTY);

            if(is_dir($file)){
                $this->routes[count($this->routes)] = substr($key[count($key) - 1], 1); 

                $this->build($file, false);

                continue;
            }

            $routed = false;

            $content = file_get_contents($file);
            if(preg_match("/<\?php\s+#routed/", $content)) $routed = true;

            if(!$routed) continue;

            $this->routes[$key[count($key) - 1]] = 1;
        }

        if(!$final) return;

        $maker = new FileMaker($zasConfig);
        $file = $maker->in($zasConfig->path->routes)->make($zasConfig->routesFile, "");

        $content = "return [\n";
        
        foreach($this->routes as $p => $v){

            if(is_numeric($p)){
                $content .= "\t/*\n";
                $content .= "\t|---------------------------\n";
                $content .= "\t| $v folder routes\n";
                $content .= "\t|----------------------------\n";
                $content .= "\t*/\n";
                continue;
            }

            $content .= "\t\"$p\" => 1,\n";
        }

        $content .= "];\n";
        file_put_contents($file["fullPath"], "<?php\n\n$content\n?>");

        $this->routes = [];
    }
}

?>