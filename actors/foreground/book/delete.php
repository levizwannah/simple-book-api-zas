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
use Wrapper\Request;

require(__DIR__ ."/setup.php");

$id = Request::data()->id;

!empty($id) || exit(
    Response::code(401)->json(
        ResponseConstant::ERROR,
        "Please choose a book to delete"
    )
);

$book = Book::id($id);
$book->load($id);
$book->delete() or exit(
    Response::code(500)
    ->json(
        ResponseConstant::ERROR,
        "Could not delete the book"
    )
);

exit(
    Response::json(ResponseConstant::SUCCESS, "Successfully deleted book", $book)
)
?>