<?php
/*
|-------------------------------------------------------------
| Comments with #.# are required by `zas` for code insertion.
|-------------------------------------------------------------
*/



#uns#


class DbManager {

    // use traits
    #ut#

    public function __construct(){
        // code...
    }

    public static function connect(){
        $conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);

        return $conn;
    }
}

?>