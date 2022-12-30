<?php
/*
|-------------------------------------------------------------
| Comments with #.# are required by `zas` for code insertion.
|-------------------------------------------------------------
*/

namespace Support\Facades;

use Book as GlobalBook;
use \Support\AbstractFacade;
#uns#


/**
 * @method static array all()
 */
class Book extends AbstractFacade  {

    // use traits
    #ut#

    public function __construct(){
        // code...
    }

	protected static function accessor() {
		return GlobalBook::class;
	}
}

?>