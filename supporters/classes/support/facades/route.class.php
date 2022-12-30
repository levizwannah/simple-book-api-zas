<?php
/*
|-------------------------------------------------------------
| Comments with #.# are required by `zas` for code insertion.
|-------------------------------------------------------------
*/

namespace Support\Facades;

use Middleware\RouteManager;
use \Support\AbstractFacade;
#uns#


/**
 * @method static void authorize()
 */
class Route extends AbstractFacade  {

    // use traits
    #ut#

    public function __construct(){
        // code...
    }

	protected static function accessor() {
		return RouteManager::class;
	}
}

?>