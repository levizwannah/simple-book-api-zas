<?php #routed
/*
|-------------------------------------------------------------
| This includes the default setup file in the directory of
| this actor file. Edit it to add default behavior to
| the files in this directory.
|-------------------------------------------------------------
*/

use Formatter\ResponseConstant;
use Support\Facades\Book;
use Support\Facades\Response;

require(__DIR__ ."/setup.php");


exit(
    Response::json(ResponseConstant::SUCCESS, "All books", Book::all())
);

?>