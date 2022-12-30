<?php
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

$id = Request::data()->id;

!empty($id) || exit(
    Response::code(401)->json(
        ResponseConstant::ERROR,
        "Please choose the book to fetch"
    )
);

$book = new Book($id);

exit(
    Response::json(ResponseConstant::SUCCESS, "found book", $book)
);

?>