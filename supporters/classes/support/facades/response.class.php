<?php
/*
|-------------------------------------------------------------
| Comments with #.# are required by `zas` for code insertion.
|-------------------------------------------------------------
*/

namespace Support\Facades;

use Formatters\Response as FormattersResponse;
use \Support\AbstractFacade;
#uns#


/**
 * @method static string json(string $status, string $message, array $data);
 * @method static \Formatters\Response code(int $code)
 * @method static int code()
 */
class Response extends AbstractFacade  {

    // use traits
    #ut#

    public function __construct(){
        // code...
    }

	protected static function accessor() {
		return FormattersResponse::class;
	}
}

?>