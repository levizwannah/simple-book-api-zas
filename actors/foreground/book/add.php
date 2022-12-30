<?php #routed
/*
|-------------------------------------------------------------
| This includes the default setup file in the directory of
| this actor file. Edit it to add default behavior to
| the files in this directory.
|-------------------------------------------------------------
*/

use Formatter\ResponseConstant;
use Support\Facades\Response;
use Wrapper\Request;

require(__DIR__ ."/setup.php");


$req = Request::data();

$book = new Book($req->id);
$book->name($req->name);
$book->serialNumber($req->serialNumber);
$book->author($req->author);
$book->pageCount($req->pageCount);

$book->persist() || exit(
    Response::code(500)
            ->json(ResponseConstant::ERROR, "unable to add the book")
);

exit(
    Response::json(ResponseConstant::SUCCESS, "Successfully added book",
    $book)
)

?>